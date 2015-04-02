<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000090"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:37:04"
 */

/**
 * DmlDetallePagos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlDetallePagosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'prestamos'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPrestamos'), 'add_empty' => true)),
            'dp_fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'dp_valor'          => new sfWidgetFormFilterInput(),
            'dp_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'dp_quien_crea'     => new sfWidgetFormFilterInput(),
            'dp_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'dp_quien_modifica' => new sfWidgetFormFilterInput(),
            'dp_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'dp_quien_borra'    => new sfWidgetFormFilterInput(),
            'dp_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'prestamos'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPrestamos'), 'column' => 'id')),
            'dp_fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'dp_valor'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'dp_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'dp_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'dp_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'dp_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'dp_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'dp_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'dp_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_detalle_pagos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlDetallePagos';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'prestamos'         => 'ForeignKey',
                'dp_fecha'          => 'Date',
                'dp_valor'          => 'Number',
                'dp_fecha_crea'     => 'Date',
                'dp_quien_crea'     => 'Number',
                'dp_fecha_modifica' => 'Date',
                'dp_quien_modifica' => 'Number',
                'dp_fecha_borra'    => 'Date',
                'dp_quien_borra'    => 'Number',
                'dp_borrado_logico' => 'Number',
               );
    }

}