<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlAhorrosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlAhorrosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlAhorrosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlAhorros');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlAhorros y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlAhorrosTable::getInstance()->createQuery('ah');
    }

    /**
     * getCuentasDeAhorros obtiene todas las cuantas de ahorros asociados al cliente
     * dentro de los diferentes bancos que tenga.
     * 
     * @return type $dql
     */
    public static function getCuentasDeAhorros() {
        $select = 'ah.id, ah.ah_numero_cuenta, tc.id, cb.id, en.id, en.en_alias, pe.id';
        $sql = DmlAhorrosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('ah.DmlTiposCuentas tc')
                ->innerJoin('ah.DmlContratosBancarios cb')
                ->innerJoin('cb.DmlEntidades en')
                ->innerJoin('cb.DmlPersonas pe')
                ->where('tc.id = ?', array(1))// <<-- OJO aqui hay que trabajar por código, no por ID
                ->andWhere('pe.id = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')));
        return $sql;
    }

}