<?php

/**
 * Fecha creacion : "Jueves, 12 Marzo 2015 12:52:44"
 */

/**
 * DmlRespaldosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlRespaldosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlRespaldosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlRespaldos');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlRespaldos
     * indicando un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlRespaldosTable::getInstance()->createQuery('rs');
    }

    /**
     * sfCxt me resume el acceso hacia las variables de sesion y otras opciones
     * a la vez que sólo aqui las puedo usar.
     * 
     * @return type
     */
    private static function sfCxt() {
        return sfContext::getInstance();
    }

    /**
     * setBinComLogicalDelete, realiza un actualizacion de la tabla DmlBinariosCompartidos para
     * poder trabajar borrado logicos.
     * 
     * @param type $idFa Identificador de la factura
     * @param type $idBi Identificador del binario
     * 
     * @return type boolean true Despues de actualizar la tabla DmlRespaldos
     */
    public static function setRsLogicalDelete($idFa, $idBi) {
        $pa = Doctrine_Core::getTable('DmlPagos')
                ->findByDql('facturas = ? AND personas = ?', array(
                    $idFa, 
                    DmlRespaldosTable::sfCxt()->getUser()->getAttribute('id'))
                )
                ->getFirst();
        $upd = Doctrine_Query::create()
                ->update('DmlRespaldos')
                ->set(array(
                    'rs_fecha_borra' => date('Y-m-d H:i:s'), 
                    'rs_quien_borra' => DmlRespaldosTable::sfCxt()->getUser()->getAttribute('id'),
                    'rs_borrado_logico' => true
                ))
                ->where('pagos = ?', array($pa->getId()))
                ->andWhere('binarios = ?', array($idBi))
                ->execute();
        return true;
    }
    
    /**
     * getRsBiFa, devuelve tod la informacion de respaldos en PDF's de las facturas
     * asociadas a uno o mas pagos
     * 
     * @param type $idFa identificador de factura
     * @param type $idPa identificador de pago asociado a la factura
     * @return type dql
     */
    public static function getRsBiFa($idFa, $idPa) {
        $select = 'rs.id, '
                . 'bi.id, bi.bi_tamanio_bytes, '                
                . 'fa.id, fa.fa_numero_factura';
        return DmlRespaldosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('rs.DmlBinarios bi')
                ->innerJoin('bi.DmlFacturas fa')
                ->where('rs.pagos = ?', array($idPa))
                ->andWhere('bi.facturas = ?', array($idFa))
            ;
    }
    
    /**
     * getRsBiFaCount, cuenta ls archivos de respaldos asociados a una factura y
     * un pago.
     * 
     * @param type $idFa identificador de factura
     * @param type $idPa identificador de pago asociado a la factura
     * @return type int Numero de registro bajo las condiciones de la consulta
     */
    public static function getRsBiFaCount($idFa, $idPa) {
        return DmlRespaldosTable::getRsBiFa($idFa, $idPa)->execute()->count();
    }

}