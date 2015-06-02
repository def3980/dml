<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlConsumosTarjetas formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlConsumosTarjetasForm extends BaseDmlConsumosTarjetasForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        unset(
            $this['personas'],
            $this['facturas'],
            $this['ct_fecha_crea'], 
            $this['ct_quien_crea'], 
            $this['ct_fecha_modifica'], 
            $this['ct_quien_modifica'], 
            $this['ct_fecha_borra'], 
            $this['ct_quien_borra'], 
            $this['ct_borrado_logico']
        );
        
        $this->widgetSchema['tarjetas_credito_debito'] = new sfWidgetFormDoctrineChoice(array(
            'model'        => 'DmlTarjetasCreditoDebito',
            'table_method' => 'getMisTarjetasCredito',
            'multiple'     => false
        ));
        $this->widgetSchema['tarjetas_credito_debito']->setOption('subtext', true);
        $this->widgetSchema['tarjetas_credito_debito']->setOption('spaces', 48);
        
        $this->widgetSchema->setLabels(array(
            'tarjetas_credito_debito' => 'Tarjeta consumida:',
            'ct_iva'                  => 'I.V.A.:',
            'ct_ice'                  => 'I.C.E.:',
            'ct_comision'             => 'Comision:',
            'ct_valor_parcial'        => 'Valor parcial:',
        ));
    }
    
    public function doSave($con = null) {
        if ($this->isNew()) {
            $this->getObject()->setPersonas($this->getOption('id'));
            $this->getObject()->setFacturas($this->getOption('idFa'));
            $this->getObject()->setCtFechaCrea(date('Y-m-d H:i:s'));
            $this->getObject()->setCtQuienCrea($this->getOption('id'));
            $this->getObject()->setCtBorradoLogico(false);
        } else if (!$this->isNew()) {
            $this->getObject()->setPersonas($this->getOption('id'));
            $this->getObject()->setFacturas($this->getOption('idFa'));
            $this->getObject()->setCtFechaModifica(date('Y-m-d H:i:s'));
            $this->getObject()->setCtQuienModifica($this->getOption('id'));
        }
        parent::doSave($con);
    }

}