<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000083"
 * - Ultima vez que se actualizo el modelo : "2015-01-26 15:01:28"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlPagos', 'doctrine');

/**
 * BaseDmlPagos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $personas
 * @property integer $tipos_gastos
 * @property integer $pa_con_sin_factura
 * @property string $pa_numero_factura
 * @property timestamp $pa_fecha
 * @property string $pa_detalle
 * @property decimal $pa_iva
 * @property decimal $pa_ice
 * @property decimal $pa_comision
 * @property decimal $pa_valor_total
 * @property string $pa_beneficiarios_json
 * @property timestamp $pa_fecha_crea
 * @property integer $pa_quien_crea
 * @property timestamp $pa_fecha_modifica
 * @property integer $pa_quien_modifica
 * @property timestamp $pa_fecha_borra
 * @property integer $pa_quien_borra
 * @property integer $pa_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * @property DmlTiposGastos $DmlTiposGastos
 * @property Doctrine_Collection $DmlBinarios
 * 
 * @method integer             getId()                    Retorna el registro (valor) actual del campo [id]
 * @method integer             getPersonas()              Retorna el registro (valor) actual del campo [personas]
 * @method integer             getTiposGastos()           Retorna el registro (valor) actual del campo [tipos_gastos]
 * @method integer             getPaConSinFactura()       Retorna el registro (valor) actual del campo [pa_con_sin_factura]
 * @method string              getPaNumeroFactura()       Retorna el registro (valor) actual del campo [pa_numero_factura]
 * @method timestamp           getPaFecha()               Retorna el registro (valor) actual del campo [pa_fecha]
 * @method string              getPaDetalle()             Retorna el registro (valor) actual del campo [pa_detalle]
 * @method decimal             getPaIva()                 Retorna el registro (valor) actual del campo [pa_iva]
 * @method decimal             getPaIce()                 Retorna el registro (valor) actual del campo [pa_ice]
 * @method decimal             getPaComision()            Retorna el registro (valor) actual del campo [pa_comision]
 * @method decimal             getPaValorTotal()          Retorna el registro (valor) actual del campo [pa_valor_total]
 * @method string              getPaBeneficiariosJson()   Retorna el registro (valor) actual del campo [pa_beneficiarios_json]
 * @method timestamp           getPaFechaCrea()           Retorna el registro (valor) actual del campo [pa_fecha_crea]
 * @method integer             getPaQuienCrea()           Retorna el registro (valor) actual del campo [pa_quien_crea]
 * @method timestamp           getPaFechaModifica()       Retorna el registro (valor) actual del campo [pa_fecha_modifica]
 * @method integer             getPaQuienModifica()       Retorna el registro (valor) actual del campo [pa_quien_modifica]
 * @method timestamp           getPaFechaBorra()          Retorna el registro (valor) actual del campo [pa_fecha_borra]
 * @method integer             getPaQuienBorra()          Retorna el registro (valor) actual del campo [pa_quien_borra]
 * @method integer             getPaBorradoLogico()       Retorna el registro (valor) actual del campo [pa_borrado_logico]
 * @method DmlPersonas         getDmlPersonas()           Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlTiposGastos      getDmlTiposGastos()        Retorna el registro (valor) actual del campo [DmlTiposGastos]
 * @method Doctrine_Collection getDmlBinarios()           Retorna el registro (coleccion de datos) actual del campo [DmlBinarios]
 * @method DmlPagos            setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlPagos            setPersonas()              Guarda un registro (valor) al campo [personas]
 * @method DmlPagos            setTiposGastos()           Guarda un registro (valor) al campo [tipos_gastos]
 * @method DmlPagos            setPaConSinFactura()       Guarda un registro (valor) al campo [pa_con_sin_factura]
 * @method DmlPagos            setPaNumeroFactura()       Guarda un registro (valor) al campo [pa_numero_factura]
 * @method DmlPagos            setPaFecha()               Guarda un registro (valor) al campo [pa_fecha]
 * @method DmlPagos            setPaDetalle()             Guarda un registro (valor) al campo [pa_detalle]
 * @method DmlPagos            setPaIva()                 Guarda un registro (valor) al campo [pa_iva]
 * @method DmlPagos            setPaIce()                 Guarda un registro (valor) al campo [pa_ice]
 * @method DmlPagos            setPaComision()            Guarda un registro (valor) al campo [pa_comision]
 * @method DmlPagos            setPaValorTotal()          Guarda un registro (valor) al campo [pa_valor_total]
 * @method DmlPagos            setPaBeneficiariosJson()   Guarda un registro (valor) al campo [pa_beneficiarios_json]
 * @method DmlPagos            setPaFechaCrea()           Guarda un registro (valor) al campo [pa_fecha_crea]
 * @method DmlPagos            setPaQuienCrea()           Guarda un registro (valor) al campo [pa_quien_crea]
 * @method DmlPagos            setPaFechaModifica()       Guarda un registro (valor) al campo [pa_fecha_modifica]
 * @method DmlPagos            setPaQuienModifica()       Guarda un registro (valor) al campo [pa_quien_modifica]
 * @method DmlPagos            setPaFechaBorra()          Guarda un registro (valor) al campo [pa_fecha_borra]
 * @method DmlPagos            setPaQuienBorra()          Guarda un registro (valor) al campo [pa_quien_borra]
 * @method DmlPagos            setPaBorradoLogico()       Guarda un registro (valor) al campo [pa_borrado_logico]
 * @method DmlPagos            setDmlPersonas()           Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlPagos            setDmlTiposGastos()        Guarda un registro (valor) al campo [DmlTiposGastos]
 * @method DmlPagos            setDmlBinarios()           Guarda un registro (coleccion de datos) al campo [DmlBinarios]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlPagos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_pagos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tipos_gastos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pa_con_sin_factura', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('pa_numero_factura', 'string', 17, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 17,        ));
        $this->hasColumn('pa_fecha', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pa_detalle', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('pa_iva', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_ice', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_comision', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_valor_total', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_beneficiarios_json', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('pa_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pa_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pa_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pa_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pa_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pa_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pa_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlTiposGastos', array(
            'local'   => 'tipos_gastos',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlBinarios', array(
            'local'   => 'id',
            'foreign' => 'pagos'
        ));
    }

}