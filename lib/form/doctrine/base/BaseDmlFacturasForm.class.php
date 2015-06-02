<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000006"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-02 12:56:59"
 */

/**
 * DmlFacturas clase base de formulario.
 *
 * @method DmlFacturas getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlFacturasForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                    => new sfWidgetFormInputHidden(),
            'tipos_gastos'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposGastos'), 'add_empty' => false)),
            'fa_con_sin_factura'    => new sfWidgetFormInputText(),
            'fa_numero_factura'     => new sfWidgetFormInputText(),
            'fa_fecha'              => new sfWidgetFormDateTime(),
            'fa_detalle'            => new sfWidgetFormTextarea(),
            'fa_beneficiarios_json' => new sfWidgetFormTextarea(),
            'fa_valor_total'        => new sfWidgetFormInputText(),
            'fa_fecha_crea'         => new sfWidgetFormDateTime(),
            'fa_quien_crea'         => new sfWidgetFormInputText(),
            'fa_fecha_modifica'     => new sfWidgetFormDateTime(),
            'fa_quien_modifica'     => new sfWidgetFormInputText(),
            'fa_fecha_borra'        => new sfWidgetFormDateTime(),
            'fa_quien_borra'        => new sfWidgetFormInputText(),
            'fa_borrado_logico'     => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'tipos_gastos'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposGastos'))),
            'fa_con_sin_factura'    => new sfValidatorInteger(array('required' => false)),
            'fa_numero_factura'     => new sfValidatorString(array('max_length' => 17, 'required' => false)),
            'fa_fecha'              => new sfValidatorDateTime(array('required' => false)),
            'fa_detalle'            => new sfValidatorString(array('required' => false)),
            'fa_beneficiarios_json' => new sfValidatorString(array('required' => false)),
            'fa_valor_total'        => new sfValidatorNumber(array('required' => false)),
            'fa_fecha_crea'         => new sfValidatorDateTime(array('required' => false)),
            'fa_quien_crea'         => new sfValidatorInteger(array('required' => false)),
            'fa_fecha_modifica'     => new sfValidatorDateTime(array('required' => false)),
            'fa_quien_modifica'     => new sfValidatorInteger(array('required' => false)),
            'fa_fecha_borra'        => new sfValidatorDateTime(array('required' => false)),
            'fa_quien_borra'        => new sfValidatorInteger(array('required' => false)),
            'fa_borrado_logico'     => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_facturas[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlFacturas';
    }

}