<?php

/**
 * Fecha creacion : "Lunes, 1 Junio 2015 13:03:02"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000005"
 * - Ultima vez que se actualizo el modelo : "2015-11-24 17:02:45"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlPagosConsumosTarjetas', 'doctrine');

/**
 * BaseDmlPagosConsumosTarjetas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $pagos
 * @property integer $consumos_tarjetas
 * @property integer $personas
 * @property DmlConsumosTarjetas $DmlConsumosTarjetas
 * @property DmlPagos $DmlPagos
 * @property DmlPersonas $DmlPersonas
 * 
 * @method integer                  getId()                Retorna el registro (valor) actual del campo [id]
 * @method integer                  getPagos()             Retorna el registro (valor) actual del campo [pagos]
 * @method integer                  getConsumosTarjetas()  Retorna el registro (valor) actual del campo [consumos_tarjetas]
 * @method integer                  getPersonas()          Retorna el registro (valor) actual del campo [personas]
 * @method DmlConsumosTarjetas      getDmlConsumosTarjetas() Retorna el registro (valor) actual del campo [DmlConsumosTarjetas]
 * @method DmlPagos                 getDmlPagos()          Retorna el registro (valor) actual del campo [DmlPagos]
 * @method DmlPersonas              getDmlPersonas()       Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlPagosConsumosTarjetas setId()                Guarda un registro (valor) al campo [id]
 * @method DmlPagosConsumosTarjetas setPagos()             Guarda un registro (valor) al campo [pagos]
 * @method DmlPagosConsumosTarjetas setConsumosTarjetas()  Guarda un registro (valor) al campo [consumos_tarjetas]
 * @method DmlPagosConsumosTarjetas setPersonas()          Guarda un registro (valor) al campo [personas]
 * @method DmlPagosConsumosTarjetas setDmlConsumosTarjetas() Guarda un registro (valor) al campo [DmlConsumosTarjetas]
 * @method DmlPagosConsumosTarjetas setDmlPagos()          Guarda un registro (valor) al campo [DmlPagos]
 * @method DmlPagosConsumosTarjetas setDmlPersonas()       Guarda un registro (valor) al campo [DmlPersonas]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlPagosConsumosTarjetas extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_pagos_consumos_tarjetas');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('pagos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('consumos_tarjetas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlConsumosTarjetas', array(
            'local'   => 'consumos_tarjetas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlPagos', array(
            'local'   => 'pagos',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
    }

}