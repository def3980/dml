<?php

/**
 * Fecha creacion : "Miercoles, 11 Marzo 2015 10:39:23"
 */

/**
 * facturas acciones (Controlador).
 *
 * @package    dml
 * @subpackage facturas
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class facturasActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        //$this->facturas = Doctrine_Core::getTable('DmlFacturas')
        //                        ->createQuery('a')
        //                            ->execute();
        $sql = DmlFacturasTable::getInstance()->createQuery('a');
        $this->facturas = new sfDoctrinePager('DmlFacturas', 5);
        $this->facturas->setQuery($sql);
        $this->facturas->setPage($request->getParameter('pagina', 1));
        $this->facturas->init();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlFacturasForm();
        $this->form->setDefault('fa_con_sin_factura', 0);
        $this->frmPagos = new DmlPagosForm();
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
        $this->bi_count = sfConfig::get('app_max_files_per_paid');
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlFacturasForm(null, array('id' => $this->getUser()->getAttribute('id')));
        $request->setParameter('dml_facturas', $this->preDmlFacturasProccessForm($request));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
    }

    public function executeEdit(sfWebRequest $request) {
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $fa,
            sprintf('El objeto fa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlFacturasForm($fa);
        $bi_count = DmlBinariosTable::getConteoBinNoEliminados($request->getParameter('id'));
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
        $this->bi_count = 0 !== $bi_count
                            ? sfConfig::get('app_max_files_per_paid') - $bi_count
                            : sfConfig::get('app_max_files_per_paid');
        $pa = Doctrine_Core::getTable('DmlPagos')
                ->findByDql(
                    'personas = ? AND facturas = ?',
                    array(
                        $this->getUser()->getAttribute('id'), 
                        $request->getParameter('id')
                    )
                )
                ->getFirst();
        $this->forward404Unless($pa, sprintf('x'));
        $this->frmPagos = new DmlPagosForm($pa);
        $this->frmPagos->setDefault('pa_beneficiarios_json', json_decode($pa->getPaBeneficiariosJson()));
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $fa,
            sprintf('El objeto fa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlFacturasForm($fa, array('id' => $this->getUser()->getAttribute('id')));
        $request->setParameter('dml_facturas', $this->preDmlFacturasProccessForm($request));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $fa,
            sprintf('El objecto fa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $fa->delete();
        $this->redirect('facturas/index');
    }

    private function preDmlFacturasProccessForm(sfWebRequest $request) {
        foreach ($dml_facturas = $request->getParameter('dml_facturas') as $k => $v):
            switch ($k):
                case 'fa_valor_total':
                    $dml_facturas['fa_valor_total'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
            endswitch;
        endforeach;

        return $dml_facturas;
    }
    
    public function executePagosCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processFormDmlPagos($request, 'new'))
        ));
    }

    public function executePagosUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processFormDmlPagos($request, 'upd'))
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
                case 'pa_valor_parcial':
                    $dml_pagos['pa_valor_parcial'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
            endswitch;
        endforeach;

        return $dml_pagos;
    }
    
    public function executeDropzone(sfWebRequest $request) {
        $this->processForm($request, null, true);
        return sfView::NONE;
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form = null, $dropzone = false) {
        if (!$dropzone) {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $fa = $form->save();
                return $fa->getId();
            }
        } else {
            $pdf = $request->getFiles('file');
            $name = explode('.', $pdf['name']);

            $bi = new DmlBinarios();
            $bi->setFacturas($request->getParameter('id'));
            $bi->setBiNombreOriginal(reset($name));
            $bi->setBiTamanioBytes(intval($pdf['size']));
            $bi->setBiBinario(file_get_contents($pdf['tmp_name']));
            $bi->setBiMimeType($pdf['type']);
            $bi->setBiFechaCrea(date('Y-m-d H:i:s'));
            $bi->setBiQuienCrea($this->getUser()->getAttribute('id'));
            $bi->setBiBorradoLogico(false);            
            $bi->save();

            if ($this->getUser()->hasAttribute('idBin')):
                $json = json_decode($this->getUser()->getAttribute('idBin')); // ["1"] || [1]
                array_push($json, $bi->getId());                
                $this->getUser()->setAttribute('idBin', json_encode($json)); // sobreescribo el valor
            else:
                $this->getUser()->setAttribute('idBin', json_encode(array($bi->getId())));
            endif;
            
        }
    }
    
    protected function processFormDmlPagos(sfWebRequest $request, $newUpd = null) {
        $respuesta = null;
        switch ($newUpd):
            case "new":
                // Insert
                $pagos = $request->getParameter('dml_pagos');
                $pa = new DmlPagos();
                $pa->setPaBeneficiariosJson($pagos['pa_beneficiarios_json']);
                $pa->setPaDetalle($pagos['pa_detalle']);
                if (isset($pagos['pa_ice']) && !empty($pagos['pa_ice'])) // valido si es diferente de null //http://php.net/manual/es/function.array-key-exists.php
                    $pa->setPaIce($pagos['pa_ice']);
                if (isset($pagos['pa_iva']) && !empty($pagos['pa_iva']))
                    $pa->setPaIva($pagos['pa_iva']);
                $pa->setPaValorParcial($pagos['pa_valor_parcial']);
                if (isset($pagos['pa_comision']) && !empty($pagos['pa_comision']))
                    $pa->setPaComision($pagos['pa_comision']);
                $pa->setFacturas($pagos['facturas']);
                $pa->setPersonas($this->getUser()->getAttribute('id'));
                $pa->setPaFechaCrea(date('Y-m-d H:i:s'));
                $pa->setPaQuienCrea($this->getUser()->getAttribute('id'));
                $pa->setPaBorradoLogico(false);
                $pa->save();
                $respuesta = $pa->getId();
                
                $bi = json_decode($this->getUser()->getAttribute('idBin'));
                if (count($bi)):
                    foreach ($bi as $k => $v):
                        $rs = new DmlRespaldos();
                        $rs->setPagos($respuesta);
                        $rs->setBinarios($v);
                        $rs->setRsFechaCrea(date('Y-m-d H:i:s'));
                        $rs->setRsQuienCrea($this->getUser()->getAttribute('id'));
                        $rs->setRsBorradoLogico(false);
                        $rs->save();
                    endforeach;
                endif;
                $this->getUser()->getAttributeHolder()->remove('idBin');
            break;
            case "upd":
                // Update
                $pagos = $request->getParameter('dml_pagos');
                $id = $pagos['id'];
                unset($pagos['id']);
                if (isset($pagos['pa_iva']) && empty($pagos['pa_iva']))
                    unset($pagos['pa_iva']);
                if (isset($pagos['pa_ice']) && empty($pagos['pa_ice']))
                    unset($pagos['pa_ice']);
                if (isset($pagos['pa_comision']) && empty($pagos['pa_comision']))
                    unset($pagos['pa_comision']);
                $pagos['pa_fecha_modifica'] = date('Y-m-d H:i:s');
                $pagos['pa_quien_modifica'] = $this->getUser()->getAttribute('id');
                $pagos['personas'] = $this->getUser()->getAttribute('id');
                $upd = Doctrine_Query::create()
                        ->update('DmlPagos')
                        ->set($pagos)
                        ->where('id = ?', array($id))
                        ->execute();
                
                $bi = json_decode($this->getUser()->getAttribute('idBin'));
                if (count($bi)):
                    foreach ($bi as $k => $v):
                        $rs = new DmlRespaldos();
                        $rs->setPagos($id);
                        $rs->setBinarios($v);
                        $rs->setRsFechaCrea(date('Y-m-d H:i:s'));
                        $rs->setRsQuienCrea($this->getUser()->getAttribute('id'));
                        $rs->setRsBorradoLogico(false);
                        $rs->save();
                    endforeach;
                endif;
                $this->getUser()->getAttributeHolder()->remove('idBin');
            break;
        endswitch;
    }

}