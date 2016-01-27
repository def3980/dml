<?php

/**
 * Fecha creacion : "Lunes, 5 Enero 2015 09:00:56"
 */

/**
 * DmlBeneficiariosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlBeneficiariosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlBeneficiariosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlBeneficiarios');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlBeneficiarios y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlBeneficiariosTable::getInstance()->createQuery('be');
    }
    
    /**
     * Devuelve todos los campos y datos de la tabla 'dml_beneficiarios'
     * que podrán ser utilizados de diferentes maneras en los datos que devuelve
     * Doctrine
     * 
     * @return type Doctrine
     */
    public static function getBkpDmlBeneficiariosCSV() {
        return DmlBeneficiariosTable::getAlias();
    }

}