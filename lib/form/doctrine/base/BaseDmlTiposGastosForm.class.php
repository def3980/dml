<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000094"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:23:00"
 */

/**
 * DmlTiposGastos clase base de formulario.
 *
 * @method DmlTiposGastos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposGastosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'tg_orden'          => new sfWidgetFormInputText(),
            'tg_nombre'         => new sfWidgetFormInputText(),
            'tg_fecha_crea'     => new sfWidgetFormDateTime(),
            'tg_quien_crea'     => new sfWidgetFormInputText(),
            'tg_fecha_modifica' => new sfWidgetFormDateTime(),
            'tg_quien_modifica' => new sfWidgetFormInputText(),
            'tg_fecha_borra'    => new sfWidgetFormDateTime(),
            'tg_quien_borra'    => new sfWidgetFormInputText(),
            'tg_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'tg_orden'          => new sfValidatorInteger(array('required' => false)),
            'tg_nombre'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'tg_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'tg_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'tg_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'tg_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'tg_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'tg_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'tg_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_gastos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposGastos';
    }

}