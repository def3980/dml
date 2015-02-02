<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000084"
 * - Ultima vez que se actualizo la clase formulario : "2015-02-02 17:15:15"
 */

/**
 * DmlIngresos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlIngresosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'personas'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'in_fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'in_razon'          => new sfWidgetFormFilterInput(),
            'in_valor'          => new sfWidgetFormFilterInput(),
            'in_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'in_quien_crea'     => new sfWidgetFormFilterInput(),
            'in_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'in_quien_modifica' => new sfWidgetFormFilterInput(),
            'in_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'in_quien_borra'    => new sfWidgetFormFilterInput(),
            'in_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'personas'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'in_fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'in_razon'          => new sfValidatorPass(array('required' => false)),
            'in_valor'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'in_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'in_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'in_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'in_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'in_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'in_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'in_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_ingresos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlIngresos';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'personas'          => 'ForeignKey',
                'in_fecha'          => 'Date',
                'in_razon'          => 'Text',
                'in_valor'          => 'Number',
                'in_fecha_crea'     => 'Date',
                'in_quien_crea'     => 'Number',
                'in_fecha_modifica' => 'Date',
                'in_quien_modifica' => 'Number',
                'in_fecha_borra'    => 'Date',
                'in_quien_borra'    => 'Number',
                'in_borrado_logico' => 'Number',
               );
    }

}