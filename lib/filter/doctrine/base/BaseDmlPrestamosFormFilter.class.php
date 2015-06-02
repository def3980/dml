<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000093"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-02 12:57:12"
 */

/**
 * DmlPrestamos clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlPrestamosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'contratos_bancarios' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => true)),
            'pr_fecha_concesion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pr_nombre_prestamo'  => new sfWidgetFormFilterInput(),
            'pr_detalle'          => new sfWidgetFormFilterInput(),
            'pr_fecha_crea'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pr_quien_crea'       => new sfWidgetFormFilterInput(),
            'pr_fecha_modifica'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pr_quien_modifica'   => new sfWidgetFormFilterInput(),
            'pr_fecha_borra'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'pr_quien_borra'      => new sfWidgetFormFilterInput(),
            'pr_borrado_logico'   => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'contratos_bancarios' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlContratosBancarios'), 'column' => 'id')),
            'pr_fecha_concesion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'pr_nombre_prestamo'  => new sfValidatorPass(array('required' => false)),
            'pr_detalle'          => new sfValidatorPass(array('required' => false)),
            'pr_fecha_crea'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pr_quien_crea'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pr_fecha_modifica'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pr_quien_modifica'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pr_fecha_borra'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'pr_quien_borra'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'pr_borrado_logico'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_prestamos_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPrestamos';
    }

    public function getFields() {
        return array(
                'id'                  => 'Number',
                'contratos_bancarios' => 'ForeignKey',
                'pr_fecha_concesion'  => 'Date',
                'pr_nombre_prestamo'  => 'Text',
                'pr_detalle'          => 'Text',
                'pr_fecha_crea'       => 'Date',
                'pr_quien_crea'       => 'Number',
                'pr_fecha_modifica'   => 'Date',
                'pr_quien_modifica'   => 'Number',
                'pr_fecha_borra'      => 'Date',
                'pr_quien_borra'      => 'Number',
                'pr_borrado_logico'   => 'Number',
               );
    }

}