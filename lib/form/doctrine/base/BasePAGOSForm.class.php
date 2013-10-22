<?php

/**
 * PAGOS form base class.
 *
 * @method PAGOS getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePAGOSForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pa_id'             => new sfWidgetFormInputHidden(),
      'pa_numero_factura' => new sfWidgetFormInputText(),
      'pa_fecha'          => new sfWidgetFormDateTime(),
      'pa_detalle'        => new sfWidgetFormTextarea(),
      'pa_iva'            => new sfWidgetFormInputText(),
      'pa_ice'            => new sfWidgetFormInputText(),
      'pa_comision'       => new sfWidgetFormInputText(),
      'pa_valor_total'    => new sfWidgetFormInputText(),
      'pa_respaldo'       => new sfWidgetFormTextarea(),
      'persona_pe_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'pa_id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pa_id')), 'empty_value' => $this->getObject()->get('pa_id'), 'required' => false)),
      'pa_numero_factura' => new sfValidatorString(array('max_length' => 17, 'required' => false)),
      'pa_fecha'          => new sfValidatorDateTime(array('required' => false)),
      'pa_detalle'        => new sfValidatorString(array('required' => false)),
      'pa_iva'            => new sfValidatorNumber(array('required' => false)),
      'pa_ice'            => new sfValidatorNumber(array('required' => false)),
      'pa_comision'       => new sfValidatorNumber(array('required' => false)),
      'pa_valor_total'    => new sfValidatorNumber(array('required' => false)),
      'pa_respaldo'       => new sfValidatorString(array('required' => false)),
      'persona_pe_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'))),
    ));

    $this->widgetSchema->setNameFormat('pagos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PAGOS';
  }

}
