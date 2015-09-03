<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000094"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:23:10"
 */

/**
 * DmlHijos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlHijosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'personas'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'hi_fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'hi_nombres'          => new sfWidgetFormFilterInput(),
            'hi_apellidos'        => new sfWidgetFormFilterInput(),
            'hi_fecha_crea'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'hi_quien_crea'       => new sfWidgetFormFilterInput(),
            'hi_fecha_modifica'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'hi_quien_modifica'   => new sfWidgetFormFilterInput(),
            'hi_fecha_borra'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'hi_quien_borra'      => new sfWidgetFormFilterInput(),
            'hi_borrado_logico'   => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'personas'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'hi_fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'hi_nombres'          => new sfValidatorPass(array('required' => false)),
            'hi_apellidos'        => new sfValidatorPass(array('required' => false)),
            'hi_fecha_crea'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'hi_quien_crea'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'hi_fecha_modifica'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'hi_quien_modifica'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'hi_fecha_borra'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'hi_quien_borra'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'hi_borrado_logico'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_hijos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlHijos';
    }

    public function getFields() {
        return array(
                'id'                  => 'Number',
                'personas'            => 'ForeignKey',
                'hi_fecha_nacimiento' => 'Date',
                'hi_nombres'          => 'Text',
                'hi_apellidos'        => 'Text',
                'hi_fecha_crea'       => 'Date',
                'hi_quien_crea'       => 'Number',
                'hi_fecha_modifica'   => 'Date',
                'hi_quien_modifica'   => 'Number',
                'hi_fecha_borra'      => 'Date',
                'hi_quien_borra'      => 'Number',
                'hi_borrado_logico'   => 'Number',
               );
    }

}