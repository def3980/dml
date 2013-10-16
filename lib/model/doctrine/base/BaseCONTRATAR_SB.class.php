<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CONTRATAR_SB', 'doctrine');

/**
 * BaseCONTRATAR_SB
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $csb_id
 * @property string $csb_identificacion
 * @property date $csb_fecha
 * @property integer $persona_pe_id
 * @property integer $servicios_basicos_sb_id
 * @property PERSONA $PERSONA
 * @property SERVICIOS_BASICOS $SERVICIOS_BASICOS
 * 
 * @method integer           getCsbId()                   Returns the current record's "csb_id" value
 * @method string            getCsbIdentificacion()       Returns the current record's "csb_identificacion" value
 * @method date              getCsbFecha()                Returns the current record's "csb_fecha" value
 * @method integer           getPersonaPeId()             Returns the current record's "persona_pe_id" value
 * @method integer           getServiciosBasicosSbId()    Returns the current record's "servicios_basicos_sb_id" value
 * @method PERSONA           getPERSONA()                 Returns the current record's "PERSONA" value
 * @method SERVICIOS_BASICOS getSERVICIOSBASICOS()        Returns the current record's "SERVICIOS_BASICOS" value
 * @method CONTRATAR_SB      setCsbId()                   Sets the current record's "csb_id" value
 * @method CONTRATAR_SB      setCsbIdentificacion()       Sets the current record's "csb_identificacion" value
 * @method CONTRATAR_SB      setCsbFecha()                Sets the current record's "csb_fecha" value
 * @method CONTRATAR_SB      setPersonaPeId()             Sets the current record's "persona_pe_id" value
 * @method CONTRATAR_SB      setServiciosBasicosSbId()    Sets the current record's "servicios_basicos_sb_id" value
 * @method CONTRATAR_SB      setPERSONA()                 Sets the current record's "PERSONA" value
 * @method CONTRATAR_SB      setSERVICIOSBASICOS()        Sets the current record's "SERVICIOS_BASICOS" value
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCONTRATAR_SB extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('CONTRATAR_SB');
        $this->hasColumn('csb_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('csb_identificacion', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('csb_fecha', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
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
        $this->hasColumn('servicios_basicos_sb_id', 'integer', 4, array(
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

        $this->hasOne('SERVICIOS_BASICOS', array(
             'local' => 'servicios_basicos_sb_id',
             'foreign' => 'sb_id'));
    }
}