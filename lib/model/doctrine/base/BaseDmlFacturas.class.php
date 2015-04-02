<?php

/**
 * Fecha creacion : "Miercoles, 11 Marzo 2015 10:16:20"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000003"
 * - Ultima vez que se actualizo el modelo : "2015-03-25 10:36:31"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlFacturas', 'doctrine');

/**
 * BaseDmlFacturas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $tipos_gastos
 * @property integer $fa_con_sin_factura
 * @property string $fa_numero_factura
 * @property timestamp $fa_fecha
 * @property string $fa_detalle
 * @property string $fa_beneficiarios_json
 * @property decimal $fa_valor_total
 * @property timestamp $fa_fecha_crea
 * @property integer $fa_quien_crea
 * @property timestamp $fa_fecha_modifica
 * @property integer $fa_quien_modifica
 * @property timestamp $fa_fecha_borra
 * @property integer $fa_quien_borra
 * @property integer $fa_borrado_logico
 * @property DmlTiposGastos $DmlTiposGastos
 * @property Doctrine_Collection $DmlBinarios
 * @property Doctrine_Collection $DmlPagos
 * 
 * @method integer             getId()                    Retorna el registro (valor) actual del campo [id]
 * @method integer             getTiposGastos()           Retorna el registro (valor) actual del campo [tipos_gastos]
 * @method integer             getFaConSinFactura()       Retorna el registro (valor) actual del campo [fa_con_sin_factura]
 * @method string              getFaNumeroFactura()       Retorna el registro (valor) actual del campo [fa_numero_factura]
 * @method timestamp           getFaFecha()               Retorna el registro (valor) actual del campo [fa_fecha]
 * @method string              getFaDetalle()             Retorna el registro (valor) actual del campo [fa_detalle]
 * @method string              getFaBeneficiariosJson()   Retorna el registro (valor) actual del campo [fa_beneficiarios_json]
 * @method decimal             getFaValorTotal()          Retorna el registro (valor) actual del campo [fa_valor_total]
 * @method timestamp           getFaFechaCrea()           Retorna el registro (valor) actual del campo [fa_fecha_crea]
 * @method integer             getFaQuienCrea()           Retorna el registro (valor) actual del campo [fa_quien_crea]
 * @method timestamp           getFaFechaModifica()       Retorna el registro (valor) actual del campo [fa_fecha_modifica]
 * @method integer             getFaQuienModifica()       Retorna el registro (valor) actual del campo [fa_quien_modifica]
 * @method timestamp           getFaFechaBorra()          Retorna el registro (valor) actual del campo [fa_fecha_borra]
 * @method integer             getFaQuienBorra()          Retorna el registro (valor) actual del campo [fa_quien_borra]
 * @method integer             getFaBorradoLogico()       Retorna el registro (valor) actual del campo [fa_borrado_logico]
 * @method DmlTiposGastos      getDmlTiposGastos()        Retorna el registro (valor) actual del campo [DmlTiposGastos]
 * @method Doctrine_Collection getDmlBinarios()           Retorna el registro (coleccion de datos) actual del campo [DmlBinarios]
 * @method Doctrine_Collection getDmlPagos()              Retorna el registro (coleccion de datos) actual del campo [DmlPagos]
 * @method DmlFacturas         setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlFacturas         setTiposGastos()           Guarda un registro (valor) al campo [tipos_gastos]
 * @method DmlFacturas         setFaConSinFactura()       Guarda un registro (valor) al campo [fa_con_sin_factura]
 * @method DmlFacturas         setFaNumeroFactura()       Guarda un registro (valor) al campo [fa_numero_factura]
 * @method DmlFacturas         setFaFecha()               Guarda un registro (valor) al campo [fa_fecha]
 * @method DmlFacturas         setFaDetalle()             Guarda un registro (valor) al campo [fa_detalle]
 * @method DmlFacturas         setFaBeneficiariosJson()   Guarda un registro (valor) al campo [fa_beneficiarios_json]
 * @method DmlFacturas         setFaValorTotal()          Guarda un registro (valor) al campo [fa_valor_total]
 * @method DmlFacturas         setFaFechaCrea()           Guarda un registro (valor) al campo [fa_fecha_crea]
 * @method DmlFacturas         setFaQuienCrea()           Guarda un registro (valor) al campo [fa_quien_crea]
 * @method DmlFacturas         setFaFechaModifica()       Guarda un registro (valor) al campo [fa_fecha_modifica]
 * @method DmlFacturas         setFaQuienModifica()       Guarda un registro (valor) al campo [fa_quien_modifica]
 * @method DmlFacturas         setFaFechaBorra()          Guarda un registro (valor) al campo [fa_fecha_borra]
 * @method DmlFacturas         setFaQuienBorra()          Guarda un registro (valor) al campo [fa_quien_borra]
 * @method DmlFacturas         setFaBorradoLogico()       Guarda un registro (valor) al campo [fa_borrado_logico]
 * @method DmlFacturas         setDmlTiposGastos()        Guarda un registro (valor) al campo [DmlTiposGastos]
 * @method DmlFacturas         setDmlBinarios()           Guarda un registro (coleccion de datos) al campo [DmlBinarios]
 * @method DmlFacturas         setDmlPagos()              Guarda un registro (coleccion de datos) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlFacturas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_facturas');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('tipos_gastos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('fa_con_sin_factura', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('fa_numero_factura', 'string', 17, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 17,        ));
        $this->hasColumn('fa_fecha', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('fa_detalle', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('fa_beneficiarios_json', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('fa_valor_total', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('fa_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('fa_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('fa_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('fa_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('fa_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('fa_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('fa_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlTiposGastos', array(
            'local'   => 'tipos_gastos',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlBinarios', array(
            'local'   => 'id',
            'foreign' => 'facturas'
        ));
        $this->hasMany('DmlPagos', array(
            'local'   => 'id',
            'foreign' => 'facturas'
        ));
    }

}