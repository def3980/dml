<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000090"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:36:53"
 */

/**
 * DmlRemuneraciones clase base de formulario.
 *
 * @method DmlRemuneraciones getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlRemuneracionesForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            're_nombre'         => new sfWidgetFormInputText(),
            're_alias'          => new sfWidgetFormInputText(),
            're_valor'          => new sfWidgetFormInputText(),
            're_fecha_crea'     => new sfWidgetFormDateTime(),
            're_quien_crea'     => new sfWidgetFormInputText(),
            're_fecha_modifica' => new sfWidgetFormDateTime(),
            're_quien_modifica' => new sfWidgetFormInputText(),
            're_fecha_borra'    => new sfWidgetFormDateTime(),
            're_quien_borra'    => new sfWidgetFormInputText(),
            're_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            're_nombre'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            're_alias'          => new sfValidatorString(array('max_length' => 7, 'required' => false)),
            're_valor'          => new sfValidatorNumber(array('required' => false)),
            're_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            're_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            're_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            're_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            're_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            're_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            're_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_remuneraciones[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlRemuneraciones';
    }

}