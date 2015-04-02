<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000001"
 * - Ultima vez que se actualizo la clase formulario : "2015-03-25 10:36:53"
 */

/**
 * DmlRespaldos clase base de formulario.
 *
 * @method DmlRespaldos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlRespaldosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'pagos'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'add_empty' => true)),
            'binarios'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'), 'add_empty' => true)),
            'rs_fecha_crea'     => new sfWidgetFormDateTime(),
            'rs_quien_crea'     => new sfWidgetFormInputText(),
            'rs_fecha_modifica' => new sfWidgetFormDateTime(),
            'rs_quien_modifica' => new sfWidgetFormInputText(),
            'rs_fecha_borra'    => new sfWidgetFormDateTime(),
            'rs_quien_borra'    => new sfWidgetFormInputText(),
            'rs_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'pagos'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPagos'), 'required' => false)),
            'binarios'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlBinarios'), 'required' => false)),
            'rs_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'rs_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'rs_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'rs_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'rs_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'rs_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'rs_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_respaldos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlRespaldos';
    }

}