<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000013"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:41:22"
 */

/**
 * DmlBeneficiarios clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlBeneficiariosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'be_orden'                   => new sfWidgetFormFilterInput(),
            'be_nombres_identificativos' => new sfWidgetFormFilterInput(),
            'be_fecha_crea'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'be_quien_crea'              => new sfWidgetFormFilterInput(),
            'be_fecha_modifica'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'be_quien_modifica'          => new sfWidgetFormFilterInput(),
            'be_fecha_borra'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'be_quien_borra'             => new sfWidgetFormFilterInput(),
            'be_borrado_logico'          => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'be_orden'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'be_nombres_identificativos' => new sfValidatorPass(array('required' => false)),
            'be_fecha_crea'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'be_quien_crea'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'be_fecha_modifica'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'be_quien_modifica'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'be_fecha_borra'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'be_quien_borra'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'be_borrado_logico'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_beneficiarios_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBeneficiarios';
    }

    public function getFields() {
        return array(
                'id'                         => 'Number',
                'be_orden'                   => 'Number',
                'be_nombres_identificativos' => 'Text',
                'be_fecha_crea'              => 'Date',
                'be_quien_crea'              => 'Number',
                'be_fecha_modifica'          => 'Date',
                'be_quien_modifica'          => 'Number',
                'be_fecha_borra'             => 'Date',
                'be_quien_borra'             => 'Number',
                'be_borrado_logico'          => 'Number',
               );
    }

}