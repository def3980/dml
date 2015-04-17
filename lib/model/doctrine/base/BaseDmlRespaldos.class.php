<?php

/**
 * Fecha creacion : "Jueves, 12 Marzo 2015 12:52:44"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000001"
 * - Ultima vez que se actualizo el modelo : "2015-03-25 10:36:31"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlRespaldos', 'doctrine');

/**
 * BaseDmlRespaldos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $pagos
 * @property integer $binarios
 * @property timestamp $rs_fecha_crea
 * @property integer $rs_quien_crea
 * @property timestamp $rs_fecha_modifica
 * @property integer $rs_quien_modifica
 * @property timestamp $rs_fecha_borra
 * @property integer $rs_quien_borra
 * @property integer $rs_borrado_logico
 * @property DmlBinarios $DmlBinarios
 * @property DmlPagos $DmlPagos
 * 
 * @method integer      getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer      getPagos()           Retorna el registro (valor) actual del campo [pagos]
 * @method integer      getBinarios()        Retorna el registro (valor) actual del campo [binarios]
 * @method timestamp    getRsFechaCrea()     Retorna el registro (valor) actual del campo [rs_fecha_crea]
 * @method integer      getRsQuienCrea()     Retorna el registro (valor) actual del campo [rs_quien_crea]
 * @method timestamp    getRsFechaModifica() Retorna el registro (valor) actual del campo [rs_fecha_modifica]
 * @method integer      getRsQuienModifica() Retorna el registro (valor) actual del campo [rs_quien_modifica]
 * @method timestamp    getRsFechaBorra()    Retorna el registro (valor) actual del campo [rs_fecha_borra]
 * @method integer      getRsQuienBorra()    Retorna el registro (valor) actual del campo [rs_quien_borra]
 * @method integer      getRsBorradoLogico() Retorna el registro (valor) actual del campo [rs_borrado_logico]
 * @method DmlBinarios  getDmlBinarios()     Retorna el registro (valor) actual del campo [DmlBinarios]
 * @method DmlPagos     getDmlPagos()        Retorna el registro (valor) actual del campo [DmlPagos]
 * @method DmlRespaldos setId()              Guarda un registro (valor) al campo [id]
 * @method DmlRespaldos setPagos()           Guarda un registro (valor) al campo [pagos]
 * @method DmlRespaldos setBinarios()        Guarda un registro (valor) al campo [binarios]
 * @method DmlRespaldos setRsFechaCrea()     Guarda un registro (valor) al campo [rs_fecha_crea]
 * @method DmlRespaldos setRsQuienCrea()     Guarda un registro (valor) al campo [rs_quien_crea]
 * @method DmlRespaldos setRsFechaModifica() Guarda un registro (valor) al campo [rs_fecha_modifica]
 * @method DmlRespaldos setRsQuienModifica() Guarda un registro (valor) al campo [rs_quien_modifica]
 * @method DmlRespaldos setRsFechaBorra()    Guarda un registro (valor) al campo [rs_fecha_borra]
 * @method DmlRespaldos setRsQuienBorra()    Guarda un registro (valor) al campo [rs_quien_borra]
 * @method DmlRespaldos setRsBorradoLogico() Guarda un registro (valor) al campo [rs_borrado_logico]
 * @method DmlRespaldos setDmlBinarios()     Guarda un registro (valor) al campo [DmlBinarios]
 * @method DmlRespaldos setDmlPagos()        Guarda un registro (valor) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlRespaldos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_respaldos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('pagos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('binarios', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('rs_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('rs_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('rs_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('rs_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('rs_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('rs_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('rs_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlBinarios', array(
            'local'    => 'binarios',
            'foreign'  => 'id',
            'onDelete' => 'cascade',
            'onUpdate' => 'cascade'
        ));
        $this->hasOne('DmlPagos', array(
            'local'    => 'pagos',
            'foreign'  => 'id',
            'onDelete' => 'cascade',
            'onUpdate' => 'cascade'
        ));
    }

}