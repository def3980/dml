<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000083"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-26 15:01:45"
 */

/**
 * DmlRemuneraciones clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlRemuneracionesFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            're_nombre'         => new sfWidgetFormFilterInput(),
            're_alias'          => new sfWidgetFormFilterInput(),
            're_valor'          => new sfWidgetFormFilterInput(),
            're_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            're_quien_crea'     => new sfWidgetFormFilterInput(),
            're_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            're_quien_modifica' => new sfWidgetFormFilterInput(),
            're_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            're_quien_borra'    => new sfWidgetFormFilterInput(),
            're_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            're_nombre'         => new sfValidatorPass(array('required' => false)),
            're_alias'          => new sfValidatorPass(array('required' => false)),
            're_valor'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            're_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            're_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            're_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            're_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            're_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            're_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            're_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_remuneraciones_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlRemuneraciones';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                're_nombre'         => 'Text',
                're_alias'          => 'Text',
                're_valor'          => 'Number',
                're_fecha_crea'     => 'Date',
                're_quien_crea'     => 'Number',
                're_fecha_modifica' => 'Date',
                're_quien_modifica' => 'Number',
                're_fecha_borra'    => 'Date',
                're_quien_borra'    => 'Number',
                're_borrado_logico' => 'Number',
               );
    }

}