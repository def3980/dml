<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000002"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-11 10:18:18"
 */

/**
 * DmlBinariosCompartidos clase base de formulario.
 *
 * @method DmlBinariosCompartidos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlBinariosCompartidosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'binarios'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'), 'add_empty' => false)),
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => false)),
            'bc_fecha_crea'     => new sfWidgetFormDateTime(),
            'bc_quien_crea'     => new sfWidgetFormInputText(),
            'bc_fecha_modifica' => new sfWidgetFormDateTime(),
            'bc_quien_modifica' => new sfWidgetFormInputText(),
            'bc_fecha_borra'    => new sfWidgetFormDateTime(),
            'bc_quien_borra'    => new sfWidgetFormInputText(),
            'bc_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'binarios'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'))),
            'pagos'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'))),
            'bc_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'bc_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'bc_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'bc_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'bc_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'bc_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'bc_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_binarios_compartidos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlBinariosCompartidos';
    }

}