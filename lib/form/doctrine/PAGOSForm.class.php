<?php

/**
 * PAGOS form.
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PAGOSForm extends BasePAGOSForm
{
  public function configure()
  {
//    $this->widgetSchema->setLabels(array(
//        'pa_numero_factura' => '# Factura : <sup style="color:#dd5a43">*</sup> <small class="msj-pa_numero_factura" style="display: none; color:#dd5a43; font-size: 10px;"></small>',
//        'pa_detalle'        => 'Descripción del gasto : <sup style="color:#dd5a43">*</sup> <small class="msj-pa_detalle" style="display: none; color:#dd5a43; font-size: 10px;"></small>',
//    ));
//    $this->widgetSchema['pa_fecha']         = new sfWidgetFormInputText();
//    $this->widgetSchema->setLabel('pa_fecha', 'Fecha :');
//    $this->widgetSchema['pa_iva']           = new sfWidgetFormInputHidden();
//    $this->widgetSchema->setLabel('pa_iva', 'IVA 12% :');
//    $this->widgetSchema['pa_ice']           = new sfWidgetFormInputHidden();
//    $this->widgetSchema->setLabel('pa_ice', 'ICE 15% :');
//    $this->widgetSchema['pa_comision']      = new sfWidgetFormInputHidden();
//    $this->widgetSchema->setLabel('pa_comision', 'Comisión :');
//    $this->widgetSchema['pa_valor_total']   = new sfWidgetFormInputHidden();
//    $this->widgetSchema->setLabel('pa_valor_total', 'Total : <sup style="color:#dd5a43">*</sup> <small class="msj-pa_valor_total" style="display: none; color:#dd5a43; font-size: 10px;"></small>');
    $this->widgetSchema['pa_respaldo']    = new sfWidgetFormInputFile();
//    $this->widgetSchema->setLabel('pa_respaldo', 'Respaldo de factura :');
//    $this->widgetSchema['persona_pe_id']  = new sfWidgetFormInputHidden();
  }
}
