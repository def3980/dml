<?php

/**
 * INGRESO_MONETARIO filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseINGRESO_MONETARIOFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'im_fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'im_razon'      => new sfWidgetFormFilterInput(),
      'im_valor'      => new sfWidgetFormFilterInput(),
      'persona_pe_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'im_fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'im_razon'      => new sfValidatorPass(array('required' => false)),
      'im_valor'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'persona_pe_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PERSONA'), 'column' => 'pe_id')),
    ));

    $this->widgetSchema->setNameFormat('ingreso_monetario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'INGRESO_MONETARIO';
  }

  public function getFields()
  {
    return array(
      'im_id'         => 'Number',
      'im_fecha'      => 'Date',
      'im_razon'      => 'Text',
      'im_valor'      => 'Number',
      'persona_pe_id' => 'ForeignKey',
    );
  }
}
