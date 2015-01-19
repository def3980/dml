<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000081"
 * - Ultima vez que se actualizo la clase formulario : "2015-01-05 09:08:20"
 */

/**
 * DmlIngresos clase base de formulario.
 *
 * @method DmlIngresos getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlIngresosForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'personas'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'), 'add_empty' => false)),
            'in_fecha'          => new sfWidgetFormDate(),
            'in_razon'          => new sfWidgetFormTextarea(),
            'in_valor'          => new sfWidgetFormInputText(),
            'in_fecha_crea'     => new sfWidgetFormDateTime(),
            'in_quien_crea'     => new sfWidgetFormInputText(),
            'in_fecha_modifica' => new sfWidgetFormDateTime(),
            'in_quien_modifica' => new sfWidgetFormInputText(),
            'in_fecha_borra'    => new sfWidgetFormDateTime(),
            'in_quien_borra'    => new sfWidgetFormInputText(),
            'in_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'personas'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DmlPersonas'))),
            'in_fecha'          => new sfValidatorDate(array('required' => false)),
            'in_razon'          => new sfValidatorString(array('required' => false)),
            'in_valor'          => new sfValidatorNumber(array('required' => false)),
            'in_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'in_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'in_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'in_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'in_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'in_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'in_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_ingresos[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlIngresos';
    }

}