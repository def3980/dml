<?php

/**
 * CONTRATO_IP form base class.
 *
 * @method CONTRATO_IP getObject() Returns the current form's model object
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCONTRATO_IPForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cip_id'                     => new sfWidgetFormInputHidden(),
      'cip_fecha_ingreso'          => new sfWidgetFormDate(),
      'cip_fecha_salida'           => new sfWidgetFormDate(),
      'cip_motivos_salida'         => new sfWidgetFormTextarea(),
      'cip_actividad_desarrollada' => new sfWidgetFormInputText(),
      'cip_activo'                 => new sfWidgetFormInputText(),
      'institucion_publica_ip_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('INSTITUCION_PUBLICA'), 'add_empty' => false)),
      'remuneracion_re_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('REMUNERACION'), 'add_empty' => false)),
      'persona_pe_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cip_id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cip_id')), 'empty_value' => $this->getObject()->get('cip_id'), 'required' => false)),
      'cip_fecha_ingreso'          => new sfValidatorDate(array('required' => false)),
      'cip_fecha_salida'           => new sfValidatorDate(array('required' => false)),
      'cip_motivos_salida'         => new sfValidatorString(array('required' => false)),
      'cip_actividad_desarrollada' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cip_activo'                 => new sfValidatorInteger(array('required' => false)),
      'institucion_publica_ip_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('INSTITUCION_PUBLICA'))),
      'remuneracion_re_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('REMUNERACION'))),
      'persona_pe_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PERSONA'))),
    ));

    $this->widgetSchema->setNameFormat('contrato_ip[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CONTRATO_IP';
  }

}
