<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlTiposTarjetasCreditoDebitoTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlTiposTarjetasCreditoDebitoTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlTiposTarjetasCreditoDebitoTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlTiposTarjetasCreditoDebito');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlTiposTarjetasCreditoDebito y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlTiposTarjetasCreditoDebitoTable::getInstance()->createQuery('ttcd');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_tipos_tarjetas_credito_debito'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlTiposTarjetasCreditoDebitoCSV() {
        return DmlTiposTarjetasCreditoDebitoTable::getAlias();
    }

}