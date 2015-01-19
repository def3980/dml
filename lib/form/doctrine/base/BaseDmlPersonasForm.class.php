<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:21"
 */

/**
 * DmlPersonas clase base de formulario.
 *
 * @method DmlPersonas getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlPersonasForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                  => new sfWidgetFormInputHidden(),
            'pe_cedula'           => new sfWidgetFormInputText(),
            'pe_nombres'          => new sfWidgetFormInputText(),
            'pe_apellidos'        => new sfWidgetFormInputText(),
            'pe_fecha_nacimiento' => new sfWidgetFormDate(),
            'pe_email'            => new sfWidgetFormInputText(),
            'pe_salt'             => new sfWidgetFormInputText(),
            'pe_password'         => new sfWidgetFormInputText(),
            'pe_online'           => new sfWidgetFormInputText(),
            'pe_inicio_sesion'    => new sfWidgetFormDateTime(),
            'pe_fin_sesion'       => new sfWidgetFormDateTime(),
            'pe_duracion_sesion'  => new sfWidgetFormInputText(),
            'pe_fecha_crea'       => new sfWidgetFormDateTime(),
            'pe_quien_crea'       => new sfWidgetFormInputText(),
            'pe_fecha_modifica'   => new sfWidgetFormDateTime(),
            'pe_quien_modifica'   => new sfWidgetFormInputText(),
            'pe_fecha_borra'      => new sfWidgetFormDateTime(),
            'pe_quien_borra'      => new sfWidgetFormInputText(),
            'pe_borrado_logico'   => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'pe_cedula'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
            'pe_nombres'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'pe_apellidos'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'pe_fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
            'pe_email'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'pe_salt'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'pe_password'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'pe_online'           => new sfValidatorInteger(array('required' => false)),
            'pe_inicio_sesion'    => new sfValidatorDateTime(array('required' => false)),
            'pe_fin_sesion'       => new sfValidatorDateTime(array('required' => false)),
            'pe_duracion_sesion'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
            'pe_fecha_crea'       => new sfValidatorDateTime(array('required' => false)),
            'pe_quien_crea'       => new sfValidatorInteger(array('required' => false)),
            'pe_fecha_modifica'   => new sfValidatorDateTime(array('required' => false)),
            'pe_quien_modifica'   => new sfValidatorInteger(array('required' => false)),
            'pe_fecha_borra'      => new sfValidatorDateTime(array('required' => false)),
            'pe_quien_borra'      => new sfValidatorInteger(array('required' => false)),
            'pe_borrado_logico'   => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_personas[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPersonas';
    }

}