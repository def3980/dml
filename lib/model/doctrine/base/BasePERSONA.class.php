<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PERSONA', 'doctrine');

/**
 * BasePERSONA
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pe_id
 * @property string $pe_cedula
 * @property string $pe_nombres
 * @property string $pe_apellidos
 * @property date $pe_fecha_nacimiento
 * @property blob $pe_imagen
 * @property string $pe_email
 * @property string $pe_usr
 * @property string $pe_pwd
 * @property Doctrine_Collection $CONTRATAR_SB
 * @property Doctrine_Collection $PAGOS
 * 
 * @method integer             getPeId()                Returns the current record's "pe_id" value
 * @method string              getPeCedula()            Returns the current record's "pe_cedula" value
 * @method string              getPeNombres()           Returns the current record's "pe_nombres" value
 * @method string              getPeApellidos()         Returns the current record's "pe_apellidos" value
 * @method date                getPeFechaNacimiento()   Returns the current record's "pe_fecha_nacimiento" value
 * @method blob                getPeImagen()            Returns the current record's "pe_imagen" value
 * @method string              getPeEmail()             Returns the current record's "pe_email" value
 * @method string              getPeUsr()               Returns the current record's "pe_usr" value
 * @method string              getPePwd()               Returns the current record's "pe_pwd" value
 * @method Doctrine_Collection getCONTRATARSB()         Returns the current record's "CONTRATAR_SB" collection
 * @method Doctrine_Collection getPAGOS()               Returns the current record's "PAGOS" collection
 * @method PERSONA             setPeId()                Sets the current record's "pe_id" value
 * @method PERSONA             setPeCedula()            Sets the current record's "pe_cedula" value
 * @method PERSONA             setPeNombres()           Sets the current record's "pe_nombres" value
 * @method PERSONA             setPeApellidos()         Sets the current record's "pe_apellidos" value
 * @method PERSONA             setPeFechaNacimiento()   Sets the current record's "pe_fecha_nacimiento" value
 * @method PERSONA             setPeImagen()            Sets the current record's "pe_imagen" value
 * @method PERSONA             setPeEmail()             Sets the current record's "pe_email" value
 * @method PERSONA             setPeUsr()               Sets the current record's "pe_usr" value
 * @method PERSONA             setPePwd()               Sets the current record's "pe_pwd" value
 * @method PERSONA             setCONTRATARSB()         Sets the current record's "CONTRATAR_SB" collection
 * @method PERSONA             setPAGOS()               Sets the current record's "PAGOS" collection
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePERSONA extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('PERSONA');
        $this->hasColumn('pe_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('pe_cedula', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pe_nombres', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pe_apellidos', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pe_fecha_nacimiento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('pe_imagen', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('pe_email', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pe_usr', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('pe_pwd', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CONTRATAR_SB', array(
             'local' => 'pe_id',
             'foreign' => 'persona_pe_id'));

        $this->hasMany('PAGOS', array(
             'local' => 'pe_id',
             'foreign' => 'persona_pe_id'));
    }
}