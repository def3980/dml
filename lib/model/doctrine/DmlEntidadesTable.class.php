<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlEntidadesTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlEntidadesTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlEntidadesTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlEntidades');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlEntidades y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlEntidadesTable::getInstance()->createQuery('en');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_entidades'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlEntidadesCSV() {
        return DmlEntidadesTable::getAlias();
    }

}