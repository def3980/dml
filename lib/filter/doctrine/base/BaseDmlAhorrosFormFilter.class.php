<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000095"
 * - Ultima vez que se actualizo la clase formulario : "2015-11-24 17:04:04"
 */

/**
 * DmlAhorros clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlAhorrosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'contratos_bancarios'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => true)),
            'tipos_cuentas'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTiposCuentas'), 'add_empty' => true)),
            'ah_fecha_creacion'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ah_numero_cuenta'     => new sfWidgetFormFilterInput(),
            'ah_fecha_cancelacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ah_estado'            => new sfWidgetFormFilterInput(),
            'ah_fecha_crea'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ah_quien_crea'        => new sfWidgetFormFilterInput(),
            'ah_fecha_modifica'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ah_quien_modifica'    => new sfWidgetFormFilterInput(),
            'ah_fecha_borra'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ah_quien_borra'       => new sfWidgetFormFilterInput(),
            'ah_borrado_logico'    => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'contratos_bancarios'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlContratosBancarios'), 'column' => 'id')),
            'tipos_cuentas'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlTiposCuentas'), 'column' => 'id')),
            'ah_fecha_creacion'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'ah_numero_cuenta'     => new sfValidatorPass(array('required' => false)),
            'ah_fecha_cancelacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
            'ah_estado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ah_fecha_crea'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ah_quien_crea'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ah_fecha_modifica'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ah_quien_modifica'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ah_fecha_borra'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ah_quien_borra'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ah_borrado_logico'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_ahorros_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlAhorros';
    }

    public function getFields() {
        return array(
                'id'                   => 'Number',
                'contratos_bancarios'  => 'ForeignKey',
                'tipos_cuentas'        => 'ForeignKey',
                'ah_fecha_creacion'    => 'Date',
                'ah_numero_cuenta'     => 'Text',
                'ah_fecha_cancelacion' => 'Date',
                'ah_estado'            => 'Number',
                'ah_fecha_crea'        => 'Date',
                'ah_quien_crea'        => 'Number',
                'ah_fecha_modifica'    => 'Date',
                'ah_quien_modifica'    => 'Number',
                'ah_fecha_borra'       => 'Date',
                'ah_quien_borra'       => 'Number',
                'ah_borrado_logico'    => 'Number',
               );
    }

}