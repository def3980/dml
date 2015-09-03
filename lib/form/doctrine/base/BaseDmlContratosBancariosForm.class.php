<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000094"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:22:57"
 */

/**
 * DmlContratosBancarios clase base de formulario.
 *
 * @method DmlContratosBancarios getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlContratosBancariosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'personas'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'entidades'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'), 'add_empty' => false)),
            'cb_fecha_contrato' => new sfWidgetFormDate(),
            'cb_fecha_crea'     => new sfWidgetFormDateTime(),
            'cb_quien_crea'     => new sfWidgetFormInputText(),
            'cb_fecha_modifica' => new sfWidgetFormDateTime(),
            'cb_quien_modifica' => new sfWidgetFormInputText(),
            'cb_fecha_borra'    => new sfWidgetFormDateTime(),
            'cb_quien_borra'    => new sfWidgetFormInputText(),
            'cb_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'entidades'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'))),
            'cb_fecha_contrato' => new sfValidatorDate(array('required' => false)),
            'cb_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'cb_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'cb_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'cb_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'cb_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'cb_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'cb_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_contratos_bancarios[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlContratosBancarios';
    }

}