<?php

/**
 * Fecha creacion : "Miercoles, 4 Marzo 2015 08:42:17"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000001"
 * - Ultima vez que se actualizo el modelo : "2015-03-04 11:59:32"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlBinariosCompartidos', 'doctrine');

/**
 * BaseDmlBinariosCompartidos
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $binarios
 * @property integer $pagos
 * @property timestamp $bc_fecha_crea
 * @property integer $bc_quien_crea
 * @property timestamp $bc_fecha_modifica
 * @property integer $bc_quien_modifica
 * @property timestamp $bc_fecha_borra
 * @property integer $bc_quien_borra
 * @property integer $bc_borrado_logico
 * @property DmlBinarios $DmlBinarios
 * @property DmlPagos $DmlPagos
 * 
 * @method integer                getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer                getBinarios()        Retorna el registro (valor) actual del campo [binarios]
 * @method integer                getPagos()           Retorna el registro (valor) actual del campo [pagos]
 * @method timestamp              getBcFechaCrea()     Retorna el registro (valor) actual del campo [bc_fecha_crea]
 * @method integer                getBcQuienCrea()     Retorna el registro (valor) actual del campo [bc_quien_crea]
 * @method timestamp              getBcFechaModifica() Retorna el registro (valor) actual del campo [bc_fecha_modifica]
 * @method integer                getBcQuienModifica() Retorna el registro (valor) actual del campo [bc_quien_modifica]
 * @method timestamp              getBcFechaBorra()    Retorna el registro (valor) actual del campo [bc_fecha_borra]
 * @method integer                getBcQuienBorra()    Retorna el registro (valor) actual del campo [bc_quien_borra]
 * @method integer                getBcBorradoLogico() Retorna el registro (valor) actual del campo [bc_borrado_logico]
 * @method DmlBinarios            getDmlBinarios()     Retorna el registro (valor) actual del campo [DmlBinarios]
 * @method DmlPagos               getDmlPagos()        Retorna el registro (valor) actual del campo [DmlPagos]
 * @method DmlBinariosCompartidos setId()              Guarda un registro (valor) al campo [id]
 * @method DmlBinariosCompartidos setBinarios()        Guarda un registro (valor) al campo [binarios]
 * @method DmlBinariosCompartidos setPagos()           Guarda un registro (valor) al campo [pagos]
 * @method DmlBinariosCompartidos setBcFechaCrea()     Guarda un registro (valor) al campo [bc_fecha_crea]
 * @method DmlBinariosCompartidos setBcQuienCrea()     Guarda un registro (valor) al campo [bc_quien_crea]
 * @method DmlBinariosCompartidos setBcFechaModifica() Guarda un registro (valor) al campo [bc_fecha_modifica]
 * @method DmlBinariosCompartidos setBcQuienModifica() Guarda un registro (valor) al campo [bc_quien_modifica]
 * @method DmlBinariosCompartidos setBcFechaBorra()    Guarda un registro (valor) al campo [bc_fecha_borra]
 * @method DmlBinariosCompartidos setBcQuienBorra()    Guarda un registro (valor) al campo [bc_quien_borra]
 * @method DmlBinariosCompartidos setBcBorradoLogico() Guarda un registro (valor) al campo [bc_borrado_logico]
 * @method DmlBinariosCompartidos setDmlBinarios()     Guarda un registro (valor) al campo [DmlBinarios]
 * @method DmlBinariosCompartidos setDmlPagos()        Guarda un registro (valor) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlBinariosCompartidos extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_binarios_compartidos');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('binarios', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pagos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => true,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bc_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bc_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bc_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bc_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bc_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bc_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bc_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlBinarios', array(
            'local'   => 'binarios',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlPagos', array(
            'local'   => 'pagos',
            'foreign' => 'id'
        ));
    }

}