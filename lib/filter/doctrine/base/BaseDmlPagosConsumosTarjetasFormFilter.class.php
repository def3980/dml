<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000003"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:23:11"
 */

/**
 * DmlPagosConsumosTarjetas clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlPagosConsumosTarjetasFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => true)),
            'consumos_tarjetas' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlConsumosTarjetas'), 'add_empty' => true)),
        ));

        $this->setValidators(array(
            'pagos'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPagos'), 'column' => 'id')),
            'consumos_tarjetas' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlConsumosTarjetas'), 'column' => 'id')),
        ));

        $this->widgetSchema->setNameFormat('dml_pagos_consumos_tarjetas_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPagosConsumosTarjetas';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'pagos'             => 'ForeignKey',
                'consumos_tarjetas' => 'ForeignKey',
               );
    }

}