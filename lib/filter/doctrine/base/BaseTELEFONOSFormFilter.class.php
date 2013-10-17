<?php

/**
 * TELEFONOS filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTELEFONOSFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'te_numero'               => new sfWidgetFormFilterInput(),
      'te_ext'                  => new sfWidgetFormFilterInput(),
      'servicios_basicos_sb_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'te_numero'               => new sfValidatorPass(array('required' => false)),
      'te_ext'                  => new sfValidatorPass(array('required' => false)),
      'servicios_basicos_sb_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'column' => 'sb_id')),
    ));

    $this->widgetSchema->setNameFormat('telefonos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TELEFONOS';
  }

  public function getFields()
  {
    return array(
      'te_id'                   => 'Number',
      'te_numero'               => 'Text',
      'te_ext'                  => 'Text',
      'servicios_basicos_sb_id' => 'ForeignKey',
    );
  }
}
