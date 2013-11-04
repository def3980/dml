<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PAGOS', 'doctrine');

/**
 * BasePAGOS
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pa_id
 * @property string $pa_numero_factura
 * @property timestamp $pa_fecha
 * @property string $pa_detalle
 * @property decimal $pa_iva
 * @property decimal $pa_ice
 * @property decimal $pa_comision
 * @property decimal $pa_valor_total
 * @property integer $persona_pe_id
 * @property integer $tipo_consumo_tc_id
 * @property PERSONA $PERSONA
 * @property TIPO_CONSUMO $TIPO_CONSUMO
 * @property Doctrine_Collection $BINARIOS
 * 
 * @method integer             getPaId()               Returns the current record's "pa_id" value
 * @method string              getPaNumeroFactura()    Returns the current record's "pa_numero_factura" value
 * @method timestamp           getPaFecha()            Returns the current record's "pa_fecha" value
 * @method string              getPaDetalle()          Returns the current record's "pa_detalle" value
 * @method decimal             getPaIva()              Returns the current record's "pa_iva" value
 * @method decimal             getPaIce()              Returns the current record's "pa_ice" value
 * @method decimal             getPaComision()         Returns the current record's "pa_comision" value
 * @method decimal             getPaValorTotal()       Returns the current record's "pa_valor_total" value
 * @method integer             getPersonaPeId()        Returns the current record's "persona_pe_id" value
 * @method integer             getTipoConsumoTcId()    Returns the current record's "tipo_consumo_tc_id" value
 * @method PERSONA             getPERSONA()            Returns the current record's "PERSONA" value
 * @method TIPO_CONSUMO        getTIPOCONSUMO()        Returns the current record's "TIPO_CONSUMO" value
 * @method Doctrine_Collection getBINARIOS()           Returns the current record's "BINARIOS" collection
 * @method PAGOS               setPaId()               Sets the current record's "pa_id" value
 * @method PAGOS               setPaNumeroFactura()    Sets the current record's "pa_numero_factura" value
 * @method PAGOS               setPaFecha()            Sets the current record's "pa_fecha" value
 * @method PAGOS               setPaDetalle()          Sets the current record's "pa_detalle" value
 * @method PAGOS               setPaIva()              Sets the current record's "pa_iva" value
 * @method PAGOS               setPaIce()              Sets the current record's "pa_ice" value
 * @method PAGOS               setPaComision()         Sets the current record's "pa_comision" value
 * @method PAGOS               setPaValorTotal()       Sets the current record's "pa_valor_total" value
 * @method PAGOS               setPersonaPeId()        Sets the current record's "persona_pe_id" value
 * @method PAGOS               setTipoConsumoTcId()    Sets the current record's "tipo_consumo_tc_id" value
 * @method PAGOS               setPERSONA()            Sets the current record's "PERSONA" value
 * @method PAGOS               setTIPOCONSUMO()        Sets the current record's "TIPO_CONSUMO" value
 * @method PAGOS               setBINARIOS()           Sets the current record's "BINARIOS" collection
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePAGOS extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('PAGOS');
        $this->hasColumn('pa_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('pa_numero_factura', 'string', 17, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 17,
             ));
        $this->hasColumn('pa_fecha', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('pa_detalle', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('pa_iva', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('pa_ice', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('pa_comision', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('pa_valor_total', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('persona_pe_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tipo_consumo_tc_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PERSONA', array(
             'local' => 'persona_pe_id',
             'foreign' => 'pe_id'));

        $this->hasOne('TIPO_CONSUMO', array(
             'local' => 'tipo_consumo_tc_id',
             'foreign' => 'tc_id'));

        $this->hasMany('BINARIOS', array(
             'local' => 'pa_id',
             'foreign' => 'pagos_pa_id'));
    }
}