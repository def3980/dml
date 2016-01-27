<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlContratosBancariosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlContratosBancariosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlContratosBancariosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlContratosBancarios');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlContratosBancarios y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlContratosBancariosTable::getInstance()->createQuery('cb');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_contratos_bancarios'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlContratosBancariosCSV() {
        return DmlContratosBancariosTable::getAlias();
    }

}