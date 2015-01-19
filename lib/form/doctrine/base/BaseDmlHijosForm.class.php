<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:20"
 */

/**
 * DmlHijos clase base de formulario.
 *
 * @method DmlHijos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlHijosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                  => new sfWidgetFormInputHidden(),
            'personas'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'hi_fecha_nacimiento' => new sfWidgetFormDate(),
            'hi_nombres'          => new sfWidgetFormInputText(),
            'hi_apellidos'        => new sfWidgetFormInputText(),
            'hi_fecha_crea'       => new sfWidgetFormDateTime(),
            'hi_quien_crea'       => new sfWidgetFormInputText(),
            'hi_fecha_modifica'   => new sfWidgetFormDateTime(),
            'hi_quien_modifica'   => new sfWidgetFormInputText(),
            'hi_fecha_borra'      => new sfWidgetFormDateTime(),
            'hi_quien_borra'      => new sfWidgetFormInputText(),
            'hi_borrado_logico'   => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'hi_fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
            'hi_nombres'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'hi_apellidos'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'hi_fecha_crea'       => new sfValidatorDateTime(array('required' => false)),
            'hi_quien_crea'       => new sfValidatorInteger(array('required' => false)),
            'hi_fecha_modifica'   => new sfValidatorDateTime(array('required' => false)),
            'hi_quien_modifica'   => new sfValidatorInteger(array('required' => false)),
            'hi_fecha_borra'      => new sfValidatorDateTime(array('required' => false)),
            'hi_quien_borra'      => new sfValidatorInteger(array('required' => false)),
            'hi_borrado_logico'   => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_hijos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlHijos';
    }

}