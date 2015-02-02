<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000084"
 * - Ultima vez que se actualizo el modelo : "2015-02-02 17:14:58"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlTiposTarjetasCreditoDebito', 'doctrine');

/**
 * BaseDmlTiposTarjetasCreditoDebito
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property string $ttcd_nombre
 * @property timestamp $ttcd_fecha_crea
 * @property integer $ttcd_quien_crea
 * @property timestamp $ttcd_fecha_modifica
 * @property integer $ttcd_quien_modifica
 * @property timestamp $ttcd_fecha_borra
 * @property integer $ttcd_quien_borra
 * @property integer $ttcd_borrado_logico
 * @property Doctrine_Collection $DmlTarjetasCreditoDebito
 * 
 * @method integer                       getId()                       Retorna el registro (valor) actual del campo [id]
 * @method string                        getTtcdNombre()               Retorna el registro (valor) actual del campo [ttcd_nombre]
 * @method timestamp                     getTtcdFechaCrea()            Retorna el registro (valor) actual del campo [ttcd_fecha_crea]
 * @method integer                       getTtcdQuienCrea()            Retorna el registro (valor) actual del campo [ttcd_quien_crea]
 * @method timestamp                     getTtcdFechaModifica()        Retorna el registro (valor) actual del campo [ttcd_fecha_modifica]
 * @method integer                       getTtcdQuienModifica()        Retorna el registro (valor) actual del campo [ttcd_quien_modifica]
 * @method timestamp                     getTtcdFechaBorra()           Retorna el registro (valor) actual del campo [ttcd_fecha_borra]
 * @method integer                       getTtcdQuienBorra()           Retorna el registro (valor) actual del campo [ttcd_quien_borra]
 * @method integer                       getTtcdBorradoLogico()        Retorna el registro (valor) actual del campo [ttcd_borrado_logico]
 * @method Doctrine_Collection           getDmlTarjetasCreditoDebito() Retorna el registro (coleccion de datos) actual del campo [DmlTarjetasCreditoDebito]
 * @method DmlTiposTarjetasCreditoDebito setId()                       Guarda un registro (valor) al campo [id]
 * @method DmlTiposTarjetasCreditoDebito setTtcdNombre()               Guarda un registro (valor) al campo [ttcd_nombre]
 * @method DmlTiposTarjetasCreditoDebito setTtcdFechaCrea()            Guarda un registro (valor) al campo [ttcd_fecha_crea]
 * @method DmlTiposTarjetasCreditoDebito setTtcdQuienCrea()            Guarda un registro (valor) al campo [ttcd_quien_crea]
 * @method DmlTiposTarjetasCreditoDebito setTtcdFechaModifica()        Guarda un registro (valor) al campo [ttcd_fecha_modifica]
 * @method DmlTiposTarjetasCreditoDebito setTtcdQuienModifica()        Guarda un registro (valor) al campo [ttcd_quien_modifica]
 * @method DmlTiposTarjetasCreditoDebito setTtcdFechaBorra()           Guarda un registro (valor) al campo [ttcd_fecha_borra]
 * @method DmlTiposTarjetasCreditoDebito setTtcdQuienBorra()           Guarda un registro (valor) al campo [ttcd_quien_borra]
 * @method DmlTiposTarjetasCreditoDebito setTtcdBorradoLogico()        Guarda un registro (valor) al campo [ttcd_borrado_logico]
 * @method DmlTiposTarjetasCreditoDebito setDmlTarjetasCreditoDebito() Guarda un registro (coleccion de datos) al campo [DmlTarjetasCreditoDebito]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlTiposTarjetasCreditoDebito extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_tipos_tarjetas_credito_debito');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('ttcd_nombre', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('ttcd_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ttcd_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ttcd_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ttcd_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ttcd_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('ttcd_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('ttcd_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasMany('DmlTarjetasCreditoDebito', array(
            'local'   => 'id',
            'foreign' => 'tipos_tarjetas_credito_debito'
        ));
    }

}