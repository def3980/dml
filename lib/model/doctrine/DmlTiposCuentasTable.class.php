<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlTiposCuentasTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlTiposCuentasTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlTiposCuentasTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlTiposCuentas');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlTiposCuentas y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlTiposCuentasTable::getInstance()->createQuery('tc');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_tipos_cuentas'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlTiposCuentasCSV() {
        return DmlTiposCuentasTable::getAlias();
    }

}