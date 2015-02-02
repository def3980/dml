<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000084"
 * - Ultima vez que se actualizo la clase formulario : "2015-02-02 17:15:07"
 */

/**
 * DmlAhorros clase base de formulario.
 *
 * @method DmlAhorros getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlAhorrosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                   => new sfWidgetFormInputHidden(),
            'contratos_bancarios'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => false)),
            'tipos_cuentas'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposCuentas'), 'add_empty' => false)),
            'ah_fecha_creacion'    => new sfWidgetFormDate(),
            'ah_numero_cuenta'     => new sfWidgetFormInputText(),
            'ah_fecha_cancelacion' => new sfWidgetFormDate(),
            'ah_estado'            => new sfWidgetFormInputText(),
            'ah_fecha_crea'        => new sfWidgetFormDateTime(),
            'ah_quien_crea'        => new sfWidgetFormInputText(),
            'ah_fecha_modifica'    => new sfWidgetFormDateTime(),
            'ah_quien_modifica'    => new sfWidgetFormInputText(),
            'ah_fecha_borra'       => new sfWidgetFormDateTime(),
            'ah_quien_borra'       => new sfWidgetFormInputText(),
            'ah_borrado_logico'    => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'contratos_bancarios'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'))),
            'tipos_cuentas'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposCuentas'))),
            'ah_fecha_creacion'    => new sfValidatorDate(array('required' => false)),
            'ah_numero_cuenta'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
            'ah_fecha_cancelacion' => new sfValidatorDate(array('required' => false)),
            'ah_estado'            => new sfValidatorInteger(array('required' => false)),
            'ah_fecha_crea'        => new sfValidatorDateTime(array('required' => false)),
            'ah_quien_crea'        => new sfValidatorInteger(array('required' => false)),
            'ah_fecha_modifica'    => new sfValidatorDateTime(array('required' => false)),
            'ah_quien_modifica'    => new sfValidatorInteger(array('required' => false)),
            'ah_fecha_borra'       => new sfValidatorDateTime(array('required' => false)),
            'ah_quien_borra'       => new sfValidatorInteger(array('required' => false)),
            'ah_borrado_logico'    => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_ahorros[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlAhorros';
    }

}