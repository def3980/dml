<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000000"
 * - Ultima vez que se actualizo la clase formulario : "yyyy-mm-dd_hh:mm:ss"
 */

/**
 * DmlPagosConsumosTarjetas clase base de formulario.
 *
 * @method DmlPagosConsumosTarjetas getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlPagosConsumosTarjetasForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => false)),
            'consumos_tarjetas' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlConsumosTarjetas'), 'add_empty' => false)),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'pagos'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'))),
            'consumos_tarjetas' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlConsumosTarjetas'))),
        ));

        $this->widgetSchema->setNameFormat('dml_pagos_consumos_tarjetas[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPagosConsumosTarjetas';
    }

}