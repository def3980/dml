<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000090"
 * - Ultima vez que se actualizo el modelo : "2015-03-25 10:36:31"
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
 * @property integer $facturas
 * @property decimal $pa_iva
 * @property decimal $pa_ice
 * @property decimal $pa_comision
 * @property decimal $pa_valor_parcial
 * @property timestamp $pa_fecha_crea
 * @property integer $pa_quien_crea
 * @property timestamp $pa_fecha_modifica
 * @property integer $pa_quien_modifica
 * @property timestamp $pa_fecha_borra
 * @property integer $pa_quien_borra
 * @property integer $pa_borrado_logico
 * @property DmlFacturas $DmlFacturas
 * @property DmlPersonas $DmlPersonas
 * @property Doctrine_Collection $DmlRespaldos
 * 
 * @method integer             getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer             getPersonas()        Retorna el registro (valor) actual del campo [personas]
 * @method integer             getFacturas()        Retorna el registro (valor) actual del campo [facturas]
 * @method decimal             getPaIva()           Retorna el registro (valor) actual del campo [pa_iva]
 * @method decimal             getPaIce()           Retorna el registro (valor) actual del campo [pa_ice]
 * @method decimal             getPaComision()      Retorna el registro (valor) actual del campo [pa_comision]
 * @method decimal             getPaValorParcial()  Retorna el registro (valor) actual del campo [pa_valor_parcial]
 * @method timestamp           getPaFechaCrea()     Retorna el registro (valor) actual del campo [pa_fecha_crea]
 * @method integer             getPaQuienCrea()     Retorna el registro (valor) actual del campo [pa_quien_crea]
 * @method timestamp           getPaFechaModifica() Retorna el registro (valor) actual del campo [pa_fecha_modifica]
 * @method integer             getPaQuienModifica() Retorna el registro (valor) actual del campo [pa_quien_modifica]
 * @method timestamp           getPaFechaBorra()    Retorna el registro (valor) actual del campo [pa_fecha_borra]
 * @method integer             getPaQuienBorra()    Retorna el registro (valor) actual del campo [pa_quien_borra]
 * @method integer             getPaBorradoLogico() Retorna el registro (valor) actual del campo [pa_borrado_logico]
 * @method DmlFacturas         getDmlFacturas()     Retorna el registro (valor) actual del campo [DmlFacturas]
 * @method DmlPersonas         getDmlPersonas()     Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method Doctrine_Collection getDmlRespaldos()    Retorna el registro (coleccion de datos) actual del campo [DmlRespaldos]
 * @method DmlPagos            setId()              Guarda un registro (valor) al campo [id]
 * @method DmlPagos            setPersonas()        Guarda un registro (valor) al campo [personas]
 * @method DmlPagos            setFacturas()        Guarda un registro (valor) al campo [facturas]
 * @method DmlPagos            setPaIva()           Guarda un registro (valor) al campo [pa_iva]
 * @method DmlPagos            setPaIce()           Guarda un registro (valor) al campo [pa_ice]
 * @method DmlPagos            setPaComision()      Guarda un registro (valor) al campo [pa_comision]
 * @method DmlPagos            setPaValorParcial()  Guarda un registro (valor) al campo [pa_valor_parcial]
 * @method DmlPagos            setPaFechaCrea()     Guarda un registro (valor) al campo [pa_fecha_crea]
 * @method DmlPagos            setPaQuienCrea()     Guarda un registro (valor) al campo [pa_quien_crea]
 * @method DmlPagos            setPaFechaModifica() Guarda un registro (valor) al campo [pa_fecha_modifica]
 * @method DmlPagos            setPaQuienModifica() Guarda un registro (valor) al campo [pa_quien_modifica]
 * @method DmlPagos            setPaFechaBorra()    Guarda un registro (valor) al campo [pa_fecha_borra]
 * @method DmlPagos            setPaQuienBorra()    Guarda un registro (valor) al campo [pa_quien_borra]
 * @method DmlPagos            setPaBorradoLogico() Guarda un registro (valor) al campo [pa_borrado_logico]
 * @method DmlPagos            setDmlFacturas()     Guarda un registro (valor) al campo [DmlFacturas]
 * @method DmlPagos            setDmlPersonas()     Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlPagos            setDmlRespaldos()    Guarda un registro (coleccion de datos) al campo [DmlRespaldos]
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
        $this->hasColumn('facturas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pa_iva', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_ice', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_comision', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('pa_valor_parcial', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
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
        $this->hasOne('DmlFacturas', array(
            'local'   => 'facturas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlRespaldos', array(
            'local'   => 'id',
            'foreign' => 'pagos'
        ));
    }

}