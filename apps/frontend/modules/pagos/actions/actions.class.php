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
        $this->pa_numero_factura = '000-000-'.Singleton::getInstance()->numeroDeOrden(DmlPagosTable::getCountNonInvoice() + 1);
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlPagosForm(null, array('id' => $this->getUser()->getAttribute('id')));
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
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
        $this->form->setDefault('pa_beneficiarios_json', json_decode($pa->getPaBeneficiariosJson()));
        $bi_count = DmlBinariosTable::getCountNonLogicalDeleteByIdPago($request->getParameter('id'));
        $this->bi_count = 0 !== $bi_count
                            ? sfConfig::get('app_max_files_per_paid') - $bi_count
                            : sfConfig::get('app_max_files_per_paid');
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
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
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
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
    
    public function executeIntermediate(sfWebRequest $request) {
        $this->redirect($this->generateUrl(
            'json', 
            array(
                'pa_numero_factura' => '000-000-'
                    .Singleton::getInstance()
                    ->numeroDeOrden(DmlPagosTable::getCountNonInvoice() + 1)
            )
        ));
    }
    
    private function preDmlPagosProccessForm(sfWebRequest $request) {
        foreach ($dml_pagos = $request->getParameter('dml_pagos') as $k => $v):
            switch ($k):
                case 'pa_beneficiarios_json':
                    $dml_pagos['pa_beneficiarios_json'] = json_encode($v);
                break;
                case 'pa_iva':
                    $dml_pagos['pa_iva'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'pa_ice':
                    $dml_pagos['pa_ice'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'pa_comision':
                    $dml_pagos['pa_comision'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'pa_valor_total':
                    $dml_pagos['pa_valor_total'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
            endswitch;
        endforeach;
        
        return $dml_pagos;
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