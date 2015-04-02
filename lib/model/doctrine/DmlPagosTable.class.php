<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlPagosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlPagosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlPagosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlPagos');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlPagos y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlPagosTable::getInstance()->createQuery('pa');
    }
    
    /**
     * getListaDePagos obtiene todos los registros de pagos asociados a la o las
     * factura(s) correspondientes, ordenados por id y por fecha de manera 
     * descendente.
     * 
     * @return type dql
     */
    public static function getListaDePagos() {
        $select = 'pa.id, pa.pa_iva, pa.pa_ice, pa.pa_comision, pa.pa_valor_parcial, '
                . 'fa.id, fa.fa_numero_factura, fa.fa_fecha, fa.fa_detalle, fa.fa_beneficiarios_json, '
                . 'fa.fa_valor_total';
        $dql = DmlPagosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('pa.DmlFacturas fa')
                ->where('MONTH(fa.fa_fecha) = MONTH(CURDATE())')
//                ->where('MONTH(fa.fa_fecha) >= MONTH(DATE_ADD(NOW(), INTERVAL -2 MONTH))')
                ->andWhere('pa.personas = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')))
                ->orderBy('fa.fa_fecha DESC');

        return $dql;
    }

    public static function getListaDePagosPorTexto($txt) {
        return DmlPagosTable::getListaDePagos()
                ->where('fa.fa_detalle LIKE ?', array('%'.$txt.'%'))
                ->andWhere('pa.personas = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')));
    }
}