<?php

/**
 * TELEFONOS form base class.
 *
 * @method TELEFONOS getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTELEFONOSForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'te_id'                   => new sfWidgetFormInputHidden(),
      'te_numero'               => new sfWidgetFormInputText(),
      'te_ext'                  => new sfWidgetFormInputText(),
      'servicios_basicos_sb_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'te_id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('te_id')), 'empty_value' => $this->getObject()->get('te_id'), 'required' => false)),
      'te_numero'               => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      'te_ext'                  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'servicios_basicos_sb_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'))),
    ));

    $this->widgetSchema->setNameFormat('telefonos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TELEFONOS';
  }

}
