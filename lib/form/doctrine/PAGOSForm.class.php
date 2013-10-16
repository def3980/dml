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
      $this->widgetSchema['pa_fecha']       = new sfWidgetFormInputText();
      $this->widgetSchema['pa_respaldo']    = new sfWidgetFormInputFile();
  }
}
