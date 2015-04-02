<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000090"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:37:06"
 */

/**
 * DmlMovimientos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlMovimientosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'ahorros'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlAhorros'), 'add_empty' => true)),
            'mo_fecha'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'mo_concepto'          => new sfWidgetFormFilterInput(),
            'mo_tipo'              => new sfWidgetFormFilterInput(),
            'mo_documento'         => new sfWidgetFormFilterInput(),
            'mo_oficina'           => new sfWidgetFormFilterInput(),
            'mo_monto'             => new sfWidgetFormFilterInput(),
            'mo_saldo'             => new sfWidgetFormFilterInput(),
            'mo_mini_detalle_json' => new sfWidgetFormFilterInput(),
            'mo_fecha_crea'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'mo_quien_crea'        => new sfWidgetFormFilterInput(),
            'mo_fecha_modifica'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'mo_quien_modifica'    => new sfWidgetFormFilterInput(),
            'mo_fecha_borra'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'mo_quien_borra'       => new sfWidgetFormFilterInput(),
            'mo_borrado_logico'    => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'ahorros'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlAhorros'), 'column' => 'id')),
            'mo_fecha'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'mo_concepto'          => new sfValidatorPass(array('required' => false)),
            'mo_tipo'              => new sfValidatorPass(array('required' => false)),
            'mo_documento'         => new sfValidatorPass(array('required' => false)),
            'mo_oficina'           => new sfValidatorPass(array('required' => false)),
            'mo_monto'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'mo_saldo'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'mo_mini_detalle_json' => new sfValidatorPass(array('required' => false)),
            'mo_fecha_crea'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'mo_quien_crea'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'mo_fecha_modifica'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'mo_quien_modifica'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'mo_fecha_borra'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'mo_quien_borra'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'mo_borrado_logico'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_movimientos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlMovimientos';
    }

    public function getFields() {
        return array(
                'id'                   => 'Number',
                'ahorros'              => 'ForeignKey',
                'mo_fecha'             => 'Date',
                'mo_concepto'          => 'Text',
                'mo_tipo'              => 'Text',
                'mo_documento'         => 'Text',
                'mo_oficina'           => 'Text',
                'mo_monto'             => 'Number',
                'mo_saldo'             => 'Number',
                'mo_mini_detalle_json' => 'Text',
                'mo_fecha_crea'        => 'Date',
                'mo_quien_crea'        => 'Number',
                'mo_fecha_modifica'    => 'Date',
                'mo_quien_modifica'    => 'Number',
                'mo_fecha_borra'       => 'Date',
                'mo_quien_borra'       => 'Number',
                'mo_borrado_logico'    => 'Number',
               );
    }

}