<?php

/**
 * CONTRATAR_SB form base class.
 *
 * @method CONTRATAR_SB getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCONTRATAR_SBForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'csb_id'                  => new sfWidgetFormInputHidden(),
      'csb_identificacion'      => new sfWidgetFormInputText(),
      'csb_fecha'               => new sfWidgetFormDate(),
      'persona_pe_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => false)),
      'servicios_basicos_sb_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'csb_id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('csb_id')), 'empty_value' => $this->getObject()->get('csb_id'), 'required' => false)),
      'csb_identificacion'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'csb_fecha'               => new sfValidatorDate(array('required' => false)),
      'persona_pe_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'))),
      'servicios_basicos_sb_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'))),
    ));

    $this->widgetSchema->setNameFormat('contratar_sb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CONTRATAR_SB';
  }

}
