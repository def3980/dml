<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000090"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:36:51"
 */

/**
 * DmlDetallePagos clase base de formulario.
 *
 * @method DmlDetallePagos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlDetallePagosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'prestamos'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPrestamos'), 'add_empty' => false)),
            'dp_fecha'          => new sfWidgetFormDate(),
            'dp_valor'          => new sfWidgetFormInputText(),
            'dp_fecha_crea'     => new sfWidgetFormDateTime(),
            'dp_quien_crea'     => new sfWidgetFormInputText(),
            'dp_fecha_modifica' => new sfWidgetFormDateTime(),
            'dp_quien_modifica' => new sfWidgetFormInputText(),
            'dp_fecha_borra'    => new sfWidgetFormDateTime(),
            'dp_quien_borra'    => new sfWidgetFormInputText(),
            'dp_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'prestamos'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPrestamos'))),
            'dp_fecha'          => new sfValidatorDate(array('required' => false)),
            'dp_valor'          => new sfValidatorNumber(array('required' => false)),
            'dp_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'dp_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'dp_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'dp_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'dp_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'dp_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'dp_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_detalle_pagos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlDetallePagos';
    }

}