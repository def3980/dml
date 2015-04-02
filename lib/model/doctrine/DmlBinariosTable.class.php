<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlBinariosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlBinariosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlBinariosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlBinarios');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlBinarios
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlBinariosTable::getInstance()->createQuery('bi');
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
     * getBinPorFactura, muestra los identificadores de los binarios asociados a
     * una factura.
     * 
     * @param type $idFa identificador de la factura
     * @return type $dql
     */
    public static function getBinPorFactura($idFa) {
        $select = "bi.id";
        return DmlBinariosTable::getAlias()
                ->addSelect($select)
                ->where('bi.facturas = ?', array($idFa))
                ->andWhere('bi.bi_borrado_logico = ?', array(!true));
    }
    
    /**
     * setBinLogicalDelete, realiza un actualizacion de la tabla DmlBinarios para
     * poder trabajar borrado logicos
     * 
     * @param type $id
     */
    public static function setBinLogicalDelete($idFa, $idBi) {
        if (DmlRespaldosTable::setRsLogicalDelete($idFa, $idBi)) {
            $upd = Doctrine_Query::create()
                    ->update('DmlBinarios')
                    ->set(array(
                        'bi_fecha_borra' => date('Y-m-d H:i:s'), 
                        'bi_quien_borra' => DmlBinariosTable::sfCxt()->getUser()->getAttribute('id'),
                        'bi_borrado_logico' => true
                    ))
                    ->where('id = ?', array($idBi))
                    ->execute();
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * getConteoBinNoEliminados, cuenta todos los binarios que no estan en estado
     * lógico de borrado, es decir 1
     * 
     * @param type $idFa
     * @return type int Numero de binarios no borrados
     */
    public static function getConteoBinNoEliminados($idFa) {
        return DmlBinariosTable::getBinPorFactura($idFa)->execute()->count();
    }
    
    public static function getBinYFactura($idFa) {
        $select = "bi.id, bi.bi_nombre_original, bi.bi_tamanio_bytes, "
                . "fa.id, fa.fa_numero_factura";
        return DmlBinariosTable::getBinPorFactura($idFa)
                ->addSelect($select)
                ->innerJoin('bi.DmlFacturas fa');
    }

}