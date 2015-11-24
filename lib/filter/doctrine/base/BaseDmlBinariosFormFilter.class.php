<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:47:53"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000095"
 * - Ultima vez que se actualizo la clase formulario : "2015-11-24 17:04:04"
 */

/**
 * DmlBinarios clase base de formulario para el filtrado.
 *
 * @package    dml
 * @subpackage filter
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmlBinariosFormFilter extends BaseFormFilterDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'personas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => true)),
            'hijos'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlHijos'), 'add_empty' => true)),
            'tarjetas_credito_debito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'add_empty' => true)),
            'facturas'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlFacturas'), 'add_empty' => true)),
            'bi_nombre_original'      => new sfWidgetFormFilterInput(),
            'bi_tamanio_bytes'        => new sfWidgetFormFilterInput(),
            'bi_binario'              => new sfWidgetFormFilterInput(),
            'bi_mime_type'            => new sfWidgetFormFilterInput(),
            'bi_fecha_crea'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bi_quien_crea'           => new sfWidgetFormFilterInput(),
            'bi_fecha_modifica'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bi_quien_modifica'       => new sfWidgetFormFilterInput(),
            'bi_fecha_borra'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'bi_quien_borra'          => new sfWidgetFormFilterInput(),
            'bi_borrado_logico'       => new sfWidgetFormFilterInput(),
        ));

        $this->setValidators(array(
            'personas'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlPersonas'), 'column' => 'id')),
            'hijos'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlHijos'), 'column' => 'id')),
            'tarjetas_credito_debito' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlTarjetasCreditoDebito'), 'column' => 'id')),
            'facturas'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DmlFacturas'), 'column' => 'id')),
            'bi_nombre_original'      => new sfValidatorPass(array('required' => false)),
            'bi_tamanio_bytes'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
            'bi_binario'              => new sfValidatorPass(array('required' => false)),
            'bi_mime_type'            => new sfValidatorPass(array('required' => false)),
            'bi_fecha_crea'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bi_quien_crea'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bi_fecha_modifica'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bi_quien_modifica'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bi_fecha_borra'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'bi_quien_borra'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'bi_borrado_logico'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('dml_binarios_filters[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBinarios';
    }

    public function getFields() {
        return array(
                'id'                      => 'Number',
                'personas'                => 'ForeignKey',
                'hijos'                   => 'ForeignKey',
                'tarjetas_credito_debito' => 'ForeignKey',
                'facturas'                => 'ForeignKey',
                'bi_nombre_original'      => 'Text',
                'bi_tamanio_bytes'        => 'Number',
                'bi_binario'              => 'Text',
                'bi_mime_type'            => 'Text',
                'bi_fecha_crea'           => 'Date',
                'bi_quien_crea'           => 'Number',
                'bi_fecha_modifica'       => 'Date',
                'bi_quien_modifica'       => 'Number',
                'bi_fecha_borra'          => 'Date',
                'bi_quien_borra'          => 'Number',
                'bi_borrado_logico'       => 'Number',
               );
    }

}