<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000083"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-26 15:01:42"
 */

/**
 * DmlContratosLaborales clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlContratosLaboralesFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'dml_personas'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'dml_entidades'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'), 'add_empty' => true)),
            'dml_remuneraciones'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlRemuneraciones'), 'add_empty' => true)),
            'cl_fecha_ingreso'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cl_fecha_salida'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cl_motivo_salida'          => new sfWidgetFormFilterInput(),
            'cl_actividad_desarrollada' => new sfWidgetFormFilterInput(),
            'cl_activo'                 => new sfWidgetFormFilterInput(),
            'cl_fecha_crea'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cl_quien_crea'             => new sfWidgetFormFilterInput(),
            'cl_fecha_modifica'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cl_quien_modifica'         => new sfWidgetFormFilterInput(),
            'cl_fecha_borra'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cl_quien_borra'            => new sfWidgetFormFilterInput(),
            'cl_borrado_logico'         => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'dml_personas'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'dml_entidades'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlEntidades'), 'column' => 'id')),
            'dml_remuneraciones'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlRemuneraciones'), 'column' => 'id')),
            'cl_fecha_ingreso'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'cl_fecha_salida'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'cl_motivo_salida'          => new sfValidatorPass(array('required' => false)),
            'cl_actividad_desarrollada' => new sfValidatorPass(array('required' => false)),
            'cl_activo'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cl_fecha_crea'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cl_quien_crea'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cl_fecha_modifica'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cl_quien_modifica'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cl_fecha_borra'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cl_quien_borra'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cl_borrado_logico'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_contratos_laborales_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlContratosLaborales';
    }

    public function getFields() {
        return array(
                'id'                        => 'Number',
                'dml_personas'              => 'ForeignKey',
                'dml_entidades'             => 'ForeignKey',
                'dml_remuneraciones'        => 'ForeignKey',
                'cl_fecha_ingreso'          => 'Date',
                'cl_fecha_salida'           => 'Date',
                'cl_motivo_salida'          => 'Text',
                'cl_actividad_desarrollada' => 'Text',
                'cl_activo'                 => 'Number',
                'cl_fecha_crea'             => 'Date',
                'cl_quien_crea'             => 'Number',
                'cl_fecha_modifica'         => 'Date',
                'cl_quien_modifica'         => 'Number',
                'cl_fecha_borra'            => 'Date',
                'cl_quien_borra'            => 'Number',
                'cl_borrado_logico'         => 'Number',
               );
    }

}