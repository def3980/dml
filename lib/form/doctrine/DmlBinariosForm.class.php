<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlBinarios formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlBinariosForm extends BaseDmlBinariosForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        $this->widgetSchema['bi_fecha_registro'] = new sfWidgetFormInputText();
        $this->widgetSchema['bi_fecha_crea']     = new sfWidgetFormInputText();
        $this->widgetSchema['bi_fecha_modifica'] = new sfWidgetFormInputText();
        $this->widgetSchema['bi_fecha_borra']    = new sfWidgetFormInputText();

        // Incluyo un widget personalizado para subir cualquier tipo de archivo 
        // (*.jpg, *.png, *.pdf, *.xlsx, *.wordx, etc.)
        // ya que por defecto symfony 1.4 a los campos de tipo BLOB, MEDIUMBLOB 
        // y LONGBLOB los entiende como textarea | string
        // seguramente esto, por que eso de subir archivos por navegadores es 
        // una @#&%$da, pero yo me he tomado la molestia
        // de verificar los campos y agregar las opciones para subir dichos 
        // archivos aunque de manera básica y con destino
        // hacia la base de datos como contenido binario. Para mayor personalizacion 
        // debes programarlo a tu gusto.
        $this->widgetSchema['bi_binario']        = new sfWidgetFormInputFile();
        $this->validatorSchema['bi_binario']     = new sfValidatorFile(array('required' => false));
    }

}