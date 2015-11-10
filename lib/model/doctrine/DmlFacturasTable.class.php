<?php

/**
 * Fecha creacion : "Miercoles, 11 Marzo 2015 10:16:20"
 */

/**
 * DmlFacturasTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlFacturasTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlFacturasTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlFacturas');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlFacturas y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlFacturasTable::getInstance()->createQuery('fa');
    }
    
    /**
     * getCountNonInvoice, retorna el total de registros que no son facturas, es decir
     * recibos de consumo o pago que no tienen numero de factura registrado
     * 
     * @return type integer
     */
    public static function getCountNonInvoice() {
        return DmlFacturasTable::getAlias()
                ->addSelect('fa.id')
                ->where('fa.fa_con_sin_factura = ?', array(!true))
                ->execute()
                ->count();
    }
    
    /**
     * getListaDeFacturas obtiene todos los registros de facturas ordenados por 
     * id y por fecha de manera descendente.
     * 
     * @return type dql
     */
    public static function getListaDeFacturas() {
        $select = 'fa.id, fa.fa_fecha, fa.fa_numero_factura, fa.fa_detalle';
        return DmlFacturasTable::getAlias()
                ->addSelect($select)
                ->orderBy('fa.fa_fecha DESC');
    }
    
    public static function getCargaInformacionFacturas($idFa) {
        $select = 'fa.id, fa.tipos_gastos, fa.fa_numero_factura, fa.fa_fecha, '
                . 'fa.fa_detalle, fa.fa_beneficiarios_json, fa.fa_valor_total';
        return DmlFacturasTable::getAlias()
                ->addSelect($select)
                ->where('fa.id = ?', array($idFa));
    }

}