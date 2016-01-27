<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlTiposGastosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlTiposGastosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlTiposGastosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlTiposGastos');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlTiposGastos y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlTiposGastosTable::getInstance()->createQuery('tg');
    }

    /**
     * Devuelve todos los campos y datos de la tabla 'dml_tipos_gastos'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlTiposGastosCSV() {
        return DmlTiposGastosTable::getAlias();
    }

}