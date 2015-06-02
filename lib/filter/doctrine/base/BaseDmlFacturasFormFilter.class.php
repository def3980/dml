<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000006"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-02 12:57:10"
 */

/**
 * DmlFacturas clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlFacturasFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'tipos_gastos'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposGastos'), 'add_empty' => true)),
            'fa_con_sin_factura'    => new sfWidgetFormFilterInput(),
            'fa_numero_factura'     => new sfWidgetFormFilterInput(),
            'fa_fecha'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'fa_detalle'            => new sfWidgetFormFilterInput(),
            'fa_beneficiarios_json' => new sfWidgetFormFilterInput(),
            'fa_valor_total'        => new sfWidgetFormFilterInput(),
            'fa_fecha_crea'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'fa_quien_crea'         => new sfWidgetFormFilterInput(),
            'fa_fecha_modifica'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'fa_quien_modifica'     => new sfWidgetFormFilterInput(),
            'fa_fecha_borra'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'fa_quien_borra'        => new sfWidgetFormFilterInput(),
            'fa_borrado_logico'     => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'tipos_gastos'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlTiposGastos'), 'column' => 'id')),
            'fa_con_sin_factura'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'fa_numero_factura'     => new sfValidatorPass(array('required' => false)),
            'fa_fecha'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'fa_detalle'            => new sfValidatorPass(array('required' => false)),
            'fa_beneficiarios_json' => new sfValidatorPass(array('required' => false)),
            'fa_valor_total'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'fa_fecha_crea'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'fa_quien_crea'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'fa_fecha_modifica'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'fa_quien_modifica'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'fa_fecha_borra'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'fa_quien_borra'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'fa_borrado_logico'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_facturas_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlFacturas';
    }

    public function getFields() {
        return array(
                'id'                    => 'Number',
                'tipos_gastos'          => 'ForeignKey',
                'fa_con_sin_factura'    => 'Number',
                'fa_numero_factura'     => 'Text',
                'fa_fecha'              => 'Date',
                'fa_detalle'            => 'Text',
                'fa_beneficiarios_json' => 'Text',
                'fa_valor_total'        => 'Number',
                'fa_fecha_crea'         => 'Date',
                'fa_quien_crea'         => 'Number',
                'fa_fecha_modifica'     => 'Date',
                'fa_quien_modifica'     => 'Number',
                'fa_fecha_borra'        => 'Date',
                'fa_quien_borra'        => 'Number',
                'fa_borrado_logico'     => 'Number',
               );
    }

}