<?php

/**
 * Fecha creacion : "Lunes, 1 Junio 2015 13:03:02"
 */

/**
 * DmlPagosConsumosTarjetasTable
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 */
class DmlPagosConsumosTarjetasTable extends Doctrine_Table {

    /**
     * Retorna una instancia de esta clase.
     *
     * @return objeto DmlPagosConsumosTarjetasTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('DmlPagosConsumosTarjetas');
    }
    
    /**
     * getAlias devuelve una instancia de la clase del modelo DmlPagosConsumosTarjetas y
     * contiene un alias por defecto.
     * 
     * @return type instancia con un alias definido
     */
    private static function getAlias() {
        return DmlPagosConsumosTarjetasTable::getInstance()->createQuery('pct');
    }
    
    /**
     * getEstadoConsumoPagoOImpago, verifica si el id del consumo se encuentra 
     * en la tabla y si es asi se sobre entiende que se encuentra pagado ese consumo
     * caso contrario si devuelve nulo no esta pagados ese consumo
     * 
     * @param type $idCt
     * @return type int Numero entero que cuenta el resultado
     */
    public static function getEstadoConsumoPagoOImpago($idCt) {
        return DmlPagosConsumosTarjetasTable::getAlias()
                ->addSelect('pct.id')
                ->where('pct.consumos_tarjetas = ?', array($idCt))
                ->execute()
                ->count();
    }

}