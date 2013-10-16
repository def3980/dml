<?php

/**
 * SERVICIOS_BASICOS filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSERVICIOS_BASICOSFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sb_entidad'       => new sfWidgetFormFilterInput(),
      'sb_entidad_alias' => new sfWidgetFormFilterInput(),
      'sb_direccion'     => new sfWidgetFormFilterInput(),
      'sb_sitio_web'     => new sfWidgetFormFilterInput(),
      'sb_tlf1'          => new sfWidgetFormFilterInput(),
      'sb_tlf1_ext'      => new sfWidgetFormFilterInput(),
      'sb_tlf2_ext'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sb_entidad'       => new sfValidatorPass(array('required' => false)),
      'sb_entidad_alias' => new sfValidatorPass(array('required' => false)),
      'sb_direccion'     => new sfValidatorPass(array('required' => false)),
      'sb_sitio_web'     => new sfValidatorPass(array('required' => false)),
      'sb_tlf1'          => new sfValidatorPass(array('required' => false)),
      'sb_tlf1_ext'      => new sfValidatorPass(array('required' => false)),
      'sb_tlf2_ext'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_basicos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SERVICIOS_BASICOS';
  }

  public function getFields()
  {
    return array(
      'sb_id'            => 'Number',
      'sb_entidad'       => 'Text',
      'sb_entidad_alias' => 'Text',
      'sb_direccion'     => 'Text',
      'sb_sitio_web'     => 'Text',
      'sb_tlf1'          => 'Text',
      'sb_tlf1_ext'      => 'Text',
      'sb_tlf2_ext'      => 'Text',
    );
  }
}
