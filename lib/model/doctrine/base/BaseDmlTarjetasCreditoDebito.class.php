<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000084"
 * - Ultima vez que se actualizo el modelo : "2015-02-02 17:14:58"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlTarjetasCreditoDebito', 'doctrine');

/**
 * BaseDmlTarjetasCreditoDebito
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $contratos_bancarios
 * @property integer $tipos_tarjetas_credito_debito
 * @property date $tcd_fecha_emision
 * @property date $tcd_fecha_expiracion
 * @property string $tcd_numero
 * @property string $tcd_cvv
 * @property integer $tcd_estado
 * @property timestamp $tcd_fecha_crea
 * @property integer $tcd_quien_crea
 * @property timestamp $tcd_fecha_modifica
 * @property integer $tcd_quien_modifica
 * @property timestamp $tcd_fecha_borra
 * @property integer $tcd_quien_borra
 * @property integer $tcd_borrado_logico
 * @property DmlContratosBancarios $DmlContratosBancarios
 * @property DmlTiposTarjetasCreditoDebito $DmlTiposTarjetasCreditoDebito
 * @property Doctrine_Collection $DmlBinarios
 * @property Doctrine_Collection $DmlConsumoTarjetas
 * 
 * @method integer                       getId()                            Retorna el registro (valor) actual del campo [id]
 * @method integer                       getContratosBancarios()            Retorna el registro (valor) actual del campo [contratos_bancarios]
 * @method integer                       getTiposTarjetasCreditoDebito()    Retorna el registro (valor) actual del campo [tipos_tarjetas_credito_debito]
 * @method date                          getTcdFechaEmision()               Retorna el registro (valor) actual del campo [tcd_fecha_emision]
 * @method date                          getTcdFechaExpiracion()            Retorna el registro (valor) actual del campo [tcd_fecha_expiracion]
 * @method string                        getTcdNumero()                     Retorna el registro (valor) actual del campo [tcd_numero]
 * @method string                        getTcdCvv()                        Retorna el registro (valor) actual del campo [tcd_cvv]
 * @method integer                       getTcdEstado()                     Retorna el registro (valor) actual del campo [tcd_estado]
 * @method timestamp                     getTcdFechaCrea()                  Retorna el registro (valor) actual del campo [tcd_fecha_crea]
 * @method integer                       getTcdQuienCrea()                  Retorna el registro (valor) actual del campo [tcd_quien_crea]
 * @method timestamp                     getTcdFechaModifica()              Retorna el registro (valor) actual del campo [tcd_fecha_modifica]
 * @method integer                       getTcdQuienModifica()              Retorna el registro (valor) actual del campo [tcd_quien_modifica]
 * @method timestamp                     getTcdFechaBorra()                 Retorna el registro (valor) actual del campo [tcd_fecha_borra]
 * @method integer                       getTcdQuienBorra()                 Retorna el registro (valor) actual del campo [tcd_quien_borra]
 * @method integer                       getTcdBorradoLogico()              Retorna el registro (valor) actual del campo [tcd_borrado_logico]
 * @method DmlContratosBancarios         getDmlContratosBancarios()         Retorna el registro (valor) actual del campo [DmlContratosBancarios]
 * @method DmlTiposTarjetasCreditoDebito getDmlTiposTarjetasCreditoDebito() Retorna el registro (valor) actual del campo [DmlTiposTarjetasCreditoDebito]
 * @method Doctrine_Collection           getDmlBinarios()                   Retorna el registro (coleccion de datos) actual del campo [DmlBinarios]
 * @method Doctrine_Collection           getDmlConsumoTarjetas()            Retorna el registro (coleccion de datos) actual del campo [DmlConsumoTarjetas]
 * @method DmlTarjetasCreditoDebito      setId()                            Guarda un registro (valor) al campo [id]
 * @method DmlTarjetasCreditoDebito      setContratosBancarios()            Guarda un registro (valor) al campo [contratos_bancarios]
 * @method DmlTarjetasCreditoDebito      setTiposTarjetasCreditoDebito()    Guarda un registro (valor) al campo [tipos_tarjetas_credito_debito]
 * @method DmlTarjetasCreditoDebito      setTcdFechaEmision()               Guarda un registro (valor) al campo [tcd_fecha_emision]
 * @method DmlTarjetasCreditoDebito      setTcdFechaExpiracion()            Guarda un registro (valor) al campo [tcd_fecha_expiracion]
 * @method DmlTarjetasCreditoDebito      setTcdNumero()                     Guarda un registro (valor) al campo [tcd_numero]
 * @method DmlTarjetasCreditoDebito      setTcdCvv()                        Guarda un registro (valor) al campo [tcd_cvv]
 * @method DmlTarjetasCreditoDebito      setTcdEstado()                     Guarda un registro (valor) al campo [tcd_estado]
 * @method DmlTarjetasCreditoDebito      setTcdFechaCrea()                  Guarda un registro (valor) al campo [tcd_fecha_crea]
 * @method DmlTarjetasCreditoDebito      setTcdQuienCrea()                  Guarda un registro (valor) al campo [tcd_quien_crea]
 * @method DmlTarjetasCreditoDebito      setTcdFechaModifica()              Guarda un registro (valor) al campo [tcd_fecha_modifica]
 * @method DmlTarjetasCreditoDebito      setTcdQuienModifica()              Guarda un registro (valor) al campo [tcd_quien_modifica]
 * @method DmlTarjetasCreditoDebito      setTcdFechaBorra()                 Guarda un registro (valor) al campo [tcd_fecha_borra]
 * @method DmlTarjetasCreditoDebito      setTcdQuienBorra()                 Guarda un registro (valor) al campo [tcd_quien_borra]
 * @method DmlTarjetasCreditoDebito      setTcdBorradoLogico()              Guarda un registro (valor) al campo [tcd_borrado_logico]
 * @method DmlTarjetasCreditoDebito      setDmlContratosBancarios()         Guarda un registro (valor) al campo [DmlContratosBancarios]
 * @method DmlTarjetasCreditoDebito      setDmlTiposTarjetasCreditoDebito() Guarda un registro (valor) al campo [DmlTiposTarjetasCreditoDebito]
 * @method DmlTarjetasCreditoDebito      setDmlBinarios()                   Guarda un registro (coleccion de datos) al campo [DmlBinarios]
 * @method DmlTarjetasCreditoDebito      setDmlConsumoTarjetas()            Guarda un registro (coleccion de datos) al campo [DmlConsumoTarjetas]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlTarjetasCreditoDebito extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_tarjetas_credito_debito');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('contratos_bancarios', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tipos_tarjetas_credito_debito', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tcd_fecha_emision', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tcd_fecha_expiracion', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tcd_numero', 'string', 16, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 16,        ));
        $this->hasColumn('tcd_cvv', 'string', 3, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 3,        ));
        $this->hasColumn('tcd_estado', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('tcd_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tcd_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tcd_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tcd_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tcd_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('tcd_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tcd_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlContratosBancarios', array(
            'local'   => 'contratos_bancarios',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlTiposTarjetasCreditoDebito', array(
            'local'   => 'tipos_tarjetas_credito_debito',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlBinarios', array(
            'local'   => 'id',
            'foreign' => 'tarjetas_credito_debito'
        ));
        $this->hasMany('DmlConsumoTarjetas', array(
            'local'   => 'id',
            'foreign' => 'tarjetas_credito_debito'
        ));
    }

}