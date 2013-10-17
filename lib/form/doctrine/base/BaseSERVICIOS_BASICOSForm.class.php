<?php

/**
 * SERVICIOS_BASICOS form base class.
 *
 * @method SERVICIOS_BASICOS getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSERVICIOS_BASICOSForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sb_id'            => new sfWidgetFormInputHidden(),
      'sb_entidad'       => new sfWidgetFormInputText(),
      'sb_entidad_alias' => new sfWidgetFormInputText(),
      'sb_direccion'     => new sfWidgetFormTextarea(),
      'sb_sitio_web'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'sb_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sb_id')), 'empty_value' => $this->getObject()->get('sb_id'), 'required' => false)),
      'sb_entidad'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sb_entidad_alias' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sb_direccion'     => new sfValidatorString(array('required' => false)),
      'sb_sitio_web'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_basicos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SERVICIOS_BASICOS';
  }

}
