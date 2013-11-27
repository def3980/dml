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
                    //->where('MONTH(pa.pa_fecha) = MONTH(DATE_ADD(NOW(),INTERVAL -1 MONTH))')
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
                                ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
    $this->ingreso_monetario = INGRESO_MONETARIOTable::getInstance()
                                ->createQuery('im')
                                    ->where('MONTH(im.im_fecha) = MONTH(CURDATE())');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PAGOSForm();
//    $this->form->setDefault('persona_pe_id',$this->getUser()->getAttribute('pe_id'));
    $this->form->setDefault('persona_pe_id',1);
    $this->form->setDefault('tipo_consumo_tc_id',2);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PAGOSForm();

    if ($this->processFormSavePDF($request, $this->form))
//        $this->redirect('pagos/index');
            $this->msj = 'Ingresado';
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
        $this->redirect('pagos/index');

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
      $factura = explode('.', ($request->getParameter('factura') != NULL ? $request->getParameter('factura') : $request->getParameter('referencia')));
      $pdf = PAGOSTable::getInstance()
                ->createQuery('pa')
                    ->where('pa.pa_id = ?', array($factura[0]))
                        ->orWhere('pa.pa_numero_factura = ?', array($factura[0]))
                            ->fetchOne(array(), Doctrine::HYDRATE_ARRAY_SHALLOW);
      $this->getResponse()->setHttpHeader('Content-Type', 'application/pdf');
      $this->getResponse()->setHttpHeader('Content-Length', strlen($pdf['pa_respaldo']));
      $this->getResponse()->setHttpHeader('Content-Disposition', ' ; filename="'.($request->getParameter('factura') != NULL ? 'factura_'.$request->getParameter('factura') : 'referencia_'.$request->getParameter('referencia')).'"');
      $this->getResponse()->sendHttpHeaders();
      print $pdf['pa_respaldo'];
  }
  
  public function executeGuardarBin(sfWebRequest $request)
  {
    if(isset($_FILES['file'])):
        // Make sure the file was sent without errors
        if($_FILES['file']['error'] == 0):
            // Gather all required data
            $name   = trim($_FILES['file']['name']);
            $mime   = trim($_FILES['file']['type']);
            $data   = file_get_contents($_FILES['file']['tmp_name']);
            $size   = intval($_FILES['file']['size']);
            $bi     = new BINARIOS();
            $bi->setBiNombre($name);
            $bi->setBiTamanioBytes($size);
            $bi->setBiBin($data);
            $bi->setBiExt($mime);
            $bi->setPagosPaId(1);
            $bi->save();
            $this->msj = $bi->getBiId();
        endif;
    endif;
  }
//  protected function processFormSavePDF(sfWebRequest $request, sfForm $form) {
//    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
//    $bool = false;
//    if ($form->isValid()):
////        $pdf = $request->getFiles($form->getName());
////        $pagos = new PAGOS();
////        foreach ($form->getValues() as $k => $v)
////            if ($k != 'pa_id' || $k != 'pa_respaldo')
////                $pagos[$k] = (($k == 'pa_numero_factura' & $v == "") ? NULL : $v);
////        $pagos->setPaRespaldo($pdf['pa_respaldo']['error'] > 0 ? NULL : file_get_contents($pdf['pa_respaldo']['tmp_name']));
////        $pagos->save();
//        $form->save();
//        $bool = true;
//    endif;
//    return $bool;
//  }

  protected function processFormSavePDF(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    $bool = false;
    if ($form->isValid()):
//        $pdf = $request->getFiles($form->getName());
//        $pagos = new PAGOS();
//        foreach ($form->getValues() as $k => $v)
//            if ($k != 'pa_id' || $k != 'pa_respaldo')
//                $pagos[$k] = (($k == 'pa_numero_factura' & $v == "") ? NULL : $v);
//        $pagos->setPaRespaldo($pdf['pa_respaldo']['error'] > 0 ? NULL : file_get_contents($pdf['pa_respaldo']['tmp_name']));
//        $pagos->save();
        $form->save();
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
                $up->set('pa.'.$k.'', '?', array(($k == 'pa_numero_factura' & $v == "") ? NULL : $v));
        if ($pdf['pa_respaldo']['error'] == 0)
            $up->set('pa.pa_respaldo', '?', array(file_get_contents($pdf['pa_respaldo']['tmp_name'])));
        $up->where('pa.pa_id = ?', array($request->getParameter('pa_id')))->execute();
        $bool = true;
    endif;
    return $bool;
  }
}