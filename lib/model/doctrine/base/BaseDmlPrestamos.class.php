<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000091"
 * - Ultima vez que se actualizo el modelo : "2015-06-01 13:03:02"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlPrestamos', 'doctrine');

/**
 * BaseDmlPrestamos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $contratos_bancarios
 * @property date $pr_fecha_concesion
 * @property string $pr_nombre_prestamo
 * @property string $pr_detalle
 * @property timestamp $pr_fecha_crea
 * @property integer $pr_quien_crea
 * @property timestamp $pr_fecha_modifica
 * @property integer $pr_quien_modifica
 * @property timestamp $pr_fecha_borra
 * @property integer $pr_quien_borra
 * @property integer $pr_borrado_logico
 * @property DmlContratosBancarios $DmlContratosBancarios
 * @property Doctrine_Collection $DmlDetallePagos
 * 
 * @method integer               getId()                    Retorna el registro (valor) actual del campo [id]
 * @method integer               getContratosBancarios()    Retorna el registro (valor) actual del campo [contratos_bancarios]
 * @method date                  getPrFechaConcesion()      Retorna el registro (valor) actual del campo [pr_fecha_concesion]
 * @method string                getPrNombrePrestamo()      Retorna el registro (valor) actual del campo [pr_nombre_prestamo]
 * @method string                getPrDetalle()             Retorna el registro (valor) actual del campo [pr_detalle]
 * @method timestamp             getPrFechaCrea()           Retorna el registro (valor) actual del campo [pr_fecha_crea]
 * @method integer               getPrQuienCrea()           Retorna el registro (valor) actual del campo [pr_quien_crea]
 * @method timestamp             getPrFechaModifica()       Retorna el registro (valor) actual del campo [pr_fecha_modifica]
 * @method integer               getPrQuienModifica()       Retorna el registro (valor) actual del campo [pr_quien_modifica]
 * @method timestamp             getPrFechaBorra()          Retorna el registro (valor) actual del campo [pr_fecha_borra]
 * @method integer               getPrQuienBorra()          Retorna el registro (valor) actual del campo [pr_quien_borra]
 * @method integer               getPrBorradoLogico()       Retorna el registro (valor) actual del campo [pr_borrado_logico]
 * @method DmlContratosBancarios getDmlContratosBancarios() Retorna el registro (valor) actual del campo [DmlContratosBancarios]
 * @method Doctrine_Collection   getDmlDetallePagos()       Retorna el registro (coleccion de datos) actual del campo [DmlDetallePagos]
 * @method DmlPrestamos          setId()                    Guarda un registro (valor) al campo [id]
 * @method DmlPrestamos          setContratosBancarios()    Guarda un registro (valor) al campo [contratos_bancarios]
 * @method DmlPrestamos          setPrFechaConcesion()      Guarda un registro (valor) al campo [pr_fecha_concesion]
 * @method DmlPrestamos          setPrNombrePrestamo()      Guarda un registro (valor) al campo [pr_nombre_prestamo]
 * @method DmlPrestamos          setPrDetalle()             Guarda un registro (valor) al campo [pr_detalle]
 * @method DmlPrestamos          setPrFechaCrea()           Guarda un registro (valor) al campo [pr_fecha_crea]
 * @method DmlPrestamos          setPrQuienCrea()           Guarda un registro (valor) al campo [pr_quien_crea]
 * @method DmlPrestamos          setPrFechaModifica()       Guarda un registro (valor) al campo [pr_fecha_modifica]
 * @method DmlPrestamos          setPrQuienModifica()       Guarda un registro (valor) al campo [pr_quien_modifica]
 * @method DmlPrestamos          setPrFechaBorra()          Guarda un registro (valor) al campo [pr_fecha_borra]
 * @method DmlPrestamos          setPrQuienBorra()          Guarda un registro (valor) al campo [pr_quien_borra]
 * @method DmlPrestamos          setPrBorradoLogico()       Guarda un registro (valor) al campo [pr_borrado_logico]
 * @method DmlPrestamos          setDmlContratosBancarios() Guarda un registro (valor) al campo [DmlContratosBancarios]
 * @method DmlPrestamos          setDmlDetallePagos()       Guarda un registro (coleccion de datos) al campo [DmlDetallePagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlPrestamos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_prestamos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('contratos_bancarios', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pr_fecha_concesion', 'date', 25, array(            'type'          => 'date',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pr_nombre_prestamo', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('pr_detalle', 'string', null, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('pr_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pr_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pr_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pr_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pr_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('pr_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pr_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlContratosBancarios', array(
            'local'   => 'contratos_bancarios',
            'foreign' => 'id'
        ));
        $this->hasMany('DmlDetallePagos', array(
            'local'   => 'id',
            'foreign' => 'prestamos'
        ));
    }

}