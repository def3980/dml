<?php

/**
 * CONTRATAR_SB filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCONTRATAR_SBFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'csb_identificacion'      => new sfWidgetFormFilterInput(),
      'csb_fecha'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'persona_pe_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => true)),
      'servicios_basicos_sb_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'csb_identificacion'      => new sfValidatorPass(array('required' => false)),
      'csb_fecha'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'persona_pe_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PERSONA'), 'column' => 'pe_id')),
      'servicios_basicos_sb_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SERVICIOS_BASICOS'), 'column' => 'sb_id')),
    ));

    $this->widgetSchema->setNameFormat('contratar_sb_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CONTRATAR_SB';
  }

  public function getFields()
  {
    return array(
      'csb_id'                  => 'Number',
      'csb_identificacion'      => 'Text',
      'csb_fecha'               => 'Date',
      'persona_pe_id'           => 'ForeignKey',
      'servicios_basicos_sb_id' => 'ForeignKey',
    );
  }
}
