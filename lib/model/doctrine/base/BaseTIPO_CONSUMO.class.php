<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TIPO_CONSUMO', 'doctrine');

/**
 * BaseTIPO_CONSUMO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $tc_id
 * @property string $tc_nombre
 * @property string $tc_alias
 * @property Doctrine_Collection $PAGOS
 * 
 * @method integer             getTcId()      Returns the current record's "tc_id" value
 * @method string              getTcNombre()  Returns the current record's "tc_nombre" value
 * @method string              getTcAlias()   Returns the current record's "tc_alias" value
 * @method Doctrine_Collection getPAGOS()     Returns the current record's "PAGOS" collection
 * @method TIPO_CONSUMO        setTcId()      Sets the current record's "tc_id" value
 * @method TIPO_CONSUMO        setTcNombre()  Sets the current record's "tc_nombre" value
 * @method TIPO_CONSUMO        setTcAlias()   Sets the current record's "tc_alias" value
 * @method TIPO_CONSUMO        setPAGOS()     Sets the current record's "PAGOS" collection
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTIPO_CONSUMO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TIPO_CONSUMO');
        $this->hasColumn('tc_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('tc_nombre', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('tc_alias', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PAGOS', array(
             'local' => 'tc_id',
             'foreign' => 'tipo_consumo_tc_id'));
    }
}