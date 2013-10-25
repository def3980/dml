<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('INSTITUCION_PUBLICA', 'doctrine');

/**
 * BaseINSTITUCION_PUBLICA
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ip_id
 * @property string $ip_nombre
 * @property string $ip_alias
 * @property string $ip_direccion
 * @property string $ip_tlf
 * @property string $ip_sitio_web
 * @property Doctrine_Collection $CONTRATO_IP
 * 
 * @method integer             getIpId()         Returns the current record's "ip_id" value
 * @method string              getIpNombre()     Returns the current record's "ip_nombre" value
 * @method string              getIpAlias()      Returns the current record's "ip_alias" value
 * @method string              getIpDireccion()  Returns the current record's "ip_direccion" value
 * @method string              getIpTlf()        Returns the current record's "ip_tlf" value
 * @method string              getIpSitioWeb()   Returns the current record's "ip_sitio_web" value
 * @method Doctrine_Collection getCONTRATOIP()   Returns the current record's "CONTRATO_IP" collection
 * @method INSTITUCION_PUBLICA setIpId()         Sets the current record's "ip_id" value
 * @method INSTITUCION_PUBLICA setIpNombre()     Sets the current record's "ip_nombre" value
 * @method INSTITUCION_PUBLICA setIpAlias()      Sets the current record's "ip_alias" value
 * @method INSTITUCION_PUBLICA setIpDireccion()  Sets the current record's "ip_direccion" value
 * @method INSTITUCION_PUBLICA setIpTlf()        Sets the current record's "ip_tlf" value
 * @method INSTITUCION_PUBLICA setIpSitioWeb()   Sets the current record's "ip_sitio_web" value
 * @method INSTITUCION_PUBLICA setCONTRATOIP()   Sets the current record's "CONTRATO_IP" collection
 * 
 * @package    dml
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseINSTITUCION_PUBLICA extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('INSTITUCION_PUBLICA');
        $this->hasColumn('ip_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('ip_nombre', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('ip_alias', 'string', 7, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 7,
             ));
        $this->hasColumn('ip_direccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('ip_tlf', 'string', 9, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 9,
             ));
        $this->hasColumn('ip_sitio_web', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CONTRATO_IP', array(
             'local' => 'ip_id',
             'foreign' => 'institucion_publica_ip_id'));
    }
}