<?php

/**
 * INSTITUCION_PUBLICA filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseINSTITUCION_PUBLICAFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ip_nombre'    => new sfWidgetFormFilterInput(),
      'ip_alias'     => new sfWidgetFormFilterInput(),
      'ip_direccion' => new sfWidgetFormFilterInput(),
      'ip_tlf'       => new sfWidgetFormFilterInput(),
      'ip_sitio_web' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ip_nombre'    => new sfValidatorPass(array('required' => false)),
      'ip_alias'     => new sfValidatorPass(array('required' => false)),
      'ip_direccion' => new sfValidatorPass(array('required' => false)),
      'ip_tlf'       => new sfValidatorPass(array('required' => false)),
      'ip_sitio_web' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institucion_publica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INSTITUCION_PUBLICA';
  }

  public function getFields()
  {
    return array(
      'ip_id'        => 'Number',
      'ip_nombre'    => 'Text',
      'ip_alias'     => 'Text',
      'ip_direccion' => 'Text',
      'ip_tlf'       => 'Text',
      'ip_sitio_web' => 'Text',
    );
  }
}
