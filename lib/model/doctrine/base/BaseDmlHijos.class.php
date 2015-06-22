<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000094"
 * - Ultima vez que se actualizo el modelo : "2015-06-02 12:54:34"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlHijos', 'doctrine');

/**
 * BaseDmlHijos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $personas
 * @property date $hi_fecha_nacimiento
 * @property string $hi_nombres
 * @property string $hi_apellidos
 * @property timestamp $hi_fecha_crea
 * @property integer $hi_quien_crea
 * @property timestamp $hi_fecha_modifica
 * @property integer $hi_quien_modifica
 * @property timestamp $hi_fecha_borra
 * @property integer $hi_quien_borra
 * @property integer $hi_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * @property Doctrine_Collection $DmlBinarios
 * @property Doctrine_Collection $DmlEnfermedades
 * 
 * @method integer             getId()                Retorna el registro (valor) actual del campo [id]
 * @method integer             getPersonas()          Retorna el registro (valor) actual del campo [personas]
 * @method date                getHiFechaNacimiento() Retorna el registro (valor) actual del campo [hi_fecha_nacimiento]
 * @method string              getHiNombres()         Retorna el registro (valor) actual del campo [hi_nombres]
 * @method string              getHiApellidos()       Retorna el registro (valor) actual del campo [hi_apellidos]
 * @method timestamp           getHiFechaCrea()       Retorna el registro (valor) actual del campo [hi_fecha_crea]
 * @method integer             getHiQuienCrea()       Retorna el registro (valor) actual del campo [hi_quien_crea]
 * @method timestamp           getHiFechaModifica()   Retorna el registro (valor) actual del campo [hi_fecha_modifica]
 * @method integer             getHiQuienModifica()   Retorna el registro (valor) actual del campo [hi_quien_modifica]
 * @method timestamp           getHiFechaBorra()      Retorna el registro (valor) actual del campo [hi_fecha_borra]
 * @method integer             getHiQuienBorra()      Retorna el registro (valor) actual del campo [hi_quien_borra]
 * @method integer             getHiBorradoLogico()   Retorna el registro (valor) actual del campo [hi_borrado_logico]
 * @method DmlPersonas         getDmlPersonas()       Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method Doctrine_Collection getDmlBinarios()       Retorna el registro (coleccion de datos) actual del campo [DmlBinarios]
 * @method Doctrine_Collection getDmlEnfermedades()   Retorna el registro (coleccion de datos) actual del campo [DmlEnfermedades]
 * @method DmlHijos            setId()                Guarda un registro (valor) al campo [id]
 * @method DmlHijos            setPersonas()          Guarda un registro (valor) al campo [personas]
 * @method DmlHijos            setHiFechaNacimiento() Guarda un registro (valor) al campo [hi_fecha_nacimiento]
 * @method DmlHijos            setHiNombres()         Guarda un registro (valor) al campo [hi_nombres]
 * @method DmlHijos            setHiApellidos()       Guarda un registro (valor) al campo [hi_apellidos]
 * @method DmlHijos            setHiFechaCrea()       Guarda un registro (valor) al campo [hi_fecha_crea]
 * @method DmlHijos            setHiQuienCrea()       Guarda un registro (valor) al campo [hi_quien_crea]
 * @method DmlHijos            setHiFechaModifica()   Guarda un registro (valor) al campo [hi_fecha_modifica]
 * @method DmlHijos            setHiQuienModifica()   Guarda un registro (valor) al campo [hi_quien_modifica]
 * @method DmlHijos            setHiFechaBorra()      Guarda un registro (valor) al campo [hi_fecha_borra]
 * @method DmlHijos            setHiQuienBorra()      Guarda un registro (valor) al campo [hi_quien_borra]
 * @method DmlHijos            setHiBorradoLogico()   Guarda un registro (valor) al campo [hi_borrado_logico]
 * @method DmlHijos            setDmlPersonas()       Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlHijos            setDmlBinarios()       Guarda un registro (coleccion de datos) al campo [DmlBinarios]
 * @method DmlHijos            setDmlEnfermedades()   Guarda un registro (coleccion de datos) al campo [DmlEnfermedades]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlHijos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_hijos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('hi_fecha_nacimiento', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('hi_nombres', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('hi_apellidos', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('hi_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('hi_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('hi_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('hi_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('hi_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('hi_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('hi_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlBinarios', array(
            'local'   => 'id',
            'foreign' => 'hijos'
        ));
        $this->hasMany('DmlEnfermedades', array(
            'local'   => 'id',
            'foreign' => 'hijos'
        ));
    }

}