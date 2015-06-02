<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000094"
 * - Ultima vez que se actualizo el modelo : "2015-06-02 12:54:35"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlPersonas', 'doctrine');

/**
 * BaseDmlPersonas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $pe_cedula
 * @property string $pe_nombres
 * @property string $pe_apellidos
 * @property date $pe_fecha_nacimiento
 * @property string $pe_email
 * @property string $pe_salt
 * @property string $pe_password
 * @property integer $pe_online
 * @property timestamp $pe_inicio_sesion
 * @property timestamp $pe_fin_sesion
 * @property string $pe_duracion_sesion
 * @property timestamp $pe_fecha_crea
 * @property integer $pe_quien_crea
 * @property timestamp $pe_fecha_modifica
 * @property integer $pe_quien_modifica
 * @property timestamp $pe_fecha_borra
 * @property integer $pe_quien_borra
 * @property integer $pe_borrado_logico
 * @property Doctrine_Collection $DmlBinarios
 * @property Doctrine_Collection $DmlConsumosTarjetas
 * @property Doctrine_Collection $DmlContratosBancarios
 * @property Doctrine_Collection $DmlContratosLaborales
 * @property Doctrine_Collection $DmlHijos
 * @property Doctrine_Collection $DmlIngresos
 * @property Doctrine_Collection $DmlPagos
 * 
 * @method integer             getId()                    Retorna el registro (valor) actual del campo [id]
 * @method string              getPeCedula()              Retorna el registro (valor) actual del campo [pe_cedula]
 * @method string              getPeNombres()             Retorna el registro (valor) actual del campo [pe_nombres]
 * @method string              getPeApellidos()           Retorna el registro (valor) actual del campo [pe_apellidos]
 * @method date                getPeFechaNacimiento()     Retorna el registro (valor) actual del campo [pe_fecha_nacimiento]
 * @method string              getPeEmail()               Retorna el registro (valor) actual del campo [pe_email]
 * @method string              getPeSalt()                Retorna el registro (valor) actual del campo [pe_salt]
 * @method string              getPePassword()            Retorna el registro (valor) actual del campo [pe_password]
 * @method integer             getPeOnline()              Retorna el registro (valor) actual del campo [pe_online]
 * @method timestamp           getPeInicioSesion()        Retorna el registro (valor) actual del campo [pe_inicio_sesion]
 * @method timestamp           getPeFinSesion()           Retorna el registro (valor) actual del campo [pe_fin_sesion]
 * @method string              getPeDuracionSesion()      Retorna el registro (valor) actual del campo [pe_duracion_sesion]
 * @method timestamp           getPeFechaCrea()           Retorna el registro (valor) actual del campo [pe_fecha_crea]
 * @method integer             getPeQuienCrea()           Retorna el registro (valor) actual del campo [pe_quien_crea]
 * @method timestamp           getPeFechaModifica()       Retorna el registro (valor) actual del campo [pe_fecha_modifica]
 * @method integer             getPeQuienModifica()       Retorna el registro (valor) actual del campo [pe_quien_modifica]
 * @method timestamp           getPeFechaBorra()          Retorna el registro (valor) actual del campo [pe_fecha_borra]
 * @method integer             getPeQuienBorra()          Retorna el registro (valor) actual del campo [pe_quien_borra]
 * @method integer             getPeBorradoLogico()       Retorna el registro (valor) actual del campo [pe_borrado_logico]
 * @method Doctrine_Collection getDmlBinarios()           Retorna el registro (coleccion de datos) actual del campo [DmlBinarios]
 * @method Doctrine_Collection getDmlConsumosTarjetas()   Retorna el registro (coleccion de datos) actual del campo [DmlConsumosTarjetas]
 * @method Doctrine_Collection getDmlContratosBancarios() Retorna el registro (coleccion de datos) actual del campo [DmlContratosBancarios]
 * @method Doctrine_Collection getDmlContratosLaborales() Retorna el registro (coleccion de datos) actual del campo [DmlContratosLaborales]
 * @method Doctrine_Collection getDmlHijos()              Retorna el registro (coleccion de datos) actual del campo [DmlHijos]
 * @method Doctrine_Collection getDmlIngresos()           Retorna el registro (coleccion de datos) actual del campo [DmlIngresos]
 * @method Doctrine_Collection getDmlPagos()              Retorna el registro (coleccion de datos) actual del campo [DmlPagos]
 * @method DmlPersonas         setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlPersonas         setPeCedula()              Guarda un registro (valor) al campo [pe_cedula]
 * @method DmlPersonas         setPeNombres()             Guarda un registro (valor) al campo [pe_nombres]
 * @method DmlPersonas         setPeApellidos()           Guarda un registro (valor) al campo [pe_apellidos]
 * @method DmlPersonas         setPeFechaNacimiento()     Guarda un registro (valor) al campo [pe_fecha_nacimiento]
 * @method DmlPersonas         setPeEmail()               Guarda un registro (valor) al campo [pe_email]
 * @method DmlPersonas         setPeSalt()                Guarda un registro (valor) al campo [pe_salt]
 * @method DmlPersonas         setPePassword()            Guarda un registro (valor) al campo [pe_password]
 * @method DmlPersonas         setPeOnline()              Guarda un registro (valor) al campo [pe_online]
 * @method DmlPersonas         setPeInicioSesion()        Guarda un registro (valor) al campo [pe_inicio_sesion]
 * @method DmlPersonas         setPeFinSesion()           Guarda un registro (valor) al campo [pe_fin_sesion]
 * @method DmlPersonas         setPeDuracionSesion()      Guarda un registro (valor) al campo [pe_duracion_sesion]
 * @method DmlPersonas         setPeFechaCrea()           Guarda un registro (valor) al campo [pe_fecha_crea]
 * @method DmlPersonas         setPeQuienCrea()           Guarda un registro (valor) al campo [pe_quien_crea]
 * @method DmlPersonas         setPeFechaModifica()       Guarda un registro (valor) al campo [pe_fecha_modifica]
 * @method DmlPersonas         setPeQuienModifica()       Guarda un registro (valor) al campo [pe_quien_modifica]
 * @method DmlPersonas         setPeFechaBorra()          Guarda un registro (valor) al campo [pe_fecha_borra]
 * @method DmlPersonas         setPeQuienBorra()          Guarda un registro (valor) al campo [pe_quien_borra]
 * @method DmlPersonas         setPeBorradoLogico()       Guarda un registro (valor) al campo [pe_borrado_logico]
 * @method DmlPersonas         setDmlBinarios()           Guarda un registro (coleccion de datos) al campo [DmlBinarios]
 * @method DmlPersonas         setDmlConsumosTarjetas()   Guarda un registro (coleccion de datos) al campo [DmlConsumosTarjetas]
 * @method DmlPersonas         setDmlContratosBancarios() Guarda un registro (coleccion de datos) al campo [DmlContratosBancarios]
 * @method DmlPersonas         setDmlContratosLaborales() Guarda un registro (coleccion de datos) al campo [DmlContratosLaborales]
 * @method DmlPersonas         setDmlHijos()              Guarda un registro (coleccion de datos) al campo [DmlHijos]
 * @method DmlPersonas         setDmlIngresos()           Guarda un registro (coleccion de datos) al campo [DmlIngresos]
 * @method DmlPersonas         setDmlPagos()              Guarda un registro (coleccion de datos) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlPersonas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_personas');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('pe_cedula', 'string', 10, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,        ));
        $this->hasColumn('pe_nombres', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('pe_apellidos', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('pe_fecha_nacimiento', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_email', 'string', 255, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 255,        ));
        $this->hasColumn('pe_salt', 'string', 255, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 255,        ));
        $this->hasColumn('pe_password', 'string', 255, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 255,        ));
        $this->hasColumn('pe_online', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('pe_inicio_sesion', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_fin_sesion', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_duracion_sesion', 'string', 50, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 50,        ));
        $this->hasColumn('pe_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pe_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pe_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pe_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pe_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlBinarios', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlConsumosTarjetas', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlContratosBancarios', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlContratosLaborales', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlHijos', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlIngresos', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
        $this->hasMany('DmlPagos', array(
            'local'   => 'id',
            'foreign' => 'personas'
        ));
    }

}