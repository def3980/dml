<?php

/**
 * CONTRATO_IP filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCONTRATO_IPFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cip_fecha_ingreso'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cip_fecha_salida'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cip_motivos_salida'         => new sfWidgetFormFilterInput(),
      'cip_actividad_desarrollada' => new sfWidgetFormFilterInput(),
      'cip_activo'                 => new sfWidgetFormFilterInput(),
      'institucion_publica_ip_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('INSTITUCION_PUBLICA'), 'add_empty' => true)),
      'remuneracion_re_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('REMUNERACION'), 'add_empty' => true)),
      'persona_pe_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cip_fecha_ingreso'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cip_fecha_salida'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cip_motivos_salida'         => new sfValidatorPass(array('required' => false)),
      'cip_actividad_desarrollada' => new sfValidatorPass(array('required' => false)),
      'cip_activo'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'institucion_publica_ip_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('INSTITUCION_PUBLICA'), 'column' => 'ip_id')),
      'remuneracion_re_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('REMUNERACION'), 'column' => 're_id')),
      'persona_pe_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PERSONA'), 'column' => 'pe_id')),
    ));

    $this->widgetSchema->setNameFormat('contrato_ip_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CONTRATO_IP';
  }

  public function getFields()
  {
    return array(
      'cip_id'                     => 'Number',
      'cip_fecha_ingreso'          => 'Date',
      'cip_fecha_salida'           => 'Date',
      'cip_motivos_salida'         => 'Text',
      'cip_actividad_desarrollada' => 'Text',
      'cip_activo'                 => 'Number',
      'institucion_publica_ip_id'  => 'ForeignKey',
      'remuneracion_re_id'         => 'ForeignKey',
      'persona_pe_id'              => 'ForeignKey',
    );
  }
}
