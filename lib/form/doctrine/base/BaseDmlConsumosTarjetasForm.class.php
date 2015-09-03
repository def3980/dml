<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000003"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:22:57"
 */

/**
 * DmlConsumosTarjetas clase base de formulario.
 *
 * @method DmlConsumosTarjetas getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlConsumosTarjetasForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                      => new sfWidgetFormInputHidden(),
            'personas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'facturas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'add_empty' => false)),
            'tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'add_empty' => false)),
            'ct_iva'                  => new sfWidgetFormInputText(),
            'ct_ice'                  => new sfWidgetFormInputText(),
            'ct_comision'             => new sfWidgetFormInputText(),
            'ct_valor_parcial'        => new sfWidgetFormInputText(),
            'ct_fecha_crea'           => new sfWidgetFormDateTime(),
            'ct_quien_crea'           => new sfWidgetFormInputText(),
            'ct_fecha_modifica'       => new sfWidgetFormDateTime(),
            'ct_quien_modifica'       => new sfWidgetFormInputText(),
            'ct_fecha_borra'          => new sfWidgetFormDateTime(),
            'ct_quien_borra'          => new sfWidgetFormInputText(),
            'ct_borrado_logico'       => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'facturas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'))),
            'tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'))),
            'ct_iva'                  => new sfValidatorNumber(array('required' => false)),
            'ct_ice'                  => new sfValidatorNumber(array('required' => false)),
            'ct_comision'             => new sfValidatorNumber(array('required' => false)),
            'ct_valor_parcial'        => new sfValidatorNumber(array('required' => false)),
            'ct_fecha_crea'           => new sfValidatorDateTime(array('required' => false)),
            'ct_quien_crea'           => new sfValidatorInteger(array('required' => false)),
            'ct_fecha_modifica'       => new sfValidatorDateTime(array('required' => false)),
            'ct_quien_modifica'       => new sfValidatorInteger(array('required' => false)),
            'ct_fecha_borra'          => new sfValidatorDateTime(array('required' => false)),
            'ct_quien_borra'          => new sfValidatorInteger(array('required' => false)),
            'ct_borrado_logico'       => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_consumos_tarjetas[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlConsumosTarjetas';
    }

}