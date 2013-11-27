<?php

/**
 * BINARIOS form.
 *
 * @package    dml
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BINARIOSForm extends BaseBINARIOSForm
{
  public function configure()
  {
    $this->widgetSchema['bi_nombre']    = new sfWidgetFormInputHidden();
    $this->widgetSchema['bi_tamanio']   = new sfWidgetFormInputHidden();
    $this->widgetSchema['bi_bin']       = new sfWidgetFormInputFile();
    $this->widgetSchema->setLabel('bi_bin', 'Archivo a subir :');
    $this->widgetSchema['bi_ext']       = new sfWidgetFormInputHidden();
    $this->widgetSchema['pagos_pa_id']  = new sfWidgetFormInputHidden();
  }
}
