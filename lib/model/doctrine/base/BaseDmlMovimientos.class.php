<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000084"
 * - Ultima vez que se actualizo el modelo : "2015-02-02 17:14:57"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlMovimientos', 'doctrine');

/**
 * BaseDmlMovimientos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $ahorros
 * @property date $mo_fecha
 * @property string $mo_concepto
 * @property string $mo_tipo
 * @property string $mo_documento
 * @property string $mo_oficina
 * @property decimal $mo_monto
 * @property decimal $mo_saldo
 * @property string $mo_mini_detalle_json
 * @property timestamp $mo_fecha_crea
 * @property integer $mo_quien_crea
 * @property timestamp $mo_fecha_modifica
 * @property integer $mo_quien_modifica
 * @property timestamp $mo_fecha_borra
 * @property integer $mo_quien_borra
 * @property integer $mo_borrado_logico
 * @property DmlAhorros $DmlAhorros
 * 
 * @method integer        getId()                   Retorna el registro (valor) actual del campo [id]
 * @method integer        getAhorros()              Retorna el registro (valor) actual del campo [ahorros]
 * @method date           getMoFecha()              Retorna el registro (valor) actual del campo [mo_fecha]
 * @method string         getMoConcepto()           Retorna el registro (valor) actual del campo [mo_concepto]
 * @method string         getMoTipo()               Retorna el registro (valor) actual del campo [mo_tipo]
 * @method string         getMoDocumento()          Retorna el registro (valor) actual del campo [mo_documento]
 * @method string         getMoOficina()            Retorna el registro (valor) actual del campo [mo_oficina]
 * @method decimal        getMoMonto()              Retorna el registro (valor) actual del campo [mo_monto]
 * @method decimal        getMoSaldo()              Retorna el registro (valor) actual del campo [mo_saldo]
 * @method string         getMoMiniDetalleJson()    Retorna el registro (valor) actual del campo [mo_mini_detalle_json]
 * @method timestamp      getMoFechaCrea()          Retorna el registro (valor) actual del campo [mo_fecha_crea]
 * @method integer        getMoQuienCrea()          Retorna el registro (valor) actual del campo [mo_quien_crea]
 * @method timestamp      getMoFechaModifica()      Retorna el registro (valor) actual del campo [mo_fecha_modifica]
 * @method integer        getMoQuienModifica()      Retorna el registro (valor) actual del campo [mo_quien_modifica]
 * @method timestamp      getMoFechaBorra()         Retorna el registro (valor) actual del campo [mo_fecha_borra]
 * @method integer        getMoQuienBorra()         Retorna el registro (valor) actual del campo [mo_quien_borra]
 * @method integer        getMoBorradoLogico()      Retorna el registro (valor) actual del campo [mo_borrado_logico]
 * @method DmlAhorros     getDmlAhorros()           Retorna el registro (valor) actual del campo [DmlAhorros]
 * @method DmlMovimientos setId()                   Guarda un registro (valor) al campo [id]
 * @method DmlMovimientos setAhorros()              Guarda un registro (valor) al campo [ahorros]
 * @method DmlMovimientos setMoFecha()              Guarda un registro (valor) al campo [mo_fecha]
 * @method DmlMovimientos setMoConcepto()           Guarda un registro (valor) al campo [mo_concepto]
 * @method DmlMovimientos setMoTipo()               Guarda un registro (valor) al campo [mo_tipo]
 * @method DmlMovimientos setMoDocumento()          Guarda un registro (valor) al campo [mo_documento]
 * @method DmlMovimientos setMoOficina()            Guarda un registro (valor) al campo [mo_oficina]
 * @method DmlMovimientos setMoMonto()              Guarda un registro (valor) al campo [mo_monto]
 * @method DmlMovimientos setMoSaldo()              Guarda un registro (valor) al campo [mo_saldo]
 * @method DmlMovimientos setMoMiniDetalleJson()    Guarda un registro (valor) al campo [mo_mini_detalle_json]
 * @method DmlMovimientos setMoFechaCrea()          Guarda un registro (valor) al campo [mo_fecha_crea]
 * @method DmlMovimientos setMoQuienCrea()          Guarda un registro (valor) al campo [mo_quien_crea]
 * @method DmlMovimientos setMoFechaModifica()      Guarda un registro (valor) al campo [mo_fecha_modifica]
 * @method DmlMovimientos setMoQuienModifica()      Guarda un registro (valor) al campo [mo_quien_modifica]
 * @method DmlMovimientos setMoFechaBorra()         Guarda un registro (valor) al campo [mo_fecha_borra]
 * @method DmlMovimientos setMoQuienBorra()         Guarda un registro (valor) al campo [mo_quien_borra]
 * @method DmlMovimientos setMoBorradoLogico()      Guarda un registro (valor) al campo [mo_borrado_logico]
 * @method DmlMovimientos setDmlAhorros()           Guarda un registro (valor) al campo [DmlAhorros]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlMovimientos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_movimientos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('ahorros', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('mo_fecha', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('mo_concepto', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('mo_tipo', 'string', 1, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
        $this->hasColumn('mo_documento', 'string', 15, array(            'type'          => 'string',            'fixed'         => 1,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 15,        ));
        $this->hasColumn('mo_oficina', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('mo_monto', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('mo_saldo', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('mo_mini_detalle_json', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('mo_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('mo_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('mo_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('mo_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('mo_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('mo_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('mo_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlAhorros', array(
            'local'   => 'ahorros',
            'foreign' => 'id'
        ));
    }

}