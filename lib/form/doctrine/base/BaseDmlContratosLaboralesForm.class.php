<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000091"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:39:55"
 */

/**
 * DmlContratosLaborales clase base de formulario.
 *
 * @method DmlContratosLaborales getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlContratosLaboralesForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                        => new sfWidgetFormInputHidden(),
            'personas'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'entidades'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'), 'add_empty' => false)),
            'remuneraciones'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlRemuneraciones'), 'add_empty' => false)),
            'cl_fecha_ingreso'          => new sfWidgetFormDate(),
            'cl_fecha_salida'           => new sfWidgetFormDate(),
            'cl_motivo_salida'          => new sfWidgetFormTextarea(),
            'cl_actividad_desarrollada' => new sfWidgetFormInputText(),
            'cl_activo'                 => new sfWidgetFormInputText(),
            'cl_fecha_crea'             => new sfWidgetFormDateTime(),
            'cl_quien_crea'             => new sfWidgetFormInputText(),
            'cl_fecha_modifica'         => new sfWidgetFormDateTime(),
            'cl_quien_modifica'         => new sfWidgetFormInputText(),
            'cl_fecha_borra'            => new sfWidgetFormDateTime(),
            'cl_quien_borra'            => new sfWidgetFormInputText(),
            'cl_borrado_logico'         => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'entidades'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'))),
            'remuneraciones'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlRemuneraciones'))),
            'cl_fecha_ingreso'          => new sfValidatorDate(array('required' => false)),
            'cl_fecha_salida'           => new sfValidatorDate(array('required' => false)),
            'cl_motivo_salida'          => new sfValidatorString(array('required' => false)),
            'cl_actividad_desarrollada' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'cl_activo'                 => new sfValidatorInteger(array('required' => false)),
            'cl_fecha_crea'             => new sfValidatorDateTime(array('required' => false)),
            'cl_quien_crea'             => new sfValidatorInteger(array('required' => false)),
            'cl_fecha_modifica'         => new sfValidatorDateTime(array('required' => false)),
            'cl_quien_modifica'         => new sfValidatorInteger(array('required' => false)),
            'cl_fecha_borra'            => new sfValidatorDateTime(array('required' => false)),
            'cl_quien_borra'            => new sfValidatorInteger(array('required' => false)),
            'cl_borrado_logico'         => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_contratos_laborales[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlContratosLaborales';
    }

}