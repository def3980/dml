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
     * getListaDePagos obtiene todos los registros de pagos ordenados por id y por
     * fecha de manera descendente.
     * 
     * @return type dql
     */
    public static function getListaDePagos() {
        $select = 'pa.id, pa.pa_fecha, pa.pa_numero_factura, pa.pa_detalle, pa.pa_valor_total';
        return DmlPagosTable::getAlias()
                ->addSelect($select)
                ->where('MONTH(pa.pa_fecha) = MONTH(CURDATE())')
//                ->where('MONTH(pa.pa_fecha) = MONTH(DATE_ADD(NOW(),INTERVAL -1 MONTH))')
                ->orderBy('pa.id DESC, pa.pa_fecha DESC');
    }
    
    /**
     * getCountNonInvoice, retorna el total de registros que no son facturas, es decir
     * recibos de consumo o pago que no tienen numero de facrura registrado
     * 
     * @return type integer
     */
    public static function getCountNonInvoice() {
        return DmlPagosTable::getAlias()
                ->addSelect('pa.id')
                ->where('pa.pa_con_sin_factura = ?', array(!true))
                ->execute()
                ->count();
    }

}