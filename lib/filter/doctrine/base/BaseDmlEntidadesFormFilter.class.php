<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000093"
 * - Ultima vez que se actualizo la clase formulario : "2015-06-02 12:57:10"
 */

/**
 * DmlEntidades clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlEntidadesFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'en_nombre_entidad' => new sfWidgetFormFilterInput(),
            'en_alias'          => new sfWidgetFormFilterInput(),
            'en_direccion'      => new sfWidgetFormFilterInput(),
            'en_contacto_json'  => new sfWidgetFormFilterInput(),
            'en_fecha_crea'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'en_quien_crea'     => new sfWidgetFormFilterInput(),
            'en_fecha_modifica' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'en_quien_modifica' => new sfWidgetFormFilterInput(),
            'en_fecha_borra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'en_quien_borra'    => new sfWidgetFormFilterInput(),
            'en_borrado_logico' => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'en_nombre_entidad' => new sfValidatorPass(array('required' => false)),
            'en_alias'          => new sfValidatorPass(array('required' => false)),
            'en_direccion'      => new sfValidatorPass(array('required' => false)),
            'en_contacto_json'  => new sfValidatorPass(array('required' => false)),
            'en_fecha_crea'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'en_quien_crea'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'en_fecha_modifica' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'en_quien_modifica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'en_fecha_borra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'en_quien_borra'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'en_borrado_logico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_entidades_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlEntidades';
    }

    public function getFields() {
        return array(
                'id'                => 'Number',
                'en_nombre_entidad' => 'Text',
                'en_alias'          => 'Text',
                'en_direccion'      => 'Text',
                'en_contacto_json'  => 'Text',
                'en_fecha_crea'     => 'Date',
                'en_quien_crea'     => 'Number',
                'en_fecha_modifica' => 'Date',
                'en_quien_modifica' => 'Number',
                'en_fecha_borra'    => 'Date',
                'en_quien_borra'    => 'Number',
                'en_borrado_logico' => 'Number',
               );
    }

}