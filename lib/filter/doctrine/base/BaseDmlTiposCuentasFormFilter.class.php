<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000090"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:37:08"
 */

/**
 * DmlTiposCuentas clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposCuentasFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'tc_nombre'         => new sfWidgetFormFilterInput(),
            'tc_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tc_quien_crea'     => new sfWidgetFormFilterInput(),
            'tc_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tc_quien_modifica' => new sfWidgetFormFilterInput(),
            'tc_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tc_quien_borra'    => new sfWidgetFormFilterInput(),
            'tc_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'tc_nombre'         => new sfValidatorPass(array('required' => false)),
            'tc_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tc_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tc_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tc_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tc_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tc_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tc_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_cuentas_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposCuentas';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'tc_nombre'         => 'Text',
                'tc_fecha_crea'     => 'Date',
                'tc_quien_crea'     => 'Number',
                'tc_fecha_modifica' => 'Date',
                'tc_quien_modifica' => 'Number',
                'tc_fecha_borra'    => 'Date',
                'tc_quien_borra'    => 'Number',
                'tc_borrado_logico' => 'Number',
               );
    }

}