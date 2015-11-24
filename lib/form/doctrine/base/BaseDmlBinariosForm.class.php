<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000095"
 * - Ultima vez que se actualizo la clase formulario : "2015-11-24 17:03:30"
 */

/**
 * DmlBinarios clase base de formulario.
 *
 * @method DmlBinarios getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlBinariosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                      => new sfWidgetFormInputHidden(),
            'personas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'hijos'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlHijos'), 'add_empty' => true)),
            'tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'add_empty' => true)),
            'facturas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'add_empty' => true)),
            'bi_nombre_original'      => new sfWidgetFormInputText(),
            'bi_tamanio_bytes'        => new sfWidgetFormInputText(),
            'bi_binario'              => new sfWidgetFormTextarea(),
            'bi_mime_type'            => new sfWidgetFormInputText(),
            'bi_fecha_crea'           => new sfWidgetFormDateTime(),
            'bi_quien_crea'           => new sfWidgetFormInputText(),
            'bi_fecha_modifica'       => new sfWidgetFormDateTime(),
            'bi_quien_modifica'       => new sfWidgetFormInputText(),
            'bi_fecha_borra'          => new sfWidgetFormDateTime(),
            'bi_quien_borra'          => new sfWidgetFormInputText(),
            'bi_borrado_logico'       => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'required' => false)),
            'hijos'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlHijos'), 'required' => false)),
            'tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'required' => false)),
            'facturas'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'required' => false)),
            'bi_nombre_original'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'bi_tamanio_bytes'        => new sfValidatorNumber(array('required' => false)),
            'bi_binario'              => new sfValidatorString(array('required' => false)),
            'bi_mime_type'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
            'bi_fecha_crea'           => new sfValidatorDateTime(array('required' => false)),
            'bi_quien_crea'           => new sfValidatorInteger(array('required' => false)),
            'bi_fecha_modifica'       => new sfValidatorDateTime(array('required' => false)),
            'bi_quien_modifica'       => new sfValidatorInteger(array('required' => false)),
            'bi_fecha_borra'          => new sfValidatorDateTime(array('required' => false)),
            'bi_quien_borra'          => new sfValidatorInteger(array('required' => false)),
            'bi_borrado_logico'       => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_binarios[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBinarios';
    }

}