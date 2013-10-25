<?php

/**
 * RESPALDO_CONTRATOS form base class.
 *
 * @method RESPALDO_CONTRATOS getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRESPALDO_CONTRATOSForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rc_id'              => new sfWidgetFormInputHidden(),
      'rc_pdf'             => new sfWidgetFormTextarea(),
      'contrato_ip_cip_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CONTRATO_IP'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'rc_id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rc_id')), 'empty_value' => $this->getObject()->get('rc_id'), 'required' => false)),
      'rc_pdf'             => new sfValidatorString(array('required' => false)),
      'contrato_ip_cip_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CONTRATO_IP'))),
    ));

    $this->widgetSchema->setNameFormat('respaldo_contratos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RESPALDO_CONTRATOS';
  }

}
