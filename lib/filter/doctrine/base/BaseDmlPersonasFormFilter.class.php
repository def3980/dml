<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:23"
 */

/**
 * DmlPersonas clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlPersonasFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'pe_cedula'           => new sfWidgetFormFilterInput(),
            'pe_nombres'          => new sfWidgetFormFilterInput(),
            'pe_apellidos'        => new sfWidgetFormFilterInput(),
            'pe_fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_email'            => new sfWidgetFormFilterInput(),
            'pe_salt'             => new sfWidgetFormFilterInput(),
            'pe_password'         => new sfWidgetFormFilterInput(),
            'pe_online'           => new sfWidgetFormFilterInput(),
            'pe_inicio_sesion'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_fin_sesion'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_duracion_sesion'  => new sfWidgetFormFilterInput(),
            'pe_fecha_crea'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_quien_crea'       => new sfWidgetFormFilterInput(),
            'pe_fecha_modifica'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_quien_modifica'   => new sfWidgetFormFilterInput(),
            'pe_fecha_borra'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pe_quien_borra'      => new sfWidgetFormFilterInput(),
            'pe_borrado_logico'   => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'pe_cedula'           => new sfValidatorPass(array('required' => false)),
            'pe_nombres'          => new sfValidatorPass(array('required' => false)),
            'pe_apellidos'        => new sfValidatorPass(array('required' => false)),
            'pe_fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'pe_email'            => new sfValidatorPass(array('required' => false)),
            'pe_salt'             => new sfValidatorPass(array('required' => false)),
            'pe_password'         => new sfValidatorPass(array('required' => false)),
            'pe_online'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pe_inicio_sesion'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pe_fin_sesion'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pe_duracion_sesion'  => new sfValidatorPass(array('required' => false)),
            'pe_fecha_crea'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pe_quien_crea'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pe_fecha_modifica'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pe_quien_modifica'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pe_fecha_borra'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pe_quien_borra'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pe_borrado_logico'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_personas_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPersonas';
    }

    public function getFields() {
        return array(
                'id'                  => 'Number',
                'pe_cedula'           => 'Text',
                'pe_nombres'          => 'Text',
                'pe_apellidos'        => 'Text',
                'pe_fecha_nacimiento' => 'Date',
                'pe_email'            => 'Text',
                'pe_salt'             => 'Text',
                'pe_password'         => 'Text',
                'pe_online'           => 'Number',
                'pe_inicio_sesion'    => 'Date',
                'pe_fin_sesion'       => 'Date',
                'pe_duracion_sesion'  => 'Text',
                'pe_fecha_crea'       => 'Date',
                'pe_quien_crea'       => 'Number',
                'pe_fecha_modifica'   => 'Date',
                'pe_quien_modifica'   => 'Number',
                'pe_fecha_borra'      => 'Date',
                'pe_quien_borra'      => 'Number',
                'pe_borrado_logico'   => 'Number',
               );
    }

}