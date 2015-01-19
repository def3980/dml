<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000082"
 * - Ultima vez que se actualizo el modelo : "2015-01-19 09:46:24"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlConsumoTarjetas', 'doctrine');

/**
 * BaseDmlConsumoTarjetas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $tarjetas_credito_debito
 * @property timestamp $ct_fecha
 * @property string $ct_detalle
 * @property decimal $ct_valor
 * @property timestamp $ct_fecha_crea
 * @property integer $ct_quien_crea
 * @property timestamp $ct_fecha_modifica
 * @property integer $ct_quien_modifica
 * @property timestamp $ct_fecha_borra
 * @property integer $ct_quien_borra
 * @property integer $ct_borrado_logico
 * @property DmlTarjetasCreditoDebito $DmlTarjetasCreditoDebito
 * 
 * @method integer                  getId()                       Retorna el registro (valor) actual del campo [id]
 * @method integer                  getTarjetasCreditoDebito()    Retorna el registro (valor) actual del campo [tarjetas_credito_debito]
 * @method timestamp                getCtFecha()                  Retorna el registro (valor) actual del campo [ct_fecha]
 * @method string                   getCtDetalle()                Retorna el registro (valor) actual del campo [ct_detalle]
 * @method decimal                  getCtValor()                  Retorna el registro (valor) actual del campo [ct_valor]
 * @method timestamp                getCtFechaCrea()              Retorna el registro (valor) actual del campo [ct_fecha_crea]
 * @method integer                  getCtQuienCrea()              Retorna el registro (valor) actual del campo [ct_quien_crea]
 * @method timestamp                getCtFechaModifica()          Retorna el registro (valor) actual del campo [ct_fecha_modifica]
 * @method integer                  getCtQuienModifica()          Retorna el registro (valor) actual del campo [ct_quien_modifica]
 * @method timestamp                getCtFechaBorra()             Retorna el registro (valor) actual del campo [ct_fecha_borra]
 * @method integer                  getCtQuienBorra()             Retorna el registro (valor) actual del campo [ct_quien_borra]
 * @method integer                  getCtBorradoLogico()          Retorna el registro (valor) actual del campo [ct_borrado_logico]
 * @method DmlTarjetasCreditoDebito getDmlTarjetasCreditoDebito() Retorna el registro (valor) actual del campo [DmlTarjetasCreditoDebito]
 * @method DmlConsumoTarjetas       setId()                       Guarda un registro (valor) al campo [id]
 * @method DmlConsumoTarjetas       setTarjetasCreditoDebito()    Guarda un registro (valor) al campo [tarjetas_credito_debito]
 * @method DmlConsumoTarjetas       setCtFecha()                  Guarda un registro (valor) al campo [ct_fecha]
 * @method DmlConsumoTarjetas       setCtDetalle()                Guarda un registro (valor) al campo [ct_detalle]
 * @method DmlConsumoTarjetas       setCtValor()                  Guarda un registro (valor) al campo [ct_valor]
 * @method DmlConsumoTarjetas       setCtFechaCrea()              Guarda un registro (valor) al campo [ct_fecha_crea]
 * @method DmlConsumoTarjetas       setCtQuienCrea()              Guarda un registro (valor) al campo [ct_quien_crea]
 * @method DmlConsumoTarjetas       setCtFechaModifica()          Guarda un registro (valor) al campo [ct_fecha_modifica]
 * @method DmlConsumoTarjetas       setCtQuienModifica()          Guarda un registro (valor) al campo [ct_quien_modifica]
 * @method DmlConsumoTarjetas       setCtFechaBorra()             Guarda un registro (valor) al campo [ct_fecha_borra]
 * @method DmlConsumoTarjetas       setCtQuienBorra()             Guarda un registro (valor) al campo [ct_quien_borra]
 * @method DmlConsumoTarjetas       setCtBorradoLogico()          Guarda un registro (valor) al campo [ct_borrado_logico]
 * @method DmlConsumoTarjetas       setDmlTarjetasCreditoDebito() Guarda un registro (valor) al campo [DmlTarjetasCreditoDebito]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlConsumoTarjetas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_consumo_tarjetas');
        $this->hasColumn('id', 'integer', 4, array(
        $this->hasColumn('tarjetas_credito_debito', 'integer', 4, array(
        $this->hasColumn('ct_fecha', 'timestamp', 25, array(
        $this->hasColumn('ct_detalle', 'string', null, array(
        $this->hasColumn('ct_valor', 'decimal', 10, array(
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
        $this->hasOne('DmlTarjetasCreditoDebito', array(
            'local'   => 'tarjetas_credito_debito',
            'foreign' => 'id'
        ));
    }

}