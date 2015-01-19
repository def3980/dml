<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlConsumoTarjetas formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlConsumoTarjetasForm extends BaseDmlConsumoTarjetasForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        $this->widgetSchema['ct_fecha']          = new sfWidgetFormInputText();
        $this->widgetSchema['ct_fecha_crea']     = new sfWidgetFormInputText();
        $this->widgetSchema['ct_fecha_modifica'] = new sfWidgetFormInputText();
        $this->widgetSchema['ct_fecha_borra']    = new sfWidgetFormInputText();
    }

}