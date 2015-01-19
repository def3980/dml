<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000082"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-19 09:46:26"
 */

/**
 * DmlMovimientos clase base de formulario.
 *
 * @method DmlMovimientos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlMovimientosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                   => new sfWidgetFormInputHidden(),
            'ahorros'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlAhorros'), 'add_empty' => false)),
            'mo_fecha'             => new sfWidgetFormDate(),
            'mo_concepto'          => new sfWidgetFormInputText(),
            'mo_tipo'              => new sfWidgetFormInputText(),
            'mo_documento'         => new sfWidgetFormInputText(),
            'mo_oficina'           => new sfWidgetFormInputText(),
            'mo_monto'             => new sfWidgetFormInputText(),
            'mo_saldo'             => new sfWidgetFormInputText(),
            'mo_mini_detalle_json' => new sfWidgetFormTextarea(),
            'mo_fecha_crea'        => new sfWidgetFormDateTime(),
            'mo_quien_crea'        => new sfWidgetFormInputText(),
            'mo_fecha_modifica'    => new sfWidgetFormDateTime(),
            'mo_quien_modifica'    => new sfWidgetFormInputText(),
            'mo_fecha_borra'       => new sfWidgetFormDateTime(),
            'mo_quien_borra'       => new sfWidgetFormInputText(),
            'mo_borrado_logico'    => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'ahorros'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlAhorros'))),
            'mo_fecha'             => new sfValidatorDate(array('required' => false)),
            'mo_concepto'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'mo_tipo'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
            'mo_documento'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
            'mo_oficina'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'mo_monto'             => new sfValidatorNumber(array('required' => false)),
            'mo_saldo'             => new sfValidatorNumber(array('required' => false)),
            'mo_mini_detalle_json' => new sfValidatorString(array('required' => false)),
            'mo_fecha_crea'        => new sfValidatorDateTime(array('required' => false)),
            'mo_quien_crea'        => new sfValidatorInteger(array('required' => false)),
            'mo_fecha_modifica'    => new sfValidatorDateTime(array('required' => false)),
            'mo_quien_modifica'    => new sfValidatorInteger(array('required' => false)),
            'mo_fecha_borra'       => new sfValidatorDateTime(array('required' => false)),
            'mo_quien_borra'       => new sfValidatorInteger(array('required' => false)),
            'mo_borrado_logico'    => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_movimientos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlMovimientos';
    }

}