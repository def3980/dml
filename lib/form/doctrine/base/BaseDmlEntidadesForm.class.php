<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 * 
 * Acciones realizadas:
 * - Veces ejecutado doctrine:build-forms            : "000084"
 * - Ultima vez que se actualizo la clase formulario : "2015-02-02 17:15:09"
 */

/**
 * DmlEntidades clase base de formulario.
 *
 * @method DmlEntidades getObject() Retorna el objeto actual del modelo del formulario
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmlEntidadesForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id'                => new sfWidgetFormInputHidden(),
            'en_nombre_entidad' => new sfWidgetFormInputText(),
            'en_alias'          => new sfWidgetFormInputText(),
            'en_direccion'      => new sfWidgetFormTextarea(),
            'en_contacto_json'  => new sfWidgetFormTextarea(),
            'en_fecha_crea'     => new sfWidgetFormDateTime(),
            'en_quien_crea'     => new sfWidgetFormInputText(),
            'en_fecha_modifica' => new sfWidgetFormDateTime(),
            'en_quien_modifica' => new sfWidgetFormInputText(),
            'en_fecha_borra'    => new sfWidgetFormDateTime(),
            'en_quien_borra'    => new sfWidgetFormInputText(),
            'en_borrado_logico' => new sfWidgetFormInputText(),
        ));

        $this->setValidators(array(
            'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'en_nombre_entidad' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
            'en_alias'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
            'en_direccion'      => new sfValidatorString(array('required' => false)),
            'en_contacto_json'  => new sfValidatorString(array('required' => false)),
            'en_fecha_crea'     => new sfValidatorDateTime(array('required' => false)),
            'en_quien_crea'     => new sfValidatorInteger(array('required' => false)),
            'en_fecha_modifica' => new sfValidatorDateTime(array('required' => false)),
            'en_quien_modifica' => new sfValidatorInteger(array('required' => false)),
            'en_fecha_borra'    => new sfValidatorDateTime(array('required' => false)),
            'en_quien_borra'    => new sfValidatorInteger(array('required' => false)),
            'en_borrado_logico' => new sfValidatorInteger(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('dml_entidades[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'DmlEntidades';
    }

}