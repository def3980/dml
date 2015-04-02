<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000002"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-11 10:19:04"
 */

/**
 * DmlBinariosCompartidos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlBinariosCompartidosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'binarios'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'), 'add_empty' => true)),
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => true)),
            'bc_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bc_quien_crea'     => new sfWidgetFormFilterInput(),
            'bc_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bc_quien_modifica' => new sfWidgetFormFilterInput(),
            'bc_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bc_quien_borra'    => new sfWidgetFormFilterInput(),
            'bc_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'binarios'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlBinarios'), 'column' => 'id')),
            'pagos'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPagos'), 'column' => 'id')),
            'bc_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bc_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bc_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bc_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bc_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bc_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bc_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_binarios_compartidos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBinariosCompartidos';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'binarios'          => 'ForeignKey',
                'pagos'             => 'ForeignKey',
                'bc_fecha_crea'     => 'Date',
                'bc_quien_crea'     => 'Number',
                'bc_fecha_modifica' => 'Date',
                'bc_quien_modifica' => 'Number',
                'bc_fecha_borra'    => 'Date',
                'bc_quien_borra'    => 'Number',
                'bc_borrado_logico' => 'Number',
               );
    }

}