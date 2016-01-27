<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlPersonasTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlPersonasTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlPersonasTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlPersonas');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlPersonas y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlPersonasTable::getInstance()->createQuery('pe');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_personas'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlPersonasCSV() {
        return DmlPersonasTable::getAlias();
    }

}