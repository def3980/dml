<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlMovimientosTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlMovimientosTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlMovimientosTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlMovimientos');
    }

    /**
     * getAlias devuelve una instancia de la clase del modelo DmlMovimientos y ya
     * indicado un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlMovimientosTable::getInstance()->createQuery('mo');
    }

    /**
     * getListaDeMovimientos obtiene todos los registros de movimientos bancarios 
     * ordenados por id y por fecha de manera descendente.
     * 
     * @return type dql
     */
    public static function getListaDeMovimientos() {
        $select = 'mo.id, mo.mo_fecha, mo.mo_concepto, mo.mo_tipo, mo.mo_documento, '
                . 'mo.mo_oficina, mo.mo_monto, mo.mo_saldo, mo.mo_mini_detalle_json,'
                . 'ah.id, tc.id, cb.id, en.id, pe.id';
        $sql = DmlMovimientosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('mo.DmlAhorros ah')
                ->innerJoin('ah.DmlTiposCuentas tc')
                ->innerJoin('ah.DmlContratosBancarios cb')
                ->innerJoin('cb.DmlEntidades en')
                ->innerJoin('cb.DmlPersonas pe')
                ->where('MONTH(mo.mo_fecha) = MONTH(CURDATE())')
                ->andWhere('YEAR(mo.mo_fecha) = YEAR(CURDATE())');
        $sq1 = $sql->createSubquery()
                    ->select('sqah.id')
                    ->from('DmlAhorros sqah')
                    ->limit(1);
        $sq2 = $sql->createSubquery()
                    ->select('sqtc.id')
                    ->from('DmlTiposCuentas sqtc')
                    ->limit(1);
        $sq3 = $sql->createSubquery()
                    ->select('sqcb.id')
                    ->from('DmlContratosBancarios sqcb')
                    ->limit(1);
        return $sql->andWhere('mo.ahorros = ('.$sq1->getDql().')')
                    ->andWhere('ah.tipos_cuentas = ('.$sq2->getDql().')')
                    ->andWhere('ah.contratos_bancarios = ('.$sq3->getDql().')')
                    ->andWhere('mo.mo_borrado_logico = 0')
                    ->andWhere('cb.entidades = 7')// <<--- OJO aqui
                    ->orderBy('mo.id DESC');
    }
    
    public static function getSiExisteElMovimientoBancario($arrMov, $cta) {
        $select = 'mo.id';
        $sql = DmlMovimientosTable::getAlias()
                ->addSelect($select)
                ->where('mo.mo_fecha LIKE ?', array('%'.$arrMov[0].'%'))
                ->andWhere('mo.mo_concepto LIKE ?', array('%'.$arrMov[1].'%'))
                ->andWhere('mo.mo_tipo LIKE ?', array('%'.$arrMov[2].'%'))
                ->andWhere('mo.mo_documento LIKE ?', array('%'.$arrMov[3].'%'))
                ->andWhere('mo.mo_oficina LIKE ?', array('%'.$arrMov[4].'%'))
                ->andWhere('mo.mo_monto LIKE ?', array('%'.$arrMov[5].'%'))
                ->andWhere('mo.mo_saldo LIKE ?', array('%'.$arrMov[6].'%'))
                ->andWhere('mo.ahorros = ?', array($cta));
        return $sql->execute()->count();
    }

}