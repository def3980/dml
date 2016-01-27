<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlTarjetasCreditoDebitoTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlTarjetasCreditoDebitoTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlTarjetasCreditoDebitoTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlTarjetasCreditoDebito');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlTarjetasCreditoDebito
     * y ya indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlTarjetasCreditoDebitoTable::getInstance()->createQuery('tcd');
    }

    /**
     * getMisTarjetasCredito obtiene todas las tarjetas de crédito asociadas al
     * usuario logueado
     * 
     * @return type
     */
    public static function getMisTarjetasCredito() {
        $select = 'tcd.tcd_numero';
        return DmlTarjetasCreditoDebitoTable::getAlias()
                ->addSelect($select)
                ->innerJoin('tcd.DmlTiposTarjetasCreditoDebito ttcd')
                ->innerJoin('tcd.DmlContratosBancarios cb')
                ->where('ttcd.ttcd_credito_debito = ?', array('credito'))
                ->andWhere('cb.personas = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')))
                ->andWhere('tcd.tcd_borrado_logico = ?', array(0))
                ->orderBy('tcd.id DESC');
    }

    /**
     * getInfoMisTarjetasCredito obtiene toda la info de todas las tarjetas de 
     * crédito asociadas al usuario logueado
     * 
     * @return type
     */
    public static function getInfoMisTarjetasCredito() {
        $select = 'tcd.id, tcd.tcd_numero, '
                . 'ttcd.ttcd_nombre';
        return DmlTarjetasCreditoDebitoTable::getMisTarjetasCredito()
                ->addSelect($select);
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_tarjetas_credito_debito'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlTarjetasCreditoDebitoCSV() {
        return DmlTarjetasCreditoDebitoTable::getAlias();
    }

}