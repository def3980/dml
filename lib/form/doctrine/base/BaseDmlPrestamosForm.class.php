<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000094"
 * - Ultima vez que se actualizo la clase formulario : "2015-07-01 17:22:59"
 */

/**
 * DmlPrestamos clase base de formulario.
 *
 * @method DmlPrestamos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlPrestamosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                  => new sfWidgetFormInputHidden(),
            'contratos_bancarios' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'), 'add_empty' => false)),
            'pr_fecha_concesion'  => new sfWidgetFormDate(),
            'pr_nombre_prestamo'  => new sfWidgetFormInputText(),
            'pr_detalle'          => new sfWidgetFormTextarea(),
            'pr_fecha_crea'       => new sfWidgetFormDateTime(),
            'pr_quien_crea'       => new sfWidgetFormInputText(),
            'pr_fecha_modifica'   => new sfWidgetFormDateTime(),
            'pr_quien_modifica'   => new sfWidgetFormInputText(),
            'pr_fecha_borra'      => new sfWidgetFormDateTime(),
            'pr_quien_borra'      => new sfWidgetFormInputText(),
            'pr_borrado_logico'   => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'contratos_bancarios' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlContratosBancarios'))),
            'pr_fecha_concesion'  => new sfValidatorDate(array('required' => false)),
            'pr_nombre_prestamo'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'pr_detalle'          => new sfValidatorString(array('required' => false)),
            'pr_fecha_crea'       => new sfValidatorDateTime(array('required' => false)),
            'pr_quien_crea'       => new sfValidatorInteger(array('required' => false)),
            'pr_fecha_modifica'   => new sfValidatorDateTime(array('required' => false)),
            'pr_quien_modifica'   => new sfValidatorInteger(array('required' => false)),
            'pr_fecha_borra'      => new sfValidatorDateTime(array('required' => false)),
            'pr_quien_borra'      => new sfValidatorInteger(array('required' => false)),
            'pr_borrado_logico'   => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_prestamos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlPrestamos';
    }

}