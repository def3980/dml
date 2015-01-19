<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:20"
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
            'id'                    => new sfWidgetFormInputHidden(),
            'personas'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'tipos_gastos'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposGastos'), 'add_empty' => false)),
            'pa_con_sin_factura'    => new sfWidgetFormInputText(),
            'pa_numero_factura'     => new sfWidgetFormInputText(),
            'pa_fecha'              => new sfWidgetFormDateTime(),
            'pa_detalle'            => new sfWidgetFormTextarea(),
            'pa_iva'                => new sfWidgetFormInputText(),
            'pa_ice'                => new sfWidgetFormInputText(),
            'pa_comision'           => new sfWidgetFormInputText(),
            'pa_valor_total'        => new sfWidgetFormInputText(),
            'pa_beneficiarios_json' => new sfWidgetFormTextarea(),
            'pa_fecha_crea'         => new sfWidgetFormDateTime(),
            'pa_quien_crea'         => new sfWidgetFormInputText(),
            'pa_fecha_modifica'     => new sfWidgetFormDateTime(),
            'pa_quien_modifica'     => new sfWidgetFormInputText(),
            'pa_fecha_borra'        => new sfWidgetFormDateTime(),
            'pa_quien_borra'        => new sfWidgetFormInputText(),
            'pa_borrado_logico'     => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'tipos_gastos'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposGastos'))),
            'pa_con_sin_factura'    => new sfValidatorInteger(array('required' => false)),
            'pa_numero_factura'     => new sfValidatorString(array('max_length' => 17, 'required' => false)),
            'pa_fecha'              => new sfValidatorDateTime(array('required' => false)),
            'pa_detalle'            => new sfValidatorString(array('required' => false)),
            'pa_iva'                => new sfValidatorNumber(array('required' => false)),
            'pa_ice'                => new sfValidatorNumber(array('required' => false)),
            'pa_comision'           => new sfValidatorNumber(array('required' => false)),
            'pa_valor_total'        => new sfValidatorNumber(array('required' => false)),
            'pa_beneficiarios_json' => new sfValidatorString(array('required' => false)),
            'pa_fecha_crea'         => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_crea'         => new sfValidatorInteger(array('required' => false)),
            'pa_fecha_modifica'     => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_modifica'     => new sfValidatorInteger(array('required' => false)),
            'pa_fecha_borra'        => new sfValidatorDateTime(array('required' => false)),
            'pa_quien_borra'        => new sfValidatorInteger(array('required' => false)),
            'pa_borrado_logico'     => new sfValidatorInteger(array('required' => false)),
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