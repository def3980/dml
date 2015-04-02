<?php

/**
 * Fecha creacion : "Lunes, 5 Enero 2015 09:00:56"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000012"
 * - Ultima vez que se actualizo el modelo : "2015-03-25 10:36:30"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlBeneficiarios', 'doctrine');

/**
 * BaseDmlBeneficiarios
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $be_orden
 * @property string $be_nombres_identificativos
 * @property timestamp $be_fecha_crea
 * @property integer $be_quien_crea
 * @property timestamp $be_fecha_modifica
 * @property integer $be_quien_modifica
 * @property timestamp $be_fecha_borra
 * @property integer $be_quien_borra
 * @property integer $be_borrado_logico
 * 
 * @method integer          getId()                         Retorna el registro (valor) actual del campo [id]
 * @method integer          getBeOrden()                    Retorna el registro (valor) actual del campo [be_orden]
 * @method string           getBeNombresIdentificativos()   Retorna el registro (valor) actual del campo [be_nombres_identificativos]
 * @method timestamp        getBeFechaCrea()                Retorna el registro (valor) actual del campo [be_fecha_crea]
 * @method integer          getBeQuienCrea()                Retorna el registro (valor) actual del campo [be_quien_crea]
 * @method timestamp        getBeFechaModifica()            Retorna el registro (valor) actual del campo [be_fecha_modifica]
 * @method integer          getBeQuienModifica()            Retorna el registro (valor) actual del campo [be_quien_modifica]
 * @method timestamp        getBeFechaBorra()               Retorna el registro (valor) actual del campo [be_fecha_borra]
 * @method integer          getBeQuienBorra()               Retorna el registro (valor) actual del campo [be_quien_borra]
 * @method integer          getBeBorradoLogico()            Retorna el registro (valor) actual del campo [be_borrado_logico]
 * @method DmlBeneficiarios setId()                         Guarda un registro (valor) al campo [id]
 * @method DmlBeneficiarios setBeOrden()                    Guarda un registro (valor) al campo [be_orden]
 * @method DmlBeneficiarios setBeNombresIdentificativos()   Guarda un registro (valor) al campo [be_nombres_identificativos]
 * @method DmlBeneficiarios setBeFechaCrea()                Guarda un registro (valor) al campo [be_fecha_crea]
 * @method DmlBeneficiarios setBeQuienCrea()                Guarda un registro (valor) al campo [be_quien_crea]
 * @method DmlBeneficiarios setBeFechaModifica()            Guarda un registro (valor) al campo [be_fecha_modifica]
 * @method DmlBeneficiarios setBeQuienModifica()            Guarda un registro (valor) al campo [be_quien_modifica]
 * @method DmlBeneficiarios setBeFechaBorra()               Guarda un registro (valor) al campo [be_fecha_borra]
 * @method DmlBeneficiarios setBeQuienBorra()               Guarda un registro (valor) al campo [be_quien_borra]
 * @method DmlBeneficiarios setBeBorradoLogico()            Guarda un registro (valor) al campo [be_borrado_logico]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlBeneficiarios extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_beneficiarios');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('be_orden', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('be_nombres_identificativos', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('be_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('be_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('be_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('be_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('be_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('be_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('be_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        
    }

}