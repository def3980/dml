<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000084"
 * - Ultima vez que se actualizo el modelo : "2015-02-02 17:14:57"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlDetallePagos', 'doctrine');

/**
 * BaseDmlDetallePagos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $prestamos
 * @property date $dp_fecha
 * @property decimal $dp_valor
 * @property timestamp $dp_fecha_crea
 * @property integer $dp_quien_crea
 * @property timestamp $dp_fecha_modifica
 * @property integer $dp_quien_modifica
 * @property timestamp $dp_fecha_borra
 * @property integer $dp_quien_borra
 * @property integer $dp_borrado_logico
 * @property DmlPrestamos $DmlPrestamos
 * 
 * @method integer         getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer         getPrestamos()       Retorna el registro (valor) actual del campo [prestamos]
 * @method date            getDpFecha()         Retorna el registro (valor) actual del campo [dp_fecha]
 * @method decimal         getDpValor()         Retorna el registro (valor) actual del campo [dp_valor]
 * @method timestamp       getDpFechaCrea()     Retorna el registro (valor) actual del campo [dp_fecha_crea]
 * @method integer         getDpQuienCrea()     Retorna el registro (valor) actual del campo [dp_quien_crea]
 * @method timestamp       getDpFechaModifica() Retorna el registro (valor) actual del campo [dp_fecha_modifica]
 * @method integer         getDpQuienModifica() Retorna el registro (valor) actual del campo [dp_quien_modifica]
 * @method timestamp       getDpFechaBorra()    Retorna el registro (valor) actual del campo [dp_fecha_borra]
 * @method integer         getDpQuienBorra()    Retorna el registro (valor) actual del campo [dp_quien_borra]
 * @method integer         getDpBorradoLogico() Retorna el registro (valor) actual del campo [dp_borrado_logico]
 * @method DmlPrestamos    getDmlPrestamos()    Retorna el registro (valor) actual del campo [DmlPrestamos]
 * @method DmlDetallePagos setId()              Guarda un registro (valor) al campo [id]
 * @method DmlDetallePagos setPrestamos()       Guarda un registro (valor) al campo [prestamos]
 * @method DmlDetallePagos setDpFecha()         Guarda un registro (valor) al campo [dp_fecha]
 * @method DmlDetallePagos setDpValor()         Guarda un registro (valor) al campo [dp_valor]
 * @method DmlDetallePagos setDpFechaCrea()     Guarda un registro (valor) al campo [dp_fecha_crea]
 * @method DmlDetallePagos setDpQuienCrea()     Guarda un registro (valor) al campo [dp_quien_crea]
 * @method DmlDetallePagos setDpFechaModifica() Guarda un registro (valor) al campo [dp_fecha_modifica]
 * @method DmlDetallePagos setDpQuienModifica() Guarda un registro (valor) al campo [dp_quien_modifica]
 * @method DmlDetallePagos setDpFechaBorra()    Guarda un registro (valor) al campo [dp_fecha_borra]
 * @method DmlDetallePagos setDpQuienBorra()    Guarda un registro (valor) al campo [dp_quien_borra]
 * @method DmlDetallePagos setDpBorradoLogico() Guarda un registro (valor) al campo [dp_borrado_logico]
 * @method DmlDetallePagos setDmlPrestamos()    Guarda un registro (valor) al campo [DmlPrestamos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlDetallePagos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_detalle_pagos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('prestamos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dp_fecha', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('dp_valor', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('dp_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('dp_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dp_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('dp_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dp_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('dp_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('dp_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPrestamos', array(
            'local'   => 'prestamos',
            'foreign' => 'id'
        ));
    }

}