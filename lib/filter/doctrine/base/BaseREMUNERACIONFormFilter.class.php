<?php

/**
 * REMUNERACION filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseREMUNERACIONFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      're_nombre' => new sfWidgetFormFilterInput(),
      're_alias'  => new sfWidgetFormFilterInput(),
      're_valor'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      're_nombre' => new sfValidatorPass(array('required' => false)),
      're_alias'  => new sfValidatorPass(array('required' => false)),
      're_valor'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('remuneracion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'REMUNERACION';
  }

  public function getFields()
  {
    return array(
      're_id'     => 'Number',
      're_nombre' => 'Text',
      're_alias'  => 'Text',
      're_valor'  => 'Number',
    );
  }
}
