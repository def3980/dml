<?php

/**
 * Fecha creacion : "Lunes, 1 Junio 2015 13:03:02"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000000"
 * - Ultima vez que se actualizo el modelo : "yyyy-mm-dd_hh:mm:ss"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlConsumosTarjetas', 'doctrine');

/**
 * BaseDmlConsumosTarjetas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $tarjetas_credito_debito
 * @property integer $facturas
 * @property decimal $ct_iva
 * @property decimal $ct_ice
 * @property decimal $ct_comision
 * @property decimal $ct_valor_parcial
 * @property timestamp $ct_fecha_crea
 * @property integer $ct_quien_crea
 * @property timestamp $ct_fecha_modifica
 * @property integer $ct_quien_modifica
 * @property timestamp $ct_fecha_borra
 * @property integer $ct_quien_borra
 * @property integer $ct_borrado_logico
 * @property DmlFacturas $DmlFacturas
 * @property DmlTarjetasCreditoDebito $DmlTarjetasCreditoDebito
 * @property Doctrine_Collection $DmlPagosConsumosTarjetas
 * 
 * @method integer                  getId()                       Retorna el registro (valor) actual del campo [id]
 * @method integer                  getTarjetasCreditoDebito()    Retorna el registro (valor) actual del campo [tarjetas_credito_debito]
 * @method integer                  getFacturas()                 Retorna el registro (valor) actual del campo [facturas]
 * @method decimal                  getCtIva()                    Retorna el registro (valor) actual del campo [ct_iva]
 * @method decimal                  getCtIce()                    Retorna el registro (valor) actual del campo [ct_ice]
 * @method decimal                  getCtComision()               Retorna el registro (valor) actual del campo [ct_comision]
 * @method decimal                  getCtValorParcial()           Retorna el registro (valor) actual del campo [ct_valor_parcial]
 * @method timestamp                getCtFechaCrea()              Retorna el registro (valor) actual del campo [ct_fecha_crea]
 * @method integer                  getCtQuienCrea()              Retorna el registro (valor) actual del campo [ct_quien_crea]
 * @method timestamp                getCtFechaModifica()          Retorna el registro (valor) actual del campo [ct_fecha_modifica]
 * @method integer                  getCtQuienModifica()          Retorna el registro (valor) actual del campo [ct_quien_modifica]
 * @method timestamp                getCtFechaBorra()             Retorna el registro (valor) actual del campo [ct_fecha_borra]
 * @method integer                  getCtQuienBorra()             Retorna el registro (valor) actual del campo [ct_quien_borra]
 * @method integer                  getCtBorradoLogico()          Retorna el registro (valor) actual del campo [ct_borrado_logico]
 * @method DmlFacturas              getDmlFacturas()              Retorna el registro (valor) actual del campo [DmlFacturas]
 * @method DmlTarjetasCreditoDebito getDmlTarjetasCreditoDebito() Retorna el registro (valor) actual del campo [DmlTarjetasCreditoDebito]
 * @method Doctrine_Collection      getDmlPagosConsumosTarjetas() Retorna el registro (coleccion de datos) actual del campo [DmlPagosConsumosTarjetas]
 * @method DmlConsumosTarjetas      setId()                       Guarda un registro (valor) al campo [id]
 * @method DmlConsumosTarjetas      setTarjetasCreditoDebito()    Guarda un registro (valor) al campo [tarjetas_credito_debito]
 * @method DmlConsumosTarjetas      setFacturas()                 Guarda un registro (valor) al campo [facturas]
 * @method DmlConsumosTarjetas      setCtIva()                    Guarda un registro (valor) al campo [ct_iva]
 * @method DmlConsumosTarjetas      setCtIce()                    Guarda un registro (valor) al campo [ct_ice]
 * @method DmlConsumosTarjetas      setCtComision()               Guarda un registro (valor) al campo [ct_comision]
 * @method DmlConsumosTarjetas      setCtValorParcial()           Guarda un registro (valor) al campo [ct_valor_parcial]
 * @method DmlConsumosTarjetas      setCtFechaCrea()              Guarda un registro (valor) al campo [ct_fecha_crea]
 * @method DmlConsumosTarjetas      setCtQuienCrea()              Guarda un registro (valor) al campo [ct_quien_crea]
 * @method DmlConsumosTarjetas      setCtFechaModifica()          Guarda un registro (valor) al campo [ct_fecha_modifica]
 * @method DmlConsumosTarjetas      setCtQuienModifica()          Guarda un registro (valor) al campo [ct_quien_modifica]
 * @method DmlConsumosTarjetas      setCtFechaBorra()             Guarda un registro (valor) al campo [ct_fecha_borra]
 * @method DmlConsumosTarjetas      setCtQuienBorra()             Guarda un registro (valor) al campo [ct_quien_borra]
 * @method DmlConsumosTarjetas      setCtBorradoLogico()          Guarda un registro (valor) al campo [ct_borrado_logico]
 * @method DmlConsumosTarjetas      setDmlFacturas()              Guarda un registro (valor) al campo [DmlFacturas]
 * @method DmlConsumosTarjetas      setDmlTarjetasCreditoDebito() Guarda un registro (valor) al campo [DmlTarjetasCreditoDebito]
 * @method DmlConsumosTarjetas      setDmlPagosConsumosTarjetas() Guarda un registro (coleccion de datos) al campo [DmlPagosConsumosTarjetas]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlConsumosTarjetas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_consumos_tarjetas');
        $this->hasColumn('id', 'integer', 4, array(
        $this->hasColumn('tarjetas_credito_debito', 'integer', 4, array(
        $this->hasColumn('facturas', 'integer', 4, array(
        $this->hasColumn('ct_iva', 'decimal', 10, array(
        $this->hasColumn('ct_ice', 'decimal', 10, array(
        $this->hasColumn('ct_comision', 'decimal', 10, array(
        $this->hasColumn('ct_valor_parcial', 'decimal', 10, array(
        $this->hasColumn('ct_fecha_crea', 'timestamp', 25, array(
        $this->hasColumn('ct_quien_crea', 'integer', 4, array(
        $this->hasColumn('ct_fecha_modifica', 'timestamp', 25, array(
        $this->hasColumn('ct_quien_modifica', 'integer', 4, array(
        $this->hasColumn('ct_fecha_borra', 'timestamp', 25, array(
        $this->hasColumn('ct_quien_borra', 'integer', 4, array(
        $this->hasColumn('ct_borrado_logico', 'integer', 1, array(
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlFacturas', array(
            'local'   => 'facturas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlTarjetasCreditoDebito', array(
            'local'   => 'tarjetas_credito_debito',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlPagosConsumosTarjetas', array(
            'local'   => 'id',
            'foreign' => 'consumos_tarjetas'
        ));
    }

}