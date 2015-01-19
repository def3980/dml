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
     * getBinariosPorIdPago muestra todos los binarios de respaldo que se guaradaron
     * con el pago
     * 
     * @param type $idPago identificador del pago
     * @return type dql
     */
    public static function getBinariosPorIdPago($idPago) {
        $select = "bi.id, bi.bi_nombre_original, bi.bi_tamanio_bytes, bi.bi_binario, bi.bi_mime_type, "
                . "pa.id, pa.pa_numero_factura";
        return DmlBinariosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('bi.DmlPagos pa')
                ->where('pagos = ?', array($idPago))
                ->andWhere('bi.bi_borrado_logico = ?', array(!true));
    }
    
    /**
     * setBinLogicalDelete, realiza un actualizacion de la tabla DmlBinarios para
     * poder trabajar borrado logicos
     * 
     * @param type $id
     */
    public static function setBinLogicalDelete($id) {
        $upd = Doctrine_Query::create()
                ->update('DmlBinarios')
                ->set(array(
                    'bi_fecha_borra' => date('Y-m-d H:i:s'), 
                    'bi_quien_borra' => DmlBinariosTable::sfCxt()->getUser()->getAttribute('id'),
                    'bi_borrado_logico' => true
                ))
                ->where('id = ?', array($id))
                ->execute();
        return true;
    }
    
    public static function getCountNonLogicalDeleteByIdPago($id) {
        return DmlBinariosTable::getBinariosPorIdPago($id)->execute()->count();
    }

}