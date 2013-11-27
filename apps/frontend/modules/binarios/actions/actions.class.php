<?php

/**
 * binarios actions.
 *
 * @package    dml
 * @subpackage binarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class binariosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->binario_ss = Doctrine_Core::getTable('BINARIOS')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BINARIOSForm();
    $this->form->setDefault('pagos_pa_id',1);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BINARIOSForm();
    
    $this->processFormSavePDF($request, $this->form);

//    $this->processForm($request, $this->form);
//
//    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($binarios = Doctrine_Core::getTable('BINARIOS')->find(array($request->getParameter('bi_id'))), sprintf('Object binarios does not exist (%s).', $request->getParameter('bi_id')));
    $this->form = new BINARIOSForm($binarios);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($binarios = Doctrine_Core::getTable('BINARIOS')->find(array($request->getParameter('bi_id'))), sprintf('Object binarios does not exist (%s).', $request->getParameter('bi_id')));
    $this->form = new BINARIOSForm($binarios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($binarios = Doctrine_Core::getTable('BINARIOS')->find(array($request->getParameter('bi_id'))), sprintf('Object binarios does not exist (%s).', $request->getParameter('bi_id')));
    $binarios->delete();

    $this->redirect('binarios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $binarios = $form->save();

      $this->redirect('binarios/edit?bi_id='.$binarios->getBiId());
    }
  }
  
  protected function processFormSavePDF(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    $bool = false;
//    if ($form->isValid()):
        $pdf = $request->getFiles($form->getName());
//        $bi = new BINARIOS();
//        foreach ($form->getValues() as $k => $v)
//            if ($k != 'bi_id' || $k != 'bi_bin')
//                $bi[$k] = $v;
//        $bi->setBiBin($pdf['bi_bin']['error'] > 0 ? NULL : file_get_contents($pdf['bi_bin']['tmp_name']));
//        $bi->save();
//        $bool = true;
//    endif;
    $bi = new BINARIOS();
    $bi->setBiBin($pdf['bi_bin']['error'] > 0 ? NULL : file_get_contents($pdf['bi_bin']['tmp_name']));
    $bi->save();
    return $bool;
  }
}
