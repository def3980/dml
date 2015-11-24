<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000096"
 * - Ultima vez que se actualizo el modelo : "2015-11-24 17:02:45"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlIngresos', 'doctrine');

/**
 * BaseDmlIngresos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $personas
 * @property date $in_fecha
 * @property string $in_razon
 * @property decimal $in_valor
 * @property timestamp $in_fecha_crea
 * @property integer $in_quien_crea
 * @property timestamp $in_fecha_modifica
 * @property integer $in_quien_modifica
 * @property timestamp $in_fecha_borra
 * @property integer $in_quien_borra
 * @property integer $in_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * 
 * @method integer     getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer     getPersonas()        Retorna el registro (valor) actual del campo [personas]
 * @method date        getInFecha()         Retorna el registro (valor) actual del campo [in_fecha]
 * @method string      getInRazon()         Retorna el registro (valor) actual del campo [in_razon]
 * @method decimal     getInValor()         Retorna el registro (valor) actual del campo [in_valor]
 * @method timestamp   getInFechaCrea()     Retorna el registro (valor) actual del campo [in_fecha_crea]
 * @method integer     getInQuienCrea()     Retorna el registro (valor) actual del campo [in_quien_crea]
 * @method timestamp   getInFechaModifica() Retorna el registro (valor) actual del campo [in_fecha_modifica]
 * @method integer     getInQuienModifica() Retorna el registro (valor) actual del campo [in_quien_modifica]
 * @method timestamp   getInFechaBorra()    Retorna el registro (valor) actual del campo [in_fecha_borra]
 * @method integer     getInQuienBorra()    Retorna el registro (valor) actual del campo [in_quien_borra]
 * @method integer     getInBorradoLogico() Retorna el registro (valor) actual del campo [in_borrado_logico]
 * @method DmlPersonas getDmlPersonas()     Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlIngresos setId()              Guarda un registro (valor) al campo [id]
 * @method DmlIngresos setPersonas()        Guarda un registro (valor) al campo [personas]
 * @method DmlIngresos setInFecha()         Guarda un registro (valor) al campo [in_fecha]
 * @method DmlIngresos setInRazon()         Guarda un registro (valor) al campo [in_razon]
 * @method DmlIngresos setInValor()         Guarda un registro (valor) al campo [in_valor]
 * @method DmlIngresos setInFechaCrea()     Guarda un registro (valor) al campo [in_fecha_crea]
 * @method DmlIngresos setInQuienCrea()     Guarda un registro (valor) al campo [in_quien_crea]
 * @method DmlIngresos setInFechaModifica() Guarda un registro (valor) al campo [in_fecha_modifica]
 * @method DmlIngresos setInQuienModifica() Guarda un registro (valor) al campo [in_quien_modifica]
 * @method DmlIngresos setInFechaBorra()    Guarda un registro (valor) al campo [in_fecha_borra]
 * @method DmlIngresos setInQuienBorra()    Guarda un registro (valor) al campo [in_quien_borra]
 * @method DmlIngresos setInBorradoLogico() Guarda un registro (valor) al campo [in_borrado_logico]
 * @method DmlIngresos setDmlPersonas()     Guarda un registro (valor) al campo [DmlPersonas]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlIngresos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_ingresos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('in_fecha', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('in_razon', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('in_valor', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('in_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('in_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('in_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('in_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('in_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('in_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('in_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
    }

}