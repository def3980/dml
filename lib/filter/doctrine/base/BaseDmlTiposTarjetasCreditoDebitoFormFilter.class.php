<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000091"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:41:27"
 */

/**
 * DmlTiposTarjetasCreditoDebito clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposTarjetasCreditoDebitoFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'ttcd_nombre'         => new sfWidgetFormFilterInput(),
            'ttcd_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ttcd_quien_crea'     => new sfWidgetFormFilterInput(),
            'ttcd_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ttcd_quien_modifica' => new sfWidgetFormFilterInput(),
            'ttcd_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ttcd_quien_borra'    => new sfWidgetFormFilterInput(),
            'ttcd_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'ttcd_nombre'         => new sfValidatorPass(array('required' => false)),
            'ttcd_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ttcd_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ttcd_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ttcd_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ttcd_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ttcd_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ttcd_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_tarjetas_credito_debito_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposTarjetasCreditoDebito';
    }

    public function getFields() {
        return array(
                'id'                  => 'Number',
                'ttcd_nombre'         => 'Text',
                'ttcd_fecha_crea'     => 'Date',
                'ttcd_quien_crea'     => 'Number',
                'ttcd_fecha_modifica' => 'Date',
                'ttcd_quien_modifica' => 'Number',
                'ttcd_fecha_borra'    => 'Date',
                'ttcd_quien_borra'    => 'Number',
                'ttcd_borrado_logico' => 'Number',
               );
    }

}