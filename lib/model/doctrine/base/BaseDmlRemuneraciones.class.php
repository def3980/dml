<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000095"
 * - Ultima vez que se actualizo el modelo : "2015-07-01 17:22:40"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlRemuneraciones', 'doctrine');

/**
 * BaseDmlRemuneraciones
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $re_nombre
 * @property string $re_alias
 * @property decimal $re_valor
 * @property timestamp $re_fecha_crea
 * @property integer $re_quien_crea
 * @property timestamp $re_fecha_modifica
 * @property integer $re_quien_modifica
 * @property timestamp $re_fecha_borra
 * @property integer $re_quien_borra
 * @property integer $re_borrado_logico
 * @property Doctrine_Collection $DmlContratosLaborales
 * 
 * @method integer             getId()                    Retorna el registro (valor) actual del campo [id]
 * @method string              getReNombre()              Retorna el registro (valor) actual del campo [re_nombre]
 * @method string              getReAlias()               Retorna el registro (valor) actual del campo [re_alias]
 * @method decimal             getReValor()               Retorna el registro (valor) actual del campo [re_valor]
 * @method timestamp           getReFechaCrea()           Retorna el registro (valor) actual del campo [re_fecha_crea]
 * @method integer             getReQuienCrea()           Retorna el registro (valor) actual del campo [re_quien_crea]
 * @method timestamp           getReFechaModifica()       Retorna el registro (valor) actual del campo [re_fecha_modifica]
 * @method integer             getReQuienModifica()       Retorna el registro (valor) actual del campo [re_quien_modifica]
 * @method timestamp           getReFechaBorra()          Retorna el registro (valor) actual del campo [re_fecha_borra]
 * @method integer             getReQuienBorra()          Retorna el registro (valor) actual del campo [re_quien_borra]
 * @method integer             getReBorradoLogico()       Retorna el registro (valor) actual del campo [re_borrado_logico]
 * @method Doctrine_Collection getDmlContratosLaborales() Retorna el registro (coleccion de datos) actual del campo [DmlContratosLaborales]
 * @method DmlRemuneraciones   setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlRemuneraciones   setReNombre()              Guarda un registro (valor) al campo [re_nombre]
 * @method DmlRemuneraciones   setReAlias()               Guarda un registro (valor) al campo [re_alias]
 * @method DmlRemuneraciones   setReValor()               Guarda un registro (valor) al campo [re_valor]
 * @method DmlRemuneraciones   setReFechaCrea()           Guarda un registro (valor) al campo [re_fecha_crea]
 * @method DmlRemuneraciones   setReQuienCrea()           Guarda un registro (valor) al campo [re_quien_crea]
 * @method DmlRemuneraciones   setReFechaModifica()       Guarda un registro (valor) al campo [re_fecha_modifica]
 * @method DmlRemuneraciones   setReQuienModifica()       Guarda un registro (valor) al campo [re_quien_modifica]
 * @method DmlRemuneraciones   setReFechaBorra()          Guarda un registro (valor) al campo [re_fecha_borra]
 * @method DmlRemuneraciones   setReQuienBorra()          Guarda un registro (valor) al campo [re_quien_borra]
 * @method DmlRemuneraciones   setReBorradoLogico()       Guarda un registro (valor) al campo [re_borrado_logico]
 * @method DmlRemuneraciones   setDmlContratosLaborales() Guarda un registro (coleccion de datos) al campo [DmlContratosLaborales]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlRemuneraciones extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_remuneraciones');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('re_nombre', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('re_alias', 'string', 7, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 7,        ));
        $this->hasColumn('re_valor', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('re_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('re_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('re_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('re_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('re_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('re_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('re_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlContratosLaborales', array(
            'local'   => 'id',
            'foreign' => 'remuneraciones'
        ));
    }

}