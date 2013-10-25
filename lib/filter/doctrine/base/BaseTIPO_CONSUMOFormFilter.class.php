<?php

/**
 * TIPO_CONSUMO filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTIPO_CONSUMOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tc_nombre' => new sfWidgetFormFilterInput(),
      'tc_alias'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tc_nombre' => new sfValidatorPass(array('required' => false)),
      'tc_alias'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_consumo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_CONSUMO';
  }

  public function getFields()
  {
    return array(
      'tc_id'     => 'Number',
      'tc_nombre' => 'Text',
      'tc_alias'  => 'Text',
    );
  }
}
