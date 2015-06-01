<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000091"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-01 14:41:22"
 */

/**
 * DmlContratosBancarios clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlContratosBancariosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'personas'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'entidades'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlEntidades'), 'add_empty' => true)),
            'cb_fecha_contrato' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cb_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cb_quien_crea'     => new sfWidgetFormFilterInput(),
            'cb_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cb_quien_modifica' => new sfWidgetFormFilterInput(),
            'cb_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'cb_quien_borra'    => new sfWidgetFormFilterInput(),
            'cb_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'personas'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'entidades'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlEntidades'), 'column' => 'id')),
            'cb_fecha_contrato' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'cb_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cb_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cb_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cb_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cb_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'cb_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'cb_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_contratos_bancarios_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlContratosBancarios';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'personas'          => 'ForeignKey',
                'entidades'         => 'ForeignKey',
                'cb_fecha_contrato' => 'Date',
                'cb_fecha_crea'     => 'Date',
                'cb_quien_crea'     => 'Number',
                'cb_fecha_modifica' => 'Date',
                'cb_quien_modifica' => 'Number',
                'cb_fecha_borra'    => 'Date',
                'cb_quien_borra'    => 'Number',
                'cb_borrado_logico' => 'Number',
               );
    }

}