<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000096"
 * - Ultima vez que se actualizo el modelo : "2015-11-24 17:02:45"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlEntidades', 'doctrine');

/**
 * BaseDmlEntidades
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $en_nombre_entidad
 * @property string $en_alias
 * @property string $en_direccion
 * @property string $en_contacto_json
 * @property timestamp $en_fecha_crea
 * @property integer $en_quien_crea
 * @property timestamp $en_fecha_modifica
 * @property integer $en_quien_modifica
 * @property timestamp $en_fecha_borra
 * @property integer $en_quien_borra
 * @property integer $en_borrado_logico
 * @property Doctrine_Collection $DmlContratosBancarios
 * @property Doctrine_Collection $DmlContratosLaborales
 * 
 * @method integer             getId()                    Retorna el registro (valor) actual del campo [id]
 * @method string              getEnNombreEntidad()       Retorna el registro (valor) actual del campo [en_nombre_entidad]
 * @method string              getEnAlias()               Retorna el registro (valor) actual del campo [en_alias]
 * @method string              getEnDireccion()           Retorna el registro (valor) actual del campo [en_direccion]
 * @method string              getEnContactoJson()        Retorna el registro (valor) actual del campo [en_contacto_json]
 * @method timestamp           getEnFechaCrea()           Retorna el registro (valor) actual del campo [en_fecha_crea]
 * @method integer             getEnQuienCrea()           Retorna el registro (valor) actual del campo [en_quien_crea]
 * @method timestamp           getEnFechaModifica()       Retorna el registro (valor) actual del campo [en_fecha_modifica]
 * @method integer             getEnQuienModifica()       Retorna el registro (valor) actual del campo [en_quien_modifica]
 * @method timestamp           getEnFechaBorra()          Retorna el registro (valor) actual del campo [en_fecha_borra]
 * @method integer             getEnQuienBorra()          Retorna el registro (valor) actual del campo [en_quien_borra]
 * @method integer             getEnBorradoLogico()       Retorna el registro (valor) actual del campo [en_borrado_logico]
 * @method Doctrine_Collection getDmlContratosBancarios() Retorna el registro (coleccion de datos) actual del campo [DmlContratosBancarios]
 * @method Doctrine_Collection getDmlContratosLaborales() Retorna el registro (coleccion de datos) actual del campo [DmlContratosLaborales]
 * @method DmlEntidades        setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlEntidades        setEnNombreEntidad()       Guarda un registro (valor) al campo [en_nombre_entidad]
 * @method DmlEntidades        setEnAlias()               Guarda un registro (valor) al campo [en_alias]
 * @method DmlEntidades        setEnDireccion()           Guarda un registro (valor) al campo [en_direccion]
 * @method DmlEntidades        setEnContactoJson()        Guarda un registro (valor) al campo [en_contacto_json]
 * @method DmlEntidades        setEnFechaCrea()           Guarda un registro (valor) al campo [en_fecha_crea]
 * @method DmlEntidades        setEnQuienCrea()           Guarda un registro (valor) al campo [en_quien_crea]
 * @method DmlEntidades        setEnFechaModifica()       Guarda un registro (valor) al campo [en_fecha_modifica]
 * @method DmlEntidades        setEnQuienModifica()       Guarda un registro (valor) al campo [en_quien_modifica]
 * @method DmlEntidades        setEnFechaBorra()          Guarda un registro (valor) al campo [en_fecha_borra]
 * @method DmlEntidades        setEnQuienBorra()          Guarda un registro (valor) al campo [en_quien_borra]
 * @method DmlEntidades        setEnBorradoLogico()       Guarda un registro (valor) al campo [en_borrado_logico]
 * @method DmlEntidades        setDmlContratosBancarios() Guarda un registro (coleccion de datos) al campo [DmlContratosBancarios]
 * @method DmlEntidades        setDmlContratosLaborales() Guarda un registro (coleccion de datos) al campo [DmlContratosLaborales]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlEntidades extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_entidades');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('en_nombre_entidad', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('en_alias', 'string', 50, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 50,        ));
        $this->hasColumn('en_direccion', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('en_contacto_json', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('en_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('en_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('en_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('en_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('en_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('en_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('en_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlContratosBancarios', array(
            'local'   => 'id',
            'foreign' => 'entidades'
        ));
        $this->hasMany('DmlContratosLaborales', array(
            'local'   => 'id',
            'foreign' => 'entidades'
        ));
    }

}