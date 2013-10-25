<?php

/**
 * INGRESO_MONETARIO form base class.
 *
 * @method INGRESO_MONETARIO getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseINGRESO_MONETARIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'im_id'         => new sfWidgetFormInputHidden(),
      'im_fecha'      => new sfWidgetFormDate(),
      'im_razon'      => new sfWidgetFormTextarea(),
      'im_valor'      => new sfWidgetFormInputText(),
      'persona_pe_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'im_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('im_id')), 'empty_value' => $this->getObject()->get('im_id'), 'required' => false)),
      'im_fecha'      => new sfValidatorDate(array('required' => false)),
      'im_razon'      => new sfValidatorString(array('required' => false)),
      'im_valor'      => new sfValidatorNumber(array('required' => false)),
      'persona_pe_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'))),
    ));

    $this->widgetSchema->setNameFormat('ingreso_monetario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INGRESO_MONETARIO';
  }

}
