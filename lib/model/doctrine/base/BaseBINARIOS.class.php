<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BINARIOS', 'doctrine');

/**
 * BaseBINARIOS
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $bi_id
 * @property string $bi_nombre
 * @property decimal $bi_tamanio_bytes
 * @property blob $bi_bin
 * @property string $bi_ext
 * @property integer $pagos_pa_id
 * @property PAGOS $PAGOS
 * 
 * @method integer  getBiId()             Returns the current record's "bi_id" value
 * @method string   getBiNombre()         Returns the current record's "bi_nombre" value
 * @method decimal  getBiTamanioBytes()   Returns the current record's "bi_tamanio_bytes" value
 * @method blob     getBiBin()            Returns the current record's "bi_bin" value
 * @method string   getBiExt()            Returns the current record's "bi_ext" value
 * @method integer  getPagosPaId()        Returns the current record's "pagos_pa_id" value
 * @method PAGOS    getPAGOS()            Returns the current record's "PAGOS" value
 * @method BINARIOS setBiId()             Sets the current record's "bi_id" value
 * @method BINARIOS setBiNombre()         Sets the current record's "bi_nombre" value
 * @method BINARIOS setBiTamanioBytes()   Sets the current record's "bi_tamanio_bytes" value
 * @method BINARIOS setBiBin()            Sets the current record's "bi_bin" value
 * @method BINARIOS setBiExt()            Sets the current record's "bi_ext" value
 * @method BINARIOS setPagosPaId()        Sets the current record's "pagos_pa_id" value
 * @method BINARIOS setPAGOS()            Sets the current record's "PAGOS" value
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBINARIOS extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('BINARIOS');
        $this->hasColumn('bi_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('bi_nombre', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('bi_tamanio_bytes', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('bi_bin', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('bi_ext', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pagos_pa_id', 'integer', 4, array(
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
        $this->hasOne('PAGOS', array(
             'local' => 'pagos_pa_id',
             'foreign' => 'pa_id'));
    }
}