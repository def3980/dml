<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000091"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:39:58"
 */

/**
 * DmlTiposCuentas clase base de formulario.
 *
 * @method DmlTiposCuentas getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposCuentasForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'tc_nombre'         => new sfWidgetFormInputText(),
            'tc_fecha_crea'     => new sfWidgetFormDateTime(),
            'tc_quien_crea'     => new sfWidgetFormInputText(),
            'tc_fecha_modifica' => new sfWidgetFormDateTime(),
            'tc_quien_modifica' => new sfWidgetFormInputText(),
            'tc_fecha_borra'    => new sfWidgetFormDateTime(),
            'tc_quien_borra'    => new sfWidgetFormInputText(),
            'tc_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'tc_nombre'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'tc_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'tc_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'tc_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'tc_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'tc_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'tc_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'tc_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_cuentas[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposCuentas';
    }

}