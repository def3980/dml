<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000083"
 * - Ultima vez que se actualizo el modelo : "2015-01-26 15:01:27"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlContratosBancarios', 'doctrine');

/**
 * BaseDmlContratosBancarios
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $personas
 * @property integer $entidades
 * @property date $cb_fecha_contrato
 * @property timestamp $cb_fecha_crea
 * @property integer $cb_quien_crea
 * @property timestamp $cb_fecha_modifica
 * @property integer $cb_quien_modifica
 * @property timestamp $cb_fecha_borra
 * @property integer $cb_quien_borra
 * @property integer $cb_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * @property DmlEntidades $DmlEntidades
 * @property Doctrine_Collection $DmlAhorros
 * @property Doctrine_Collection $DmlPrestamos
 * @property Doctrine_Collection $DmlTarjetasCreditoDebito
 * 
 * @method integer               getId()                       Retorna el registro (valor) actual del campo [id]
 * @method integer               getPersonas()                 Retorna el registro (valor) actual del campo [personas]
 * @method integer               getEntidades()                Retorna el registro (valor) actual del campo [entidades]
 * @method date                  getCbFechaContrato()          Retorna el registro (valor) actual del campo [cb_fecha_contrato]
 * @method timestamp             getCbFechaCrea()              Retorna el registro (valor) actual del campo [cb_fecha_crea]
 * @method integer               getCbQuienCrea()              Retorna el registro (valor) actual del campo [cb_quien_crea]
 * @method timestamp             getCbFechaModifica()          Retorna el registro (valor) actual del campo [cb_fecha_modifica]
 * @method integer               getCbQuienModifica()          Retorna el registro (valor) actual del campo [cb_quien_modifica]
 * @method timestamp             getCbFechaBorra()             Retorna el registro (valor) actual del campo [cb_fecha_borra]
 * @method integer               getCbQuienBorra()             Retorna el registro (valor) actual del campo [cb_quien_borra]
 * @method integer               getCbBorradoLogico()          Retorna el registro (valor) actual del campo [cb_borrado_logico]
 * @method DmlPersonas           getDmlPersonas()              Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlEntidades          getDmlEntidades()             Retorna el registro (valor) actual del campo [DmlEntidades]
 * @method Doctrine_Collection   getDmlAhorros()               Retorna el registro (coleccion de datos) actual del campo [DmlAhorros]
 * @method Doctrine_Collection   getDmlPrestamos()             Retorna el registro (coleccion de datos) actual del campo [DmlPrestamos]
 * @method Doctrine_Collection   getDmlTarjetasCreditoDebito() Retorna el registro (coleccion de datos) actual del campo [DmlTarjetasCreditoDebito]
 * @method DmlContratosBancarios setId()                       Guarda un registro (valor) al campo [id]
 * @method DmlContratosBancarios setPersonas()                 Guarda un registro (valor) al campo [personas]
 * @method DmlContratosBancarios setEntidades()                Guarda un registro (valor) al campo [entidades]
 * @method DmlContratosBancarios setCbFechaContrato()          Guarda un registro (valor) al campo [cb_fecha_contrato]
 * @method DmlContratosBancarios setCbFechaCrea()              Guarda un registro (valor) al campo [cb_fecha_crea]
 * @method DmlContratosBancarios setCbQuienCrea()              Guarda un registro (valor) al campo [cb_quien_crea]
 * @method DmlContratosBancarios setCbFechaModifica()          Guarda un registro (valor) al campo [cb_fecha_modifica]
 * @method DmlContratosBancarios setCbQuienModifica()          Guarda un registro (valor) al campo [cb_quien_modifica]
 * @method DmlContratosBancarios setCbFechaBorra()             Guarda un registro (valor) al campo [cb_fecha_borra]
 * @method DmlContratosBancarios setCbQuienBorra()             Guarda un registro (valor) al campo [cb_quien_borra]
 * @method DmlContratosBancarios setCbBorradoLogico()          Guarda un registro (valor) al campo [cb_borrado_logico]
 * @method DmlContratosBancarios setDmlPersonas()              Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlContratosBancarios setDmlEntidades()             Guarda un registro (valor) al campo [DmlEntidades]
 * @method DmlContratosBancarios setDmlAhorros()               Guarda un registro (coleccion de datos) al campo [DmlAhorros]
 * @method DmlContratosBancarios setDmlPrestamos()             Guarda un registro (coleccion de datos) al campo [DmlPrestamos]
 * @method DmlContratosBancarios setDmlTarjetasCreditoDebito() Guarda un registro (coleccion de datos) al campo [DmlTarjetasCreditoDebito]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlContratosBancarios extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_contratos_bancarios');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('entidades', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cb_fecha_contrato', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cb_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cb_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cb_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cb_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cb_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('cb_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('cb_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlEntidades', array(
            'local'   => 'entidades',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlAhorros', array(
            'local'   => 'id',
            'foreign' => 'contratos_bancarios'
        ));
        $this->hasMany('DmlPrestamos', array(
            'local'   => 'id',
            'foreign' => 'contratos_bancarios'
        ));
        $this->hasMany('DmlTarjetasCreditoDebito', array(
            'local'   => 'id',
            'foreign' => 'contratos_bancarios'
        ));
    }

}