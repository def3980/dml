<?php

/**
 * PAGOS filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePAGOSFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pa_numero_factura'  => new sfWidgetFormFilterInput(),
      'pa_fecha'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pa_detalle'         => new sfWidgetFormFilterInput(),
      'pa_iva'             => new sfWidgetFormFilterInput(),
      'pa_ice'             => new sfWidgetFormFilterInput(),
      'pa_comision'        => new sfWidgetFormFilterInput(),
      'pa_valor_total'     => new sfWidgetFormFilterInput(),
      'persona_pe_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => true)),
      'tipo_consumo_tc_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CONSUMO'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'pa_numero_factura'  => new sfValidatorPass(array('required' => false)),
      'pa_fecha'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pa_detalle'         => new sfValidatorPass(array('required' => false)),
      'pa_iva'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pa_ice'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pa_comision'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pa_valor_total'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'persona_pe_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PERSONA'), 'column' => 'pe_id')),
      'tipo_consumo_tc_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TIPO_CONSUMO'), 'column' => 'tc_id')),
    ));

    $this->widgetSchema->setNameFormat('pagos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PAGOS';
  }

  public function getFields()
  {
    return array(
      'pa_id'              => 'Number',
      'pa_numero_factura'  => 'Text',
      'pa_fecha'           => 'Date',
      'pa_detalle'         => 'Text',
      'pa_iva'             => 'Number',
      'pa_ice'             => 'Number',
      'pa_comision'        => 'Number',
      'pa_valor_total'     => 'Number',
      'persona_pe_id'      => 'ForeignKey',
      'tipo_consumo_tc_id' => 'ForeignKey',
    );
  }
}
