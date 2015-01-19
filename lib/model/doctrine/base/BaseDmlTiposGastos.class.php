<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000082"
 * - Ultima vez que se actualizo el modelo : "2015-01-19 09:46:24"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlTiposGastos', 'doctrine');

/**
 * BaseDmlTiposGastos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $tg_nombre
 * @property string $tg_alias
 * @property timestamp $tg_fecha_crea
 * @property integer $tg_quien_crea
 * @property timestamp $tg_fecha_modifica
 * @property integer $tg_quien_modifica
 * @property timestamp $tg_fecha_borra
 * @property integer $tg_quien_borra
 * @property integer $tg_borrado_logico
 * @property Doctrine_Collection $DmlPagos
 * 
 * @method integer             getId()              Retorna el registro (valor) actual del campo [id]
 * @method string              getTgNombre()        Retorna el registro (valor) actual del campo [tg_nombre]
 * @method string              getTgAlias()         Retorna el registro (valor) actual del campo [tg_alias]
 * @method timestamp           getTgFechaCrea()     Retorna el registro (valor) actual del campo [tg_fecha_crea]
 * @method integer             getTgQuienCrea()     Retorna el registro (valor) actual del campo [tg_quien_crea]
 * @method timestamp           getTgFechaModifica() Retorna el registro (valor) actual del campo [tg_fecha_modifica]
 * @method integer             getTgQuienModifica() Retorna el registro (valor) actual del campo [tg_quien_modifica]
 * @method timestamp           getTgFechaBorra()    Retorna el registro (valor) actual del campo [tg_fecha_borra]
 * @method integer             getTgQuienBorra()    Retorna el registro (valor) actual del campo [tg_quien_borra]
 * @method integer             getTgBorradoLogico() Retorna el registro (valor) actual del campo [tg_borrado_logico]
 * @method Doctrine_Collection getDmlPagos()        Retorna el registro (coleccion de datos) actual del campo [DmlPagos]
 * @method DmlTiposGastos      setId()              Guarda un registro (valor) al campo [id]
 * @method DmlTiposGastos      setTgNombre()        Guarda un registro (valor) al campo [tg_nombre]
 * @method DmlTiposGastos      setTgAlias()         Guarda un registro (valor) al campo [tg_alias]
 * @method DmlTiposGastos      setTgFechaCrea()     Guarda un registro (valor) al campo [tg_fecha_crea]
 * @method DmlTiposGastos      setTgQuienCrea()     Guarda un registro (valor) al campo [tg_quien_crea]
 * @method DmlTiposGastos      setTgFechaModifica() Guarda un registro (valor) al campo [tg_fecha_modifica]
 * @method DmlTiposGastos      setTgQuienModifica() Guarda un registro (valor) al campo [tg_quien_modifica]
 * @method DmlTiposGastos      setTgFechaBorra()    Guarda un registro (valor) al campo [tg_fecha_borra]
 * @method DmlTiposGastos      setTgQuienBorra()    Guarda un registro (valor) al campo [tg_quien_borra]
 * @method DmlTiposGastos      setTgBorradoLogico() Guarda un registro (valor) al campo [tg_borrado_logico]
 * @method DmlTiposGastos      setDmlPagos()        Guarda un registro (coleccion de datos) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlTiposGastos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_tipos_gastos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('tg_nombre', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('tg_alias', 'string', 5, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 5,        ));
        $this->hasColumn('tg_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tg_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tg_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tg_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tg_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tg_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tg_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlPagos', array(
            'local'   => 'id',
            'foreign' => 'tipos_gastos'
        ));
    }

}