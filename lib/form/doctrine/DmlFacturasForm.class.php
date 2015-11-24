<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlFacturas formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlFacturasForm extends BaseDmlFacturasForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        $this->widgetSchema['tipos_gastos'] = new sfWidgetFormDoctrineChoice(array(
            'model' => 'DmlTiposGastos',
            'order_by' => array('tg_orden', 'asc')
        ));
        $this->widgetSchema['tipos_gastos']->setOption('subtext', true);
        $this->widgetSchema['tipos_gastos']->setOption('spaces', 48);
        $this->widgetSchema['fa_fecha']           = new sfWidgetFormInputText();
        $this->widgetSchema['fa_con_sin_factura'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['fa_numero_factura']->setDefault(
            '000-000-'
            .Singleton::getInstance()->numeroDeOrden(
                DmlFacturasTable::getCountNonInvoice() + 1
            )
        );
        $this->widgetSchema['fa_beneficiarios_json'] = new sfWidgetFormDoctrineChoice(array(
            'model' => 'DmlBeneficiarios',
            'method' => 'getBeneficiarios',
            'order_by' => array('be_orden', 'asc'),
            'multiple' => true
        ));
        $this->widgetSchema['fa_beneficiarios_json']->setOption('subtext', true);
        $this->widgetSchema['fa_beneficiarios_json']->setOption('spaces', 44);
        unset(
            $this['fa_fecha_crea'], 
            $this['fa_quien_crea'], 
            $this['fa_fecha_modifica'], 
            $this['fa_quien_modifica'], 
            $this['fa_fecha_borra'], 
            $this['fa_quien_borra'], 
            $this['fa_borrado_logico']
        );
        $this->widgetSchema->setLabels(array(
            'tipos_gastos'          => 'Opciones gastos:',
            'fa_numero_factura'     => 'Factura:',
            'fa_fecha'              => 'Fecha:',
            'fa_detalle'            => 'Detalle:',
            'fa_beneficiarios_json' => 'Beneficiario(s):',
            'fa_valor_total'        => 'Valor total:'
        ));
    }
    
    public function doSave($con = null) {
        if ($this->isNew()) {
            $this->getObject()->setFaFechaCrea(date('Y-m-d H:i:s'));
            $this->getObject()->setFaQuienCrea($this->getOption('id'));
            $this->getObject()->setFaBorradoLogico(false);
        } else if (!$this->isNew()) {
            $this->getObject()->setFaFechaModifica(date('Y-m-d H:i:s'));
            $this->getObject()->setFaQuienModifica($this->getOption('id'));
        }
        parent::doSave($con);
    }

}