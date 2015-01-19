<?php

/**
 * Fecha creacion : "Sabado, 6 Diciembre 2014 06:22:46"
 */

/**
 * pagos acciones (Controlador).
 *
 * @package    dml
 * @subpackage pagos
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pagosActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->pagos = new sfDoctrinePager('DmlBinarios', sfConfig::get('app_max_per_page'));
        $this->pagos->setQuery(DmlPagosTable::getListaDePagos());
        $this->pagos->setPage($request->getParameter('pagina', 1));
        $this->pagos->init();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlPagosForm();
        $this->bi_count = sfConfig::get('app_max_files_per_paid');
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlPagosForm(null, array('id' => $this->getUser()->getAttribute('id')));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
//        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $pa = Doctrine_Core::getTable('DmlPagos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pa,
            sprintf('El objeto pa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlPagosForm($pa);
        $bi_count = DmlBinariosTable::getCountNonLogicalDeleteByIdPago($request->getParameter('id'));
        $this->bi_count = 0 !== $bi_count
                            ? sfConfig::get('app_max_files_per_paid') - $bi_count
                            : sfConfig::get('app_max_files_per_paid');
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $pa = Doctrine_Core::getTable('DmlPagos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pa,
            sprintf('El objecto pa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlPagosForm($pa, array('id' => $this->getUser()->getAttribute('id')));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
//        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $pa = Doctrine_Core::getTable('DmlPagos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pa,
            sprintf('El objecto pa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $pa->delete();
        $this->redirect('pagos/index');
    }
    
    public function executeBinLogicalDelete(sfWebRequest $request) {
        if (DmlBinariosTable::setBinLogicalDelete($request->getParameter('biId'))) {
            $this->redirect($this->generateUrl('json', array(
                'logical_delete' => true,
                'pdfs_left' => DmlBinariosTable::getCountNonLogicalDeleteByIdPago($request->getParameter('paId'))
            )));
        } else {
            $this->redirect($this->generateUrl('json', array('logical_delete' => false)));            
        }
    }
    
    public function executeModalBody(sfWebRequest $request) {
        return $this->renderPartial('modal_body', array('id' => $request->getParameter('paId')));
    }

    public function executeDropzone(sfWebRequest $request) {
        $this->processForm($request, null, true);
        return sfView::NONE;
    }

    protected function processForm(sfWebRequest $request, sfForm $form = null, $dropzone = false) {
        if (!$dropzone) {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $pa = $form->save();
                return $pa->getId();
            } 
        } else {
            $pdf = $request->getFiles('file');
            $name = explode('.', $pdf['name']);
            $bi = new DmlBinarios();
            $bi->setPagos($request->getParameter('id'));
            $bi->setBiNombreOriginal(reset($name));
            $bi->setBiTamanioBytes(intval($pdf['size']));
            $bi->setBiBinario(file_get_contents($pdf['tmp_name']));
            $bi->setBiMimeType($pdf['type']);
            $bi->setBiFechaCrea(date('Y-m-d H:i:s'));
            $bi->setBiQuienCrea($this->getUser()->getAttribute('id'));
            $bi->setBiBorradoLogico(false);
            $bi->save();
        }
    }

}