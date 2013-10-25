<?php

/**
 * RESPALDO_CONTRATOS filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRESPALDO_CONTRATOSFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rc_pdf'             => new sfWidgetFormFilterInput(),
      'contrato_ip_cip_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CONTRATO_IP'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'rc_pdf'             => new sfValidatorPass(array('required' => false)),
      'contrato_ip_cip_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CONTRATO_IP'), 'column' => 'cip_id')),
    ));

    $this->widgetSchema->setNameFormat('respaldo_contratos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RESPALDO_CONTRATOS';
  }

  public function getFields()
  {
    return array(
      'rc_id'              => 'Number',
      'rc_pdf'             => 'Text',
      'contrato_ip_cip_id' => 'ForeignKey',
    );
  }
}
