<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000083"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-26 15:01:39"
 */

/**
 * DmlTiposTarjetasCreditoDebito clase base de formulario.
 *
 * @method DmlTiposTarjetasCreditoDebito getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposTarjetasCreditoDebitoForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                  => new sfWidgetFormInputHidden(),
            'ttcd_nombre'         => new sfWidgetFormInputText(),
            'ttcd_fecha_crea'     => new sfWidgetFormDateTime(),
            'ttcd_quien_crea'     => new sfWidgetFormInputText(),
            'ttcd_fecha_modifica' => new sfWidgetFormDateTime(),
            'ttcd_quien_modifica' => new sfWidgetFormInputText(),
            'ttcd_fecha_borra'    => new sfWidgetFormDateTime(),
            'ttcd_quien_borra'    => new sfWidgetFormInputText(),
            'ttcd_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'ttcd_nombre'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'ttcd_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'ttcd_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'ttcd_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'ttcd_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'ttcd_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'ttcd_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'ttcd_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_tarjetas_credito_debito[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposTarjetasCreditoDebito';
    }

}