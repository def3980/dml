<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000084"
 * - Ultima vez que se actualizo el modelo : "2015-02-02 17:14:57"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlContratosLaborales', 'doctrine');

/**
 * BaseDmlContratosLaborales
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $dml_personas
 * @property integer $dml_entidades
 * @property integer $dml_remuneraciones
 * @property date $cl_fecha_ingreso
 * @property date $cl_fecha_salida
 * @property string $cl_motivo_salida
 * @property string $cl_actividad_desarrollada
 * @property integer $cl_activo
 * @property timestamp $cl_fecha_crea
 * @property integer $cl_quien_crea
 * @property timestamp $cl_fecha_modifica
 * @property integer $cl_quien_modifica
 * @property timestamp $cl_fecha_borra
 * @property integer $cl_quien_borra
 * @property integer $cl_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * @property DmlEntidades $DmlEntidades
 * @property DmlRemuneraciones $DmlRemuneraciones
 * 
 * @method integer               getId()                        Retorna el registro (valor) actual del campo [id]
 * @method integer               getDmlPersonas()               Retorna el registro (valor) actual del campo [dml_personas]
 * @method integer               getDmlEntidades()              Retorna el registro (valor) actual del campo [dml_entidades]
 * @method integer               getDmlRemuneraciones()         Retorna el registro (valor) actual del campo [dml_remuneraciones]
 * @method date                  getClFechaIngreso()            Retorna el registro (valor) actual del campo [cl_fecha_ingreso]
 * @method date                  getClFechaSalida()             Retorna el registro (valor) actual del campo [cl_fecha_salida]
 * @method string                getClMotivoSalida()            Retorna el registro (valor) actual del campo [cl_motivo_salida]
 * @method string                getClActividadDesarrollada()   Retorna el registro (valor) actual del campo [cl_actividad_desarrollada]
 * @method integer               getClActivo()                  Retorna el registro (valor) actual del campo [cl_activo]
 * @method timestamp             getClFechaCrea()               Retorna el registro (valor) actual del campo [cl_fecha_crea]
 * @method integer               getClQuienCrea()               Retorna el registro (valor) actual del campo [cl_quien_crea]
 * @method timestamp             getClFechaModifica()           Retorna el registro (valor) actual del campo [cl_fecha_modifica]
 * @method integer               getClQuienModifica()           Retorna el registro (valor) actual del campo [cl_quien_modifica]
 * @method timestamp             getClFechaBorra()              Retorna el registro (valor) actual del campo [cl_fecha_borra]
 * @method integer               getClQuienBorra()              Retorna el registro (valor) actual del campo [cl_quien_borra]
 * @method integer               getClBorradoLogico()           Retorna el registro (valor) actual del campo [cl_borrado_logico]
 * @method DmlPersonas           getDmlPersonas()               Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlEntidades          getDmlEntidades()              Retorna el registro (valor) actual del campo [DmlEntidades]
 * @method DmlRemuneraciones     getDmlRemuneraciones()         Retorna el registro (valor) actual del campo [DmlRemuneraciones]
 * @method DmlContratosLaborales setId()                        Guarda un registro (valor) al campo [id]
 * @method DmlContratosLaborales setDmlPersonas()               Guarda un registro (valor) al campo [dml_personas]
 * @method DmlContratosLaborales setDmlEntidades()              Guarda un registro (valor) al campo [dml_entidades]
 * @method DmlContratosLaborales setDmlRemuneraciones()         Guarda un registro (valor) al campo [dml_remuneraciones]
 * @method DmlContratosLaborales setClFechaIngreso()            Guarda un registro (valor) al campo [cl_fecha_ingreso]
 * @method DmlContratosLaborales setClFechaSalida()             Guarda un registro (valor) al campo [cl_fecha_salida]
 * @method DmlContratosLaborales setClMotivoSalida()            Guarda un registro (valor) al campo [cl_motivo_salida]
 * @method DmlContratosLaborales setClActividadDesarrollada()   Guarda un registro (valor) al campo [cl_actividad_desarrollada]
 * @method DmlContratosLaborales setClActivo()                  Guarda un registro (valor) al campo [cl_activo]
 * @method DmlContratosLaborales setClFechaCrea()               Guarda un registro (valor) al campo [cl_fecha_crea]
 * @method DmlContratosLaborales setClQuienCrea()               Guarda un registro (valor) al campo [cl_quien_crea]
 * @method DmlContratosLaborales setClFechaModifica()           Guarda un registro (valor) al campo [cl_fecha_modifica]
 * @method DmlContratosLaborales setClQuienModifica()           Guarda un registro (valor) al campo [cl_quien_modifica]
 * @method DmlContratosLaborales setClFechaBorra()              Guarda un registro (valor) al campo [cl_fecha_borra]
 * @method DmlContratosLaborales setClQuienBorra()              Guarda un registro (valor) al campo [cl_quien_borra]
 * @method DmlContratosLaborales setClBorradoLogico()           Guarda un registro (valor) al campo [cl_borrado_logico]
 * @method DmlContratosLaborales setDmlPersonas()               Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlContratosLaborales setDmlEntidades()              Guarda un registro (valor) al campo [DmlEntidades]
 * @method DmlContratosLaborales setDmlRemuneraciones()         Guarda un registro (valor) al campo [DmlRemuneraciones]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlContratosLaborales extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_contratos_laborales');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('dml_personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dml_entidades', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dml_remuneraciones', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cl_fecha_ingreso', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cl_fecha_salida', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cl_motivo_salida', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('cl_actividad_desarrollada', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('cl_activo', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('cl_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cl_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cl_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cl_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cl_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cl_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cl_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'dml_personas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlEntidades', array(
            'local'   => 'dml_entidades',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlRemuneraciones', array(
            'local'   => 'dml_remuneraciones',
            'foreign' => 'id'
        ));
    }

}