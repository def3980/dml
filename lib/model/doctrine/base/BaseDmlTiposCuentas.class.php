<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000082"
 * - Ultima vez que se actualizo el modelo : "2015-01-19 09:46:24"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlTiposCuentas', 'doctrine');

/**
 * BaseDmlTiposCuentas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $tc_nombre
 * @property timestamp $tc_fecha_crea
 * @property integer $tc_quien_crea
 * @property timestamp $tc_fecha_modifica
 * @property integer $tc_quien_modifica
 * @property timestamp $tc_fecha_borra
 * @property integer $tc_quien_borra
 * @property integer $tc_borrado_logico
 * @property Doctrine_Collection $DmlAhorros
 * 
 * @method integer             getId()              Retorna el registro (valor) actual del campo [id]
 * @method string              getTcNombre()        Retorna el registro (valor) actual del campo [tc_nombre]
 * @method timestamp           getTcFechaCrea()     Retorna el registro (valor) actual del campo [tc_fecha_crea]
 * @method integer             getTcQuienCrea()     Retorna el registro (valor) actual del campo [tc_quien_crea]
 * @method timestamp           getTcFechaModifica() Retorna el registro (valor) actual del campo [tc_fecha_modifica]
 * @method integer             getTcQuienModifica() Retorna el registro (valor) actual del campo [tc_quien_modifica]
 * @method timestamp           getTcFechaBorra()    Retorna el registro (valor) actual del campo [tc_fecha_borra]
 * @method integer             getTcQuienBorra()    Retorna el registro (valor) actual del campo [tc_quien_borra]
 * @method integer             getTcBorradoLogico() Retorna el registro (valor) actual del campo [tc_borrado_logico]
 * @method Doctrine_Collection getDmlAhorros()      Retorna el registro (coleccion de datos) actual del campo [DmlAhorros]
 * @method DmlTiposCuentas     setId()              Guarda un registro (valor) al campo [id]
 * @method DmlTiposCuentas     setTcNombre()        Guarda un registro (valor) al campo [tc_nombre]
 * @method DmlTiposCuentas     setTcFechaCrea()     Guarda un registro (valor) al campo [tc_fecha_crea]
 * @method DmlTiposCuentas     setTcQuienCrea()     Guarda un registro (valor) al campo [tc_quien_crea]
 * @method DmlTiposCuentas     setTcFechaModifica() Guarda un registro (valor) al campo [tc_fecha_modifica]
 * @method DmlTiposCuentas     setTcQuienModifica() Guarda un registro (valor) al campo [tc_quien_modifica]
 * @method DmlTiposCuentas     setTcFechaBorra()    Guarda un registro (valor) al campo [tc_fecha_borra]
 * @method DmlTiposCuentas     setTcQuienBorra()    Guarda un registro (valor) al campo [tc_quien_borra]
 * @method DmlTiposCuentas     setTcBorradoLogico() Guarda un registro (valor) al campo [tc_borrado_logico]
 * @method DmlTiposCuentas     setDmlAhorros()      Guarda un registro (coleccion de datos) al campo [DmlAhorros]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlTiposCuentas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_tipos_cuentas');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('tc_nombre', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('tc_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tc_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tc_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tc_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tc_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tc_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tc_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlAhorros', array(
            'local'   => 'id',
            'foreign' => 'tipos_cuentas'
        ));
    }

}