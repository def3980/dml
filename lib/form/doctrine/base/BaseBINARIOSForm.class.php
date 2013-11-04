<?php

/**
 * BINARIOS form base class.
 *
 * @method BINARIOS getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBINARIOSForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'bi_id'       => new sfWidgetFormInputHidden(),
      'bi_nombre'   => new sfWidgetFormInputText(),
      'bi_tamanio'  => new sfWidgetFormInputText(),
      'bi_bin'      => new sfWidgetFormTextarea(),
      'bi_ext'      => new sfWidgetFormInputText(),
      'pagos_pa_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PAGOS'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'bi_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('bi_id')), 'empty_value' => $this->getObject()->get('bi_id'), 'required' => false)),
      'bi_nombre'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'bi_tamanio'  => new sfValidatorNumber(array('required' => false)),
      'bi_bin'      => new sfValidatorString(array('required' => false)),
      'bi_ext'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pagos_pa_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PAGOS'))),
    ));

    $this->widgetSchema->setNameFormat('binarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BINARIOS';
  }

}
