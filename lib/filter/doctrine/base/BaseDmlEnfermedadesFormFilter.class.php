<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:23"
 */

/**
 * DmlEnfermedades clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlEnfermedadesFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'hijos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlHijos'), 'add_empty' => true)),
            'ef_fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ef_nombre'         => new sfWidgetFormFilterInput(),
            'ef_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ef_quien_crea'     => new sfWidgetFormFilterInput(),
            'ef_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ef_quien_modifica' => new sfWidgetFormFilterInput(),
            'ef_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ef_quien_borra'    => new sfWidgetFormFilterInput(),
            'ef_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'hijos'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlHijos'), 'column' => 'id')),
            'ef_fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'ef_nombre'         => new sfValidatorPass(array('required' => false)),
            'ef_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ef_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ef_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ef_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ef_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ef_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ef_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_enfermedades_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlEnfermedades';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'hijos'             => 'ForeignKey',
                'ef_fecha'          => 'Date',
                'ef_nombre'         => 'Text',
                'ef_fecha_crea'     => 'Date',
                'ef_quien_crea'     => 'Number',
                'ef_fecha_modifica' => 'Date',
                'ef_quien_modifica' => 'Number',
                'ef_fecha_borra'    => 'Date',
                'ef_quien_borra'    => 'Number',
                'ef_borrado_logico' => 'Number',
               );
    }

}