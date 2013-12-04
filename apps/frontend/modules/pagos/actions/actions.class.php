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
    $sql = PAGOSTable::getInstance()
            ->createQuery('pa')
                ->innerJoin('pa.TIPO_CONSUMO tc')
                    ->where('MONTH(pa.pa_fecha) = MONTH(CURDATE())')
//                    ->where('MONTH(pa.pa_fecha) = MONTH(DATE_ADD(NOW(),INTERVAL -1 MONTH))')
                        ->orderBy('pa.pa_fecha DESC');
    $this->pago_ss = new sfDoctrinePager('PAGOS',sfConfig::get('app_maxperpage'));
    $this->pago_ss->setQuery($sql);
    $this->pago_ss->setPage($request->getParameter('pagina',1));
    $this->pago_ss->init();
    $this->sb = PAGOSTable::consumoMensual('Servicios')
                    ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->me = PAGOSTable::consumoMensual('Medicina')
                    ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->co = PAGOSTable::consumoMensual('Comida')
                    ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->va = PAGOSTable::consumoMensual('Varios')
                    ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->tm = INGRESO_MONETARIOTable::getInstance()
                    ->createQuery('im')
                        ->addSelect('SUM(im.im_valor) as vt')
                            ->where('MONTH(im.im_fecha) = MONTH(CURDATE())')
//                            ->where('MONTH(im.im_fecha) = MONTH(DATE_ADD(NOW(),INTERVAL -1 MONTH))')
                                ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->ingreso_monetario = INGRESO_MONETARIOTable::getInstance()
                                ->createQuery('im')
                                    ->where('MONTH(im.im_fecha) = MONTH(CURDATE())');
//                                    ->where('MONTH(im.im_fecha) = MONTH(DATE_ADD(NOW(),INTERVAL -1 MONTH))');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PAGOSForm();
    $this->form->setDefault('persona_pe_id', 1);
    $this->form->setDefault('tipo_consumo_tc_id', rand(1, 4));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->form = new PAGOSForm();

    if ($this->processFormSavePDF($request, $this->form)):
        $pa = PAGOSTable::EntidadPAGOS()
                ->orderBy('pa.pa_id DESC')
                    ->limit(1)
                        ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
        foreach ($this->form->getValues() as $k => $v):
            if ($k == 'pa_id'): $pagos[$k] = $pa['pa_id'];
            else: $pagos[$k] = (($k == 'pa_numero_factura' & $v == "") ? NULL : $v); endif;
        endforeach;
    endif;
    $this->array = $pagos;
//    $this->processForm($request, $this->form);
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

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pagos = Doctrine_Core::getTable('PAGOS')->find(array($request->getParameter('pa_id'))), sprintf('Object pagos does not exist (%s).', $request->getParameter('pa_id')));
    $pagos->delete();

    $this->redirect('pagos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pagos = $form->save();

      $this->redirect('pagos/edit?pa_id='.$pagos->getPaId());
    }
  }
  
  protected function processFormSavePDF(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    $bool = false;
    if ($form->isValid()):
        $pagos = new PAGOS();
        foreach ($form->getValues() as $k => $v)
            if ($k != 'pa_id')
                $pagos[$k] = (($k == 'pa_numero_factura' & $v == "") ? NULL : $v);
        $pagos->save();
        $bool = true;
    endif;
    return $bool;
  }
  
  public function executeDropzoneSavePDF(sfWebRequest $request) {
    $pdf = $request->getFiles('file');
    if(isset($pdf)):
        if($pdf['error'] == 0):
            $name = $pdf['name'];
            $mime = $pdf['type'];
            $data = file_get_contents($pdf['tmp_name']);
            $size = intval($pdf['size']);
            $bi = new BINARIOS();
            $bi->setBiNombre($name);
            $bi->setBiTamanioBytes($size);
            $bi->setBiBin($data);
            $bi->setBiExt($mime);
            $bi->setPagosPaId($request->getParameter('id'));
            $bi->save();
            $this->msj = $request->getParameter('id');
        endif;
    else: $this->msj = 'Error! A file was not sent!'; endif;
  }
}