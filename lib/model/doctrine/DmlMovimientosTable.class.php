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
    public static function getListaDeMovimientos($cuenta = null) {
        $select = 'mo.id, mo.mo_fecha, mo.mo_concepto, mo.mo_tipo, mo.mo_documento, '
                . 'mo.mo_oficina, mo.mo_monto, mo.mo_saldo, mo.mo_mini_detalle_json, '
                . 'ah.id, tc.id, cb.id, en.id, pe.id';
        $sql = DmlMovimientosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('mo.DmlAhorros ah')
                ->innerJoin('ah.DmlTiposCuentas tc')
                ->innerJoin('ah.DmlContratosBancarios cb')
                ->innerJoin('cb.DmlEntidades en')
                ->innerJoin('cb.DmlPersonas pe')
//                ->where('MONTH(mo.mo_fecha) = MONTH(CURDATE())')
//                ->where('MONTH(mo.mo_fecha) >= MONTH(DATE_ADD(NOW(), INTERVAL -6 MONTH))')
//                ->where('MONTH(mo.mo_fecha) >= MONTH(DATE_ADD(NOW(), INTERVAL -3 MONTH))')
//                ->andWhere('YEAR(mo.mo_fecha) = YEAR(CURDATE())')
                ;
        if (strlen($cuenta) == 0) {
            $sq1 = $sql->createSubquery()
                        ->select('sqah.id')
                        ->from('DmlAhorros sqah')
                        ->innerJoin('sqah.DmlContratosBancarios sqcb')
                        ->innerJoin('sqcb.DmlPersonas sqpe')
                        ->where('sqpe.id = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')))
                        ->limit(1);
        }
        if ($cuenta == 0) {
            $sql = $sql->andWhere('mo.ahorros = ('.$sq1->getDql().')');
        } else {
            $sql = $sql->andWhere('ah.ah_numero_cuenta LIKE ?', array('%'.$cuenta.'%'));
        }
        return $sql->andWhere('mo.mo_borrado_logico = ?', array(0))
                   ->andWhere('pe.id = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')))
                   ->orderBy('mo.id DESC, mo.mo_fecha DESC');
//        $sql = DmlMovimientosTable::getAlias()
//                ->addSelect($select)
//                ->innerJoin('mo.DmlAhorros ah')
//                ->innerJoin('ah.DmlTiposCuentas tc')
//                ->innerJoin('ah.DmlContratosBancarios cb')
//                ->innerJoin('cb.DmlEntidades en')
//                ->innerJoin('cb.DmlPersonas pe')
//                ->where('MONTH(mo.mo_fecha) = MONTH(CURDATE())')
////                ->where('MONTH(mo.mo_fecha) = MONTH(DATE_ADD(NOW(), INTERVAL -1 MONTH))')
//                ->andWhere('YEAR(mo.mo_fecha) = YEAR(CURDATE())');
//        if (strlen($cuenta) == 0) {
//            $sq1 = $sql->createSubquery()
//                        ->select('sqah.id')
//                        ->from('DmlAhorros sqah')
//                        ->limit(1);
//        }
//        $sq2 = $sql->createSubquery()
//                    ->select('sqtc.id')
//                    ->from('DmlTiposCuentas sqtc')
//                    ->limit(1);
//        $sq3 = $sql->createSubquery()
//                    ->select('sqcb.id')
//                    ->from('DmlContratosBancarios sqcb')
//                    ->limit(1);
//        if ($cuenta == 0) {
//            $sql = $sql->andWhere('mo.ahorros = ('.$sq1->getDql().')');
//        } else {
//            $sql = $sql->andWhere('ah.ah_numero_cuenta LIKE ?', array('%'.$cuenta.'%'));
//        }
//        $sql = $sql->andWhere('ah.tipos_cuentas = ('.$sq2->getDql().')')
//                    ->andWhere('ah.contratos_bancarios = ('.$sq3->getDql().')')
//                    ->andWhere('mo.mo_borrado_logico = ?', array(0))
//                    ->andWhere('cb.entidades = 10')// <<--- OJO aqui
//                    ->orderBy('mo.id DESC');
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
    
    public static function getListaDeMovimientosPorConcepto($txt, $cta) {
        $select = 'mo.id, mo.mo_fecha, mo.mo_concepto, mo.mo_tipo, mo.mo_documento, '
                . 'mo.mo_oficina, mo.mo_monto, mo.mo_saldo, mo.mo_mini_detalle_json, '
                . 'ah.id, tc.id, cb.id, en.id, pe.id';
        $sql = DmlMovimientosTable::getAlias()
                ->addSelect($select)
                ->innerJoin('mo.DmlAhorros ah')
                ->innerJoin('ah.DmlTiposCuentas tc')
                ->innerJoin('ah.DmlContratosBancarios cb')
                ->innerJoin('cb.DmlEntidades en')
                ->innerJoin('cb.DmlPersonas pe')
                ->where('mo.mo_concepto LIKE ?', array('%'.$txt.'%'))
                ->andWhere('mo.mo_borrado_logico = ?', array(0))
                ->andWhere('ah.ah_numero_cuenta = ?', array($cta))
                ->andWhere('pe.id = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')));
        return $sql->orderBy('mo.id DESC, mo.mo_fecha DESC');
    }
    
    public static function getNumeroDRegistrosPorAnioYCuenta($cuenta = null, $anio = false) {
        $sql = DmlMovimientosTable::getAlias()
                ->addSelect('mo.id, mo.mo_saldo, mo.mo_fecha_crea, mo.mo_fecha_modifica')
                ->innerJoin('mo.DmlAhorros ah')
                ->innerJoin('ah.DmlTiposCuentas tc')
                ->innerJoin('ah.DmlContratosBancarios cb')
                ->innerJoin('cb.DmlEntidades en')
                ->innerJoin('cb.DmlPersonas pe');
        if ($anio) {
            $sql = $sql->where('YEAR(mo.mo_fecha) = YEAR(CURDATE())');
        }
        $sql = $sql->andWhere('ah.ah_numero_cuenta = ?', array($cuenta))
                    ->andWhere('mo.mo_borrado_logico = ?', array(0))
                    ->andWhere('pe.id = ?', array(sfContext::getInstance()->getUser()->getAttribute('id')));
        
//        echo "<textarea cols='100' rows='10'>";
//        print_r($sql->getSqlQuery());
//        echo "</textarea>";
//        die();
        
        return $sql;
    }
    
    public static function getSumaSaldoPositivoDTodo() {
        $saldos = 0;
        foreach (DmlAhorrosTable::getCuentasDeAhorros()->execute(null, 5) as $k => $v):
            $last = DmlMovimientosTable::getNumeroDRegistrosPorAnioYCuenta($v['ah_ah_numero_cuenta'], true)->execute();
            $saldos += $last->count() ? $last->getLast()->getMoSaldo() : 0;
        endforeach;

        return $saldos;
    }

}