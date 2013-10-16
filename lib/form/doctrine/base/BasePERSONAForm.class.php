<?php

/**
 * PERSONA form base class.
 *
 * @method PERSONA getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePERSONAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pe_id'               => new sfWidgetFormInputHidden(),
      'pe_cedula'           => new sfWidgetFormInputText(),
      'pe_nombres'          => new sfWidgetFormInputText(),
      'pe_apellidos'        => new sfWidgetFormInputText(),
      'pe_fecha_nacimiento' => new sfWidgetFormDate(),
      'pe_imagen'           => new sfWidgetFormTextarea(),
      'pe_email'            => new sfWidgetFormInputText(),
      'pe_usr'              => new sfWidgetFormInputText(),
      'pe_pwd'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'pe_id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pe_id')), 'empty_value' => $this->getObject()->get('pe_id'), 'required' => false)),
      'pe_cedula'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pe_nombres'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pe_apellidos'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pe_fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'pe_imagen'           => new sfValidatorString(array('required' => false)),
      'pe_email'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pe_usr'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pe_pwd'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PERSONA';
  }

}
