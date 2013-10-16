<?php

/**
 * pagos actions.
 *
 * @package    dml
 * @subpackage pagos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pagosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $sql = PAGOSTable::getInstance()->createQuery('pa')->orderBy('pa.pa_fecha DESC');
    $this->pago_ss = new sfDoctrinePager('PAGOS',sfConfig::get('app_maxperpage'));
    $this->pago_ss->setQuery($sql);
    $this->pago_ss->setPage($request->getParameter('pagina',1));
    $this->pago_ss->init();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PAGOSForm();
//    $this->form->setDefault('persona_pe_id',$this->getUser()->getAttribute('pe_id'));
    $this->form->setDefault('persona_pe_id',1);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PAGOSForm();

    if ($this->processFormSavePDF($request, $this->form))
        $this->array = $this->form->getValues();

//    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($pagos = Doctrine_Core::getTable('PAGOS')->find(array($request->getParameter('pa_id'))), sprintf('Object pagos does not exist (%s).', $request->getParameter('pa_id')));
    $this->form = new PAGOSForm($pagos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($pagos = Doctrine_Core::getTable('PAGOS')->find(array($request->getParameter('pa_id'))), sprintf('Object pagos does not exist (%s).', $request->getParameter('pa_id')));
    $this->form = new PAGOSForm($pagos);

    if ($this->processFormUpdPDF($request, $this->form))
        $this->array = $this->form->getValues();

//    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pagos = Doctrine_Core::getTable('PAGOS')->find(array($request->getParameter('pa_id'))), sprintf('Object pagos does not exist (%s).', $request->getParameter('pa_id')));
    $pagos->delete();

    $this->redirect('pagos/index');
  }
  
  public function executeInfo(sfWebRequest $request)
  {
      $factura = explode('.', $request->getParameter('factura'));
      $pdf = PAGOSTable::getInstance()
                ->createQuery('pa')
                    ->where('pa.pa_numero_factura = ?', array($factura[0]))
                        ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
      $this->getResponse()->setHttpHeader('Content-Type', 'application/pdf');
      $this->getResponse()->setHttpHeader('Content-Length', strlen($pdf['pa_respaldo']));
      $this->getResponse()->setHttpHeader('Content-Disposition', ' ; filename="factura_'.$request->getParameter('factura').'"');
      $this->getResponse()->sendHttpHeaders();
      print $pdf['pa_respaldo'];
  }

  protected function processFormSavePDF(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    $bool = false;
    if ($form->isValid()):
        $pdf = $request->getFiles($form->getName());
        $pagos = new PAGOS();
        foreach ($form->getValues() as $k => $v)
            if ($k != 'pa_id' || $k != 'pa_respaldo')
                $pagos[$k] = $v;
        $pagos->setPaRespaldo(file_get_contents($pdf['pa_respaldo']['tmp_name']));
        $pagos->save();
        $bool = true;
    endif;
    return $bool;
  }

  protected function processFormUpdPDF(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    $bool = false;
    if ($form->isValid()):
        $pdf = $request->getFiles($form->getName());
        $up = Doctrine_Query::create()->update('PAGOS pa');
        foreach ($form->getValues() as $k => $v)
            if ($k != 'pa_respaldo')
                $up->set('pa.'.$k.'', '?', array($v));
        $up->set('pa.pa_respaldo', '?', array($pdf['pa_respaldo']['error'] ? NULL : file_get_contents($pdf['pa_respaldo']['tmp_name'])));
        $up->where('pa.pa_id = ?', array($request->getParameter('pa_id')))->execute();
        $bool = true;
    endif;
    return $bool;
  }
}