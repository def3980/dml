<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-model  : "000082"
 * - Ultima vez que se actualizo el modelo : "2015-01-19 09:46:24"
 */

// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DmlBinarios', 'doctrine');

/**
 * BaseDmlBinarios
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @property integer $id
 * @property integer $personas
 * @property integer $hijos
 * @property integer $tarjetas_credito_debito
 * @property integer $pagos
 * @property string $bi_nombre_original
 * @property decimal $bi_tamanio_bytes
 * @property blob $bi_binario
 * @property string $bi_mime_type
 * @property timestamp $bi_fecha_crea
 * @property integer $bi_quien_crea
 * @property timestamp $bi_fecha_modifica
 * @property integer $bi_quien_modifica
 * @property timestamp $bi_fecha_borra
 * @property integer $bi_quien_borra
 * @property integer $bi_borrado_logico
 * @property DmlPersonas $DmlPersonas
 * @property DmlTarjetasCreditoDebito $DmlTarjetasCreditoDebito
 * @property DmlHijos $DmlHijos
 * @property DmlPagos $DmlPagos
 * 
 * @method integer                  getId()                       Retorna el registro (valor) actual del campo [id]
 * @method integer                  getPersonas()                 Retorna el registro (valor) actual del campo [personas]
 * @method integer                  getHijos()                    Retorna el registro (valor) actual del campo [hijos]
 * @method integer                  getTarjetasCreditoDebito()    Retorna el registro (valor) actual del campo [tarjetas_credito_debito]
 * @method integer                  getPagos()                    Retorna el registro (valor) actual del campo [pagos]
 * @method string                   getBiNombreOriginal()         Retorna el registro (valor) actual del campo [bi_nombre_original]
 * @method decimal                  getBiTamanioBytes()           Retorna el registro (valor) actual del campo [bi_tamanio_bytes]
 * @method blob                     getBiBinario()                Retorna el registro (valor) actual del campo [bi_binario]
 * @method string                   getBiMimeType()               Retorna el registro (valor) actual del campo [bi_mime_type]
 * @method timestamp                getBiFechaCrea()              Retorna el registro (valor) actual del campo [bi_fecha_crea]
 * @method integer                  getBiQuienCrea()              Retorna el registro (valor) actual del campo [bi_quien_crea]
 * @method timestamp                getBiFechaModifica()          Retorna el registro (valor) actual del campo [bi_fecha_modifica]
 * @method integer                  getBiQuienModifica()          Retorna el registro (valor) actual del campo [bi_quien_modifica]
 * @method timestamp                getBiFechaBorra()             Retorna el registro (valor) actual del campo [bi_fecha_borra]
 * @method integer                  getBiQuienBorra()             Retorna el registro (valor) actual del campo [bi_quien_borra]
 * @method integer                  getBiBorradoLogico()          Retorna el registro (valor) actual del campo [bi_borrado_logico]
 * @method DmlPersonas              getDmlPersonas()              Retorna el registro (valor) actual del campo [DmlPersonas]
 * @method DmlTarjetasCreditoDebito getDmlTarjetasCreditoDebito() Retorna el registro (valor) actual del campo [DmlTarjetasCreditoDebito]
 * @method DmlHijos                 getDmlHijos()                 Retorna el registro (valor) actual del campo [DmlHijos]
 * @method DmlPagos                 getDmlPagos()                 Retorna el registro (valor) actual del campo [DmlPagos]
 * @method DmlBinarios              setId()                       Guarda un registro (valor) al campo [id]
 * @method DmlBinarios              setPersonas()                 Guarda un registro (valor) al campo [personas]
 * @method DmlBinarios              setHijos()                    Guarda un registro (valor) al campo [hijos]
 * @method DmlBinarios              setTarjetasCreditoDebito()    Guarda un registro (valor) al campo [tarjetas_credito_debito]
 * @method DmlBinarios              setPagos()                    Guarda un registro (valor) al campo [pagos]
 * @method DmlBinarios              setBiNombreOriginal()         Guarda un registro (valor) al campo [bi_nombre_original]
 * @method DmlBinarios              setBiTamanioBytes()           Guarda un registro (valor) al campo [bi_tamanio_bytes]
 * @method DmlBinarios              setBiBinario()                Guarda un registro (valor) al campo [bi_binario]
 * @method DmlBinarios              setBiMimeType()               Guarda un registro (valor) al campo [bi_mime_type]
 * @method DmlBinarios              setBiFechaCrea()              Guarda un registro (valor) al campo [bi_fecha_crea]
 * @method DmlBinarios              setBiQuienCrea()              Guarda un registro (valor) al campo [bi_quien_crea]
 * @method DmlBinarios              setBiFechaModifica()          Guarda un registro (valor) al campo [bi_fecha_modifica]
 * @method DmlBinarios              setBiQuienModifica()          Guarda un registro (valor) al campo [bi_quien_modifica]
 * @method DmlBinarios              setBiFechaBorra()             Guarda un registro (valor) al campo [bi_fecha_borra]
 * @method DmlBinarios              setBiQuienBorra()             Guarda un registro (valor) al campo [bi_quien_borra]
 * @method DmlBinarios              setBiBorradoLogico()          Guarda un registro (valor) al campo [bi_borrado_logico]
 * @method DmlBinarios              setDmlPersonas()              Guarda un registro (valor) al campo [DmlPersonas]
 * @method DmlBinarios              setDmlTarjetasCreditoDebito() Guarda un registro (valor) al campo [DmlTarjetasCreditoDebito]
 * @method DmlBinarios              setDmlHijos()                 Guarda un registro (valor) al campo [DmlHijos]
 * @method DmlBinarios              setDmlPagos()                 Guarda un registro (valor) al campo [DmlPagos]
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmlBinarios extends sfDoctrineRecord {

    public function setTableDefinition() {
        $this->setTableName('dml_binarios');
        $this->hasColumn('id', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => true,            'autoincrement' => true,            'length'        => 4,        ));
        $this->hasColumn('personas', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('hijos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('tarjetas_credito_debito', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('pagos', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bi_nombre_original', 'string', 100, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 100,        ));
        $this->hasColumn('bi_tamanio_bytes', 'decimal', 10, array(            'type'          => 'decimal',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 10,            'scale'         => '2',        ));
        $this->hasColumn('bi_binario', 'blob', null, array(            'type'          => 'blob',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => '',        ));
        $this->hasColumn('bi_mime_type', 'string', 50, array(            'type'          => 'string',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 50,        ));
        $this->hasColumn('bi_fecha_crea', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bi_quien_crea', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bi_fecha_modifica', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bi_quien_modifica', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bi_fecha_borra', 'timestamp', 25, array(            'type'          => 'timestamp',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 25,        ));
        $this->hasColumn('bi_quien_borra', 'integer', 4, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 4,        ));
        $this->hasColumn('bi_borrado_logico', 'integer', 1, array(            'type'          => 'integer',            'fixed'         => 0,            'unsigned'      => false,            'primary'       => false,            'notnull'       => false,            'autoincrement' => false,            'length'        => 1,        ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('DmlPersonas', array(
            'local'   => 'personas',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlTarjetasCreditoDebito', array(
            'local'   => 'tarjetas_credito_debito',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlHijos', array(
            'local'   => 'hijos',
            'foreign' => 'id'
        ));
        $this->hasOne('DmlPagos', array(
            'local'    => 'pagos',
            'foreign'  => 'id',
            'onDelete' => 'cascade',
            'onUpdate' => 'cascade'
        ));
    }

}