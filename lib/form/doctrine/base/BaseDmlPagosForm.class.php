<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000094"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:22:58"
 */

/**
 * DmlPagos clase base de formulario.
 *
 * @method DmlPagos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlPagosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                      => new sfWidgetFormInputHidden(),
            'personas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'facturas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'add_empty' => false)),
            'tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'add_empty' => true)),
            'pa_iva'                  => new sfWidgetFormInputText(),
            'pa_ice'                  => new sfWidgetFormInputText(),
            'pa_comision'             => new sfWidgetFormInputText(),
            'pa_valor_parcial'        => new sfWidgetFormInputText(),
            'pa_fecha_crea'           => new sfWidgetFormDateTime(),
            'pa_quien_crea'           => new sfWidgetFormInputText(),
            'pa_fecha_modifica'       => new sfWidgetFormDateTime(),
            'pa_quien_modifica'       => new sfWidgetFormInputText(),
            'pa_fecha_borra'          => new sfWidgetFormDateTime(),
            'pa_quien_borra'          => new sfWidgetFormInputText(),
            'pa_borrado_logico'       => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'facturas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'))),
            'tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'required' => false)),
            'pa_iva'                  => new sfValidatorNumber(array('required' => false)),
            'pa_ice'                  => new sfValidatorNumber(array('required' => false)),
            'pa_comision'             => new sfValidatorNumber(array('required' => false)),
            'pa_valor_parcial'        => new sfValidatorNumber(array('required' => false)),
            'pa_fecha_crea'           => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_crea'           => new sfValidatorInteger(array('required' => false)),
            'pa_fecha_modifica'       => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_modifica'       => new sfValidatorInteger(array('required' => false)),
            'pa_fecha_borra'          => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_borra'          => new sfValidatorInteger(array('required' => false)),
            'pa_borrado_logico'       => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_pagos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPagos';
    }

}