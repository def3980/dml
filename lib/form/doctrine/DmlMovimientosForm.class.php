<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlMovimientos formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlMovimientosForm extends BaseDmlMovimientosForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        $this->widgetSchema['mo_tipo']           = new sfWidgetFormInputHidden();
        $this->widgetSchema['mo_fecha']          = new sfWidgetFormInputText();
        $this->widgetSchema['mo_fecha_crea']     = new sfWidgetFormInputText();
        $this->widgetSchema['mo_fecha_modifica'] = new sfWidgetFormInputText();
        $this->widgetSchema['mo_fecha_borra']    = new sfWidgetFormInputText();
        $this->widgetSchema['ahorros']->setOption('subtext', true);
        $this->widgetSchema['ahorros']->setOption('spaces', 44);
        $this->widgetSchema['ahorros']->setOption(
            'models', 
            'DmlAhorros, DmlContratosBancarios, DmlEntidades'
        );
        $this->widgetSchema['ahorros']->setOption('field_to_show', 'en_alias');
        unset(
            $this['mo_fecha_crea'], 
            $this['mo_quien_crea'], 
            $this['mo_fecha_modifica'], 
            $this['mo_quien_modifica'], 
            $this['mo_fecha_borra'], 
            $this['mo_quien_borra'], 
            $this['mo_borrado_logico']
        );
        $this->widgetSchema->setLabels(array(
            'ahorros'              => 'Cuentas ahorros:',
            'mo_fecha'             => 'Fecha:',
            'mo_concepto'          => 'Concepto:',
            'mo_tipo'              => 'Tipo:',
            'mo_documento'         => '# Documento:',
            'mo_oficina'           => 'Oficina:',
            'mo_monto'             => 'Monto:',
            'mo_saldo'             => 'Saldo:',
            'mo_mini_detalle_json' => 'Detalle Transferencias:',
        ));
    }
    
    public function doSave($con = null) {
        if ($this->isNew()) {
            $this->getObject()->setMoFechaCrea(date('Y-m-d H:i:s'));
            $this->getObject()->setMoQuienCrea($this->getOption('id'));
            $this->getObject()->setMoBorradoLogico(false);
        } else if (!$this->isNew()) {
            $this->getObject()->setMoFechaModifica(date('Y-m-d H:i:s'));
            $this->getObject()->setMoQuienModifica($this->getOption('id'));
        }
        parent::doSave($con);
    }

}