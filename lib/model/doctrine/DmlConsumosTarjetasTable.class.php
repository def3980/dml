<?php

/**
 * Fecha creacion : "Lunes, 1 Junio 2015 13:03:02"
 */

/**
 * DmlConsumosTarjetasTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlConsumosTarjetasTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlConsumosTarjetasTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlConsumosTarjetas');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlConsumosTarjetas y
     * contiene un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlConsumosTarjetasTable::getInstance()->createQuery('ct');
    }

    /**
     * getListaDeConsumos obtiene todos los registros de consumos asociados a la(s)
     * factura(s) correspondiente(s), ordenados por id y por fecha de manera 
     * descendente.
     * 
     * @return type dql
     */
    public static function getListaDeConsumos() {
        $select = 'ct.id, ct.ct_iva, ct.ct_ice, ct.ct_comision, ct.ct_valor_parcial, '
                . 'fa.id, fa.fa_numero_factura, fa.fa_fecha, fa.fa_detalle, fa.fa_beneficiarios_json, '
                . 'fa.fa_valor_total';
        $dql = DmlConsumosTarjetasTable::getAlias()
                ->addSelect($select)
                ->innerJoin('ct.DmlFacturas fa')
                ->where('ct.personas = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')))
                ->orderBy('fa.fa_fecha DESC');

        return $dql;
    }
}