<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000001"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:37:08"
 */

/**
 * DmlRespaldos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlRespaldosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => true)),
            'binarios'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'), 'add_empty' => true)),
            'rs_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'rs_quien_crea'     => new sfWidgetFormFilterInput(),
            'rs_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'rs_quien_modifica' => new sfWidgetFormFilterInput(),
            'rs_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'rs_quien_borra'    => new sfWidgetFormFilterInput(),
            'rs_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'pagos'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPagos'), 'column' => 'id')),
            'binarios'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlBinarios'), 'column' => 'id')),
            'rs_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'rs_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'rs_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'rs_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'rs_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'rs_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'rs_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_respaldos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlRespaldos';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'pagos'             => 'ForeignKey',
                'binarios'          => 'ForeignKey',
                'rs_fecha_crea'     => 'Date',
                'rs_quien_crea'     => 'Number',
                'rs_fecha_modifica' => 'Date',
                'rs_quien_modifica' => 'Number',
                'rs_fecha_borra'    => 'Date',
                'rs_quien_borra'    => 'Number',
                'rs_borrado_logico' => 'Number',
               );
    }

}