<?php

/**
 * INSTITUCION_PUBLICA form base class.
 *
 * @method INSTITUCION_PUBLICA getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseINSTITUCION_PUBLICAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ip_id'        => new sfWidgetFormInputHidden(),
      'ip_nombre'    => new sfWidgetFormInputText(),
      'ip_alias'     => new sfWidgetFormInputText(),
      'ip_direccion' => new sfWidgetFormTextarea(),
      'ip_tlf'       => new sfWidgetFormInputText(),
      'ip_sitio_web' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ip_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ip_id')), 'empty_value' => $this->getObject()->get('ip_id'), 'required' => false)),
      'ip_nombre'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ip_alias'     => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'ip_direccion' => new sfValidatorString(array('required' => false)),
      'ip_tlf'       => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      'ip_sitio_web' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institucion_publica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INSTITUCION_PUBLICA';
  }

}
