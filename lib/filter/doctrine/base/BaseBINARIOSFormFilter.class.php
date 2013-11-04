<?php

/**
 * BINARIOS filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBINARIOSFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'bi_nombre'   => new sfWidgetFormFilterInput(),
      'bi_tamanio'  => new sfWidgetFormFilterInput(),
      'bi_bin'      => new sfWidgetFormFilterInput(),
      'bi_ext'      => new sfWidgetFormFilterInput(),
      'pagos_pa_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PAGOS'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'bi_nombre'   => new sfValidatorPass(array('required' => false)),
      'bi_tamanio'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bi_bin'      => new sfValidatorPass(array('required' => false)),
      'bi_ext'      => new sfValidatorPass(array('required' => false)),
      'pagos_pa_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PAGOS'), 'column' => 'pa_id')),
    ));

    $this->widgetSchema->setNameFormat('binarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BINARIOS';
  }

  public function getFields()
  {
    return array(
      'bi_id'       => 'Number',
      'bi_nombre'   => 'Text',
      'bi_tamanio'  => 'Number',
      'bi_bin'      => 'Text',
      'bi_ext'      => 'Text',
      'pagos_pa_id' => 'ForeignKey',
    );
  }
}
