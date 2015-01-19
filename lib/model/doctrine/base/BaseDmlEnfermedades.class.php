<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000082"
 * - Ultima vez que se actualizo el modelo : "2015-01-19 09:46:24"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlEnfermedades', 'doctrine');

/**
 * BaseDmlEnfermedades
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $hijos
 * @property date $ef_fecha
 * @property string $ef_nombre
 * @property timestamp $ef_fecha_crea
 * @property integer $ef_quien_crea
 * @property timestamp $ef_fecha_modifica
 * @property integer $ef_quien_modifica
 * @property timestamp $ef_fecha_borra
 * @property integer $ef_quien_borra
 * @property integer $ef_borrado_logico
 * @property DmlHijos $DmlHijos
 * 
 * @method integer         getId()              Retorna el registro (valor) actual del campo [id]
 * @method integer         getHijos()           Retorna el registro (valor) actual del campo [hijos]
 * @method date            getEfFecha()         Retorna el registro (valor) actual del campo [ef_fecha]
 * @method string          getEfNombre()        Retorna el registro (valor) actual del campo [ef_nombre]
 * @method timestamp       getEfFechaCrea()     Retorna el registro (valor) actual del campo [ef_fecha_crea]
 * @method integer         getEfQuienCrea()     Retorna el registro (valor) actual del campo [ef_quien_crea]
 * @method timestamp       getEfFechaModifica() Retorna el registro (valor) actual del campo [ef_fecha_modifica]
 * @method integer         getEfQuienModifica() Retorna el registro (valor) actual del campo [ef_quien_modifica]
 * @method timestamp       getEfFechaBorra()    Retorna el registro (valor) actual del campo [ef_fecha_borra]
 * @method integer         getEfQuienBorra()    Retorna el registro (valor) actual del campo [ef_quien_borra]
 * @method integer         getEfBorradoLogico() Retorna el registro (valor) actual del campo [ef_borrado_logico]
 * @method DmlHijos        getDmlHijos()        Retorna el registro (valor) actual del campo [DmlHijos]
 * @method DmlEnfermedades setId()              Guarda un registro (valor) al campo [id]
 * @method DmlEnfermedades setHijos()           Guarda un registro (valor) al campo [hijos]
 * @method DmlEnfermedades setEfFecha()         Guarda un registro (valor) al campo [ef_fecha]
 * @method DmlEnfermedades setEfNombre()        Guarda un registro (valor) al campo [ef_nombre]
 * @method DmlEnfermedades setEfFechaCrea()     Guarda un registro (valor) al campo [ef_fecha_crea]
 * @method DmlEnfermedades setEfQuienCrea()     Guarda un registro (valor) al campo [ef_quien_crea]
 * @method DmlEnfermedades setEfFechaModifica() Guarda un registro (valor) al campo [ef_fecha_modifica]
 * @method DmlEnfermedades setEfQuienModifica() Guarda un registro (valor) al campo [ef_quien_modifica]
 * @method DmlEnfermedades setEfFechaBorra()    Guarda un registro (valor) al campo [ef_fecha_borra]
 * @method DmlEnfermedades setEfQuienBorra()    Guarda un registro (valor) al campo [ef_quien_borra]
 * @method DmlEnfermedades setEfBorradoLogico() Guarda un registro (valor) al campo [ef_borrado_logico]
 * @method DmlEnfermedades setDmlHijos()        Guarda un registro (valor) al campo [DmlHijos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlEnfermedades extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_enfermedades');
        $this->hasColumn('id', 'integer', 4, array(
        $this->hasColumn('hijos', 'integer', 4, array(
        $this->hasColumn('ef_fecha', 'date', 25, array(
        $this->hasColumn('ef_nombre', 'string', 100, array(
        $this->hasColumn('ef_fecha_crea', 'timestamp', 25, array(
        $this->hasColumn('ef_quien_crea', 'integer', 4, array(
        $this->hasColumn('ef_fecha_modifica', 'timestamp', 25, array(
        $this->hasColumn('ef_quien_modifica', 'integer', 4, array(
        $this->hasColumn('ef_fecha_borra', 'timestamp', 25, array(
        $this->hasColumn('ef_quien_borra', 'integer', 4, array(
        $this->hasColumn('ef_borrado_logico', 'integer', 1, array(
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlHijos', array(
            'local'   => 'hijos',
            'foreign' => 'id'
        ));
    }

}