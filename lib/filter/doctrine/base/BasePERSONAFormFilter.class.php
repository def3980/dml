<?php

/**
 * PERSONA filter form base class.
 *
 * @package    dml
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePERSONAFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pe_cedula'           => new sfWidgetFormFilterInput(),
      'pe_nombres'          => new sfWidgetFormFilterInput(),
      'pe_apellidos'        => new sfWidgetFormFilterInput(),
      'pe_fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pe_imagen'           => new sfWidgetFormFilterInput(),
      'pe_email'            => new sfWidgetFormFilterInput(),
      'pe_usr'              => new sfWidgetFormFilterInput(),
      'pe_pwd'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pe_cedula'           => new sfValidatorPass(array('required' => false)),
      'pe_nombres'          => new sfValidatorPass(array('required' => false)),
      'pe_apellidos'        => new sfValidatorPass(array('required' => false)),
      'pe_fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'pe_imagen'           => new sfValidatorPass(array('required' => false)),
      'pe_email'            => new sfValidatorPass(array('required' => false)),
      'pe_usr'              => new sfValidatorPass(array('required' => false)),
      'pe_pwd'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PERSONA';
  }

  public function getFields()
  {
    return array(
      'pe_id'               => 'Number',
      'pe_cedula'           => 'Text',
      'pe_nombres'          => 'Text',
      'pe_apellidos'        => 'Text',
      'pe_fecha_nacimiento' => 'Date',
      'pe_imagen'           => 'Text',
      'pe_email'            => 'Text',
      'pe_usr'              => 'Text',
      'pe_pwd'              => 'Text',
    );
  }
}
