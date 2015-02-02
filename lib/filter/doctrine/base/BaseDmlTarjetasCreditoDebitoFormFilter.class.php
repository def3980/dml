<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000084"
 * - Ultima vez que se actualizo la clase formulario : "2015-02-02 17:15:17"
 */

/**
 * DmlTarjetasCreditoDebito clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlTarjetasCreditoDebitoFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'contratos_bancarios'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => true)),
            'tipos_tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposTarjetasCreditoDebito'), 'add_empty' => true)),
            'tcd_fecha_emision'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tcd_fecha_expiracion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tcd_numero'                    => new sfWidgetFormFilterInput(),
            'tcd_cvv'                       => new sfWidgetFormFilterInput(),
            'tcd_estado'                    => new sfWidgetFormFilterInput(),
            'tcd_fecha_crea'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tcd_quien_crea'                => new sfWidgetFormFilterInput(),
            'tcd_fecha_modifica'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tcd_quien_modifica'            => new sfWidgetFormFilterInput(),
            'tcd_fecha_borra'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tcd_quien_borra'               => new sfWidgetFormFilterInput(),
            'tcd_borrado_logico'            => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'contratos_bancarios'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlContratosBancarios'), 'column' => 'id')),
            'tipos_tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlTiposTarjetasCreditoDebito'), 'column' => 'id')),
            'tcd_fecha_emision'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'tcd_fecha_expiracion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'tcd_numero'                    => new sfValidatorPass(array('required' => false)),
            'tcd_cvv'                       => new sfValidatorPass(array('required' => false)),
            'tcd_estado'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tcd_fecha_crea'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tcd_quien_crea'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tcd_fecha_modifica'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tcd_quien_modifica'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tcd_fecha_borra'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tcd_quien_borra'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tcd_borrado_logico'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_tarjetas_credito_debito_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlTarjetasCreditoDebito';
    }

    public function getFields() {
        return array(
                'id'                            => 'Number',
                'contratos_bancarios'           => 'ForeignKey',
                'tipos_tarjetas_credito_debito' => 'ForeignKey',
                'tcd_fecha_emision'             => 'Date',
                'tcd_fecha_expiracion'          => 'Date',
                'tcd_numero'                    => 'Text',
                'tcd_cvv'                       => 'Text',
                'tcd_estado'                    => 'Number',
                'tcd_fecha_crea'                => 'Date',
                'tcd_quien_crea'                => 'Number',
                'tcd_fecha_modifica'            => 'Date',
                'tcd_quien_modifica'            => 'Number',
                'tcd_fecha_borra'               => 'Date',
                'tcd_quien_borra'               => 'Number',
                'tcd_borrado_logico'            => 'Number',
               );
    }

}