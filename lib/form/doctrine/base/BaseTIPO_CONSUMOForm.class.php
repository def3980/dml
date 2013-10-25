<?php

/**
 * TIPO_CONSUMO form base class.
 *
 * @method TIPO_CONSUMO getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_CONSUMOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tc_id'     => new sfWidgetFormInputHidden(),
      'tc_nombre' => new sfWidgetFormInputText(),
      'tc_alias'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tc_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tc_id')), 'empty_value' => $this->getObject()->get('tc_id'), 'required' => false)),
      'tc_nombre' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tc_alias'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_consumo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_CONSUMO';
  }

}
