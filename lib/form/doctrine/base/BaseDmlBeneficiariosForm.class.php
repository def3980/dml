<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000013"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:39:54"
 */

/**
 * DmlBeneficiarios clase base de formulario.
 *
 * @method DmlBeneficiarios getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlBeneficiariosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                         => new sfWidgetFormInputHidden(),
            'be_orden'                   => new sfWidgetFormInputText(),
            'be_nombres_identificativos' => new sfWidgetFormInputText(),
            'be_fecha_crea'              => new sfWidgetFormDateTime(),
            'be_quien_crea'              => new sfWidgetFormInputText(),
            'be_fecha_modifica'          => new sfWidgetFormDateTime(),
            'be_quien_modifica'          => new sfWidgetFormInputText(),
            'be_fecha_borra'             => new sfWidgetFormDateTime(),
            'be_quien_borra'             => new sfWidgetFormInputText(),
            'be_borrado_logico'          => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'be_orden'                   => new sfValidatorInteger(array('required' => false)),
            'be_nombres_identificativos' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'be_fecha_crea'              => new sfValidatorDateTime(array('required' => false)),
            'be_quien_crea'              => new sfValidatorInteger(array('required' => false)),
            'be_fecha_modifica'          => new sfValidatorDateTime(array('required' => false)),
            'be_quien_modifica'          => new sfValidatorInteger(array('required' => false)),
            'be_fecha_borra'             => new sfValidatorDateTime(array('required' => false)),
            'be_quien_borra'             => new sfValidatorInteger(array('required' => false)),
            'be_borrado_logico'          => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_beneficiarios[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBeneficiarios';
    }

}