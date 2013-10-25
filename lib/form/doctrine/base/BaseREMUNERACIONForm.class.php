<?php

/**
 * REMUNERACION form base class.
 *
 * @method REMUNERACION getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseREMUNERACIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      're_id'     => new sfWidgetFormInputHidden(),
      're_nombre' => new sfWidgetFormInputText(),
      're_alias'  => new sfWidgetFormInputText(),
      're_valor'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      're_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('re_id')), 'empty_value' => $this->getObject()->get('re_id'), 'required' => false)),
      're_nombre' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      're_alias'  => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      're_valor'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('remuneracion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'REMUNERACION';
  }

}
