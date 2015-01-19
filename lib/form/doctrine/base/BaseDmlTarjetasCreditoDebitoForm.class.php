<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:21"
 */

/**
 * DmlTarjetasCreditoDebito clase base de formulario.
 *
 * @method DmlTarjetasCreditoDebito getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlTarjetasCreditoDebitoForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                            => new sfWidgetFormInputHidden(),
            'contratos_bancarios'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => false)),
            'tipos_tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposTarjetasCreditoDebito'), 'add_empty' => false)),
            'tcd_fecha_emision'             => new sfWidgetFormDate(),
            'tcd_fecha_expiracion'          => new sfWidgetFormDate(),
            'tcd_numero'                    => new sfWidgetFormInputText(),
            'tcd_cvv'                       => new sfWidgetFormInputText(),
            'tcd_estado'                    => new sfWidgetFormInputText(),
            'tcd_fecha_crea'                => new sfWidgetFormDateTime(),
            'tcd_quien_crea'                => new sfWidgetFormInputText(),
            'tcd_fecha_modifica'            => new sfWidgetFormDateTime(),
            'tcd_quien_modifica'            => new sfWidgetFormInputText(),
            'tcd_fecha_borra'               => new sfWidgetFormDateTime(),
            'tcd_quien_borra'               => new sfWidgetFormInputText(),
            'tcd_borrado_logico'            => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'contratos_bancarios'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'))),
            'tipos_tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposTarjetasCreditoDebito'))),
            'tcd_fecha_emision'             => new sfValidatorDate(array('required' => false)),
            'tcd_fecha_expiracion'          => new sfValidatorDate(array('required' => false)),
            'tcd_numero'                    => new sfValidatorString(array('max_length' => 16, 'required' => false)),
            'tcd_cvv'                       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
            'tcd_estado'                    => new sfValidatorInteger(array('required' => false)),
            'tcd_fecha_crea'                => new sfValidatorDateTime(array('required' => false)),
            'tcd_quien_crea'                => new sfValidatorInteger(array('required' => false)),
            'tcd_fecha_modifica'            => new sfValidatorDateTime(array('required' => false)),
            'tcd_quien_modifica'            => new sfValidatorInteger(array('required' => false)),
            'tcd_fecha_borra'               => new sfValidatorDateTime(array('required' => false)),
            'tcd_quien_borra'               => new sfValidatorInteger(array('required' => false)),
            'tcd_borrado_logico'            => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_tarjetas_credito_debito[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTarjetasCreditoDebito';
    }

}