<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000091"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:41:25"
 */

/**
 * DmlPagos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlPagosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'personas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'facturas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'add_empty' => true)),
            'tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'add_empty' => true)),
            'pa_iva'                  => new sfWidgetFormFilterInput(),
            'pa_ice'                  => new sfWidgetFormFilterInput(),
            'pa_comision'             => new sfWidgetFormFilterInput(),
            'pa_valor_parcial'        => new sfWidgetFormFilterInput(),
            'pa_fecha_crea'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pa_quien_crea'           => new sfWidgetFormFilterInput(),
            'pa_fecha_modifica'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pa_quien_modifica'       => new sfWidgetFormFilterInput(),
            'pa_fecha_borra'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pa_quien_borra'          => new sfWidgetFormFilterInput(),
            'pa_borrado_logico'       => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'personas'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'facturas'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlFacturas'), 'column' => 'id')),
            'tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'column' => 'id')),
            'pa_iva'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'pa_ice'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'pa_comision'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'pa_valor_parcial'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'pa_fecha_crea'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pa_quien_crea'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pa_fecha_modifica'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pa_quien_modifica'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pa_fecha_borra'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pa_quien_borra'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pa_borrado_logico'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_pagos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPagos';
    }

    public function getFields() {
        return array(
                'id'                      => 'Number',
                'personas'                => 'ForeignKey',
                'facturas'                => 'ForeignKey',
                'tarjetas_credito_debito' => 'ForeignKey',
                'pa_iva'                  => 'Number',
                'pa_ice'                  => 'Number',
                'pa_comision'             => 'Number',
                'pa_valor_parcial'        => 'Number',
                'pa_fecha_crea'           => 'Date',
                'pa_quien_crea'           => 'Number',
                'pa_fecha_modifica'       => 'Date',
                'pa_quien_modifica'       => 'Number',
                'pa_fecha_borra'          => 'Date',
                'pa_quien_borra'          => 'Number',
                'pa_borrado_logico'       => 'Number',
               );
    }

}