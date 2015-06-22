<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000094"
 * - Ultima vez que se actualizo el modelo : "2015-06-02 12:54:34"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlAhorros', 'doctrine');

/**
 * BaseDmlAhorros
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $contratos_bancarios
 * @property integer $tipos_cuentas
 * @property date $ah_fecha_creacion
 * @property string $ah_numero_cuenta
 * @property date $ah_fecha_cancelacion
 * @property integer $ah_estado
 * @property timestamp $ah_fecha_crea
 * @property integer $ah_quien_crea
 * @property timestamp $ah_fecha_modifica
 * @property integer $ah_quien_modifica
 * @property timestamp $ah_fecha_borra
 * @property integer $ah_quien_borra
 * @property integer $ah_borrado_logico
 * @property DmlContratosBancarios $DmlContratosBancarios
 * @property DmlTiposCuentas $DmlTiposCuentas
 * @property Doctrine_Collection $DmlMovimientos
 * 
 * @method integer               getId()                    Retorna el registro (valor) actual del campo [id]
 * @method integer               getContratosBancarios()    Retorna el registro (valor) actual del campo [contratos_bancarios]
 * @method integer               getTiposCuentas()          Retorna el registro (valor) actual del campo [tipos_cuentas]
 * @method date                  getAhFechaCreacion()       Retorna el registro (valor) actual del campo [ah_fecha_creacion]
 * @method string                getAhNumeroCuenta()        Retorna el registro (valor) actual del campo [ah_numero_cuenta]
 * @method date                  getAhFechaCancelacion()    Retorna el registro (valor) actual del campo [ah_fecha_cancelacion]
 * @method integer               getAhEstado()              Retorna el registro (valor) actual del campo [ah_estado]
 * @method timestamp             getAhFechaCrea()           Retorna el registro (valor) actual del campo [ah_fecha_crea]
 * @method integer               getAhQuienCrea()           Retorna el registro (valor) actual del campo [ah_quien_crea]
 * @method timestamp             getAhFechaModifica()       Retorna el registro (valor) actual del campo [ah_fecha_modifica]
 * @method integer               getAhQuienModifica()       Retorna el registro (valor) actual del campo [ah_quien_modifica]
 * @method timestamp             getAhFechaBorra()          Retorna el registro (valor) actual del campo [ah_fecha_borra]
 * @method integer               getAhQuienBorra()          Retorna el registro (valor) actual del campo [ah_quien_borra]
 * @method integer               getAhBorradoLogico()       Retorna el registro (valor) actual del campo [ah_borrado_logico]
 * @method DmlContratosBancarios getDmlContratosBancarios() Retorna el registro (valor) actual del campo [DmlContratosBancarios]
 * @method DmlTiposCuentas       getDmlTiposCuentas()       Retorna el registro (valor) actual del campo [DmlTiposCuentas]
 * @method Doctrine_Collection   getDmlMovimientos()        Retorna el registro (coleccion de datos) actual del campo [DmlMovimientos]
 * @method DmlAhorros            setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlAhorros            setContratosBancarios()    Guarda un registro (valor) al campo [contratos_bancarios]
 * @method DmlAhorros            setTiposCuentas()          Guarda un registro (valor) al campo [tipos_cuentas]
 * @method DmlAhorros            setAhFechaCreacion()       Guarda un registro (valor) al campo [ah_fecha_creacion]
 * @method DmlAhorros            setAhNumeroCuenta()        Guarda un registro (valor) al campo [ah_numero_cuenta]
 * @method DmlAhorros            setAhFechaCancelacion()    Guarda un registro (valor) al campo [ah_fecha_cancelacion]
 * @method DmlAhorros            setAhEstado()              Guarda un registro (valor) al campo [ah_estado]
 * @method DmlAhorros            setAhFechaCrea()           Guarda un registro (valor) al campo [ah_fecha_crea]
 * @method DmlAhorros            setAhQuienCrea()           Guarda un registro (valor) al campo [ah_quien_crea]
 * @method DmlAhorros            setAhFechaModifica()       Guarda un registro (valor) al campo [ah_fecha_modifica]
 * @method DmlAhorros            setAhQuienModifica()       Guarda un registro (valor) al campo [ah_quien_modifica]
 * @method DmlAhorros            setAhFechaBorra()          Guarda un registro (valor) al campo [ah_fecha_borra]
 * @method DmlAhorros            setAhQuienBorra()          Guarda un registro (valor) al campo [ah_quien_borra]
 * @method DmlAhorros            setAhBorradoLogico()       Guarda un registro (valor) al campo [ah_borrado_logico]
 * @method DmlAhorros            setDmlContratosBancarios() Guarda un registro (valor) al campo [DmlContratosBancarios]
 * @method DmlAhorros            setDmlTiposCuentas()       Guarda un registro (valor) al campo [DmlTiposCuentas]
 * @method DmlAhorros            setDmlMovimientos()        Guarda un registro (coleccion de datos) al campo [DmlMovimientos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlAhorros extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_ahorros');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('contratos_bancarios', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tipos_cuentas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ah_fecha_creacion', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ah_numero_cuenta', 'string', 11, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 11,        ));
        $this->hasColumn('ah_fecha_cancelacion', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ah_estado', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('ah_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ah_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ah_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ah_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ah_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ah_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ah_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlContratosBancarios', array(
            'local'   => 'contratos_bancarios',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlTiposCuentas', array(
            'local'   => 'tipos_cuentas',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlMovimientos', array(
            'local'   => 'id',
            'foreign' => 'ahorros'
        ));
    }

}