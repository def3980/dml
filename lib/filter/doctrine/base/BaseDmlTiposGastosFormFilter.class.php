<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000083"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-26 15:01:46"
 */

/**
 * DmlTiposGastos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlTiposGastosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'tg_nombre'         => new sfWidgetFormFilterInput(),
            'tg_alias'          => new sfWidgetFormFilterInput(),
            'tg_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tg_quien_crea'     => new sfWidgetFormFilterInput(),
            'tg_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tg_quien_modifica' => new sfWidgetFormFilterInput(),
            'tg_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tg_quien_borra'    => new sfWidgetFormFilterInput(),
            'tg_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'tg_nombre'         => new sfValidatorPass(array('required' => false)),
            'tg_alias'          => new sfValidatorPass(array('required' => false)),
            'tg_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tg_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tg_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tg_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tg_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tg_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tg_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_tipos_gastos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTiposGastos';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'tg_nombre'         => 'Text',
                'tg_alias'          => 'Text',
                'tg_fecha_crea'     => 'Date',
                'tg_quien_crea'     => 'Number',
                'tg_fecha_modifica' => 'Date',
                'tg_quien_modifica' => 'Number',
                'tg_fecha_borra'    => 'Date',
                'tg_quien_borra'    => 'Number',
                'tg_borrado_logico' => 'Number',
               );
    }

}