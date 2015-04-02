<?php

/**
 * Fecha creacion : "Miercoles, 4 Marzo 2015 08:42:17"
 */

/**
 * DmlBinariosCompartidosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlBinariosCompartidosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlBinariosCompartidosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlBinariosCompartidos');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlBinariosCompartidos
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlBinariosCompartidosTable::getInstance()->createQuery('bc');
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
     * getBinariosPorIdPago muestra todos los binarios de respaldo que se guaradaron
     * con el pago
     * 
     * @param type $idPago identificador del pago
     * @return type dql
     */
    public static function getBinariosPorIdPago($idPago) {
        $select = "bc.id, "
                . "bi.id, bi.bi_nombre_original, bi.bi_tamanio_bytes, bi.bi_mime_type, "
                . "pa.id, pa.pa_numero_factura";
        return DmlBinariosCompartidosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('bc.DmlBinarios bi')
                ->innerJoin('bc.DmlPagos pa')
                ->where('pagos = ?', array($idPago))
                ->andWhere('bi.bi_borrado_logico = ?', array(!true))
                ->andWhere('bc.bc_borrado_logico = ?', array(!true));
    }

    public static function getCountNonLogicalDeleteByIdPago($id) {
        return DmlBinariosCompartidosTable::getBinariosPorIdPago($id)->execute()->count();
    }
    
    /**
     * setBinComLogicalDelete, realiza un actualizacion de la tabla DmlBinariosCompartidos para
     * poder trabajar borrado logicos
     * 
     * @param type $id
     */
    public static function setBinComLogicalDelete($id) {
        $upd = Doctrine_Query::create()
                ->update('DmlBinariosCompartidos')
                ->set(array(
                    'bc_fecha_borra' => date('Y-m-d H:i:s'), 
                    'bc_quien_borra' => DmlBinariosCompartidosTable::sfCxt()->getUser()->getAttribute('id'),
                    'bc_borrado_logico' => true
                ))
                ->where('binarios = ?', array($id))
                ->execute();
        return true;
    }
    
    public static function getBinSharefiles() {
        $select = "bc.id, "
                . "bi.id, bi.bi_nombre_original, bi.bi_tamanio_bytes, bi.bi_mime_type, "
                . "pa.id, pa.pa_numero_factura";
        return DmlBinariosCompartidosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('bc.DmlBinarios bi')
                ->innerJoin('bc.DmlPagos pa')
//                ->where('pagos = ?', array($idPago))
                ->where('bi.bi_borrado_logico = ?', array(!true))
                ->andWhere('bc.bc_borrado_logico = ?', array(!true));
    }
}