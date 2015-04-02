<?php

/**
 * Fecha creacion : "Lunes, 16 Marzo 2015 10:08:57"
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
        $sql = DmlPagosTable::getListaDePagos();
        $this->pagos = new sfDoctrinePager('DmlPagos', sfConfig::get('app_max_per_page'));
        $this->pagos->setQuery($sql);
        $this->pagos->setPage($request->getParameter('pagina', 1));
        $this->pagos->init();
    }

    public function executeSearchPaid(sfWebRequest $request) {
        $pagos = new sfDoctrinePager('DmlPagos', sfConfig::get('app_max_per_page'));
        $pagos->setQuery(DmlPagosTable::getListaDePagosPorTexto($request->getParameter('faDet')));
        $pagos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $pagos->init();
        return $this->renderPartial('pagos', array('pagos' => $pagos));
    }

    public function executeSearchPager(sfWebRequest $request) {
        $pagos = new sfDoctrinePager('DmlPagos', sfConfig::get('app_max_per_page'));
        $pagos->setQuery(DmlPagosTable::getListaDePagosPorTexto($request->getParameter('faDet')));
        $pagos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $pagos->init();
        return $this->renderPartial('paginador', array('pagos' => $pagos));
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlPagosForm();
        $this->frmFacturas = new DmlFacturasForm();
        $this->frmFacturas->setDefault('fa_con_sin_factura', 0);
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
        $this->bi_count = sfConfig::get('app_max_files_per_paid');
        $facturas = new sfDoctrinePager('DmlFacturas', sfConfig::get('app_sharefile_per_file'));
        $facturas->setQuery(DmlFacturasTable::getListaDeFacturas());
        $facturas->setPage($request->getParameter('pagina', 1));
        $facturas->init();
        $this->facturas = $facturas;
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $facturas = $request->getParameter('dml_facturas');
        if (isset($facturas['id']) && empty($facturas['id'])):
            $this->frmFacturas = new DmlFacturasForm(null, array('id' => $this->getUser()->getAttribute('id')));
            $request->setParameter('dml_facturas', $this->preDmlFacturasProccessForm($request));
            $idFa = $this->processFormDmlFacturas($request, $this->frmFacturas);
        else:
            $facturas = $request->getParameter('dml_facturas');
            $fa = Doctrine_Core::getTable('DmlFacturas')->find(array($facturas['id']));
            $this->forward404Unless($fa, sprintf('x'));
            $this->frmFacturas = new DmlFacturasForm($fa, array('id' => $this->getUser()->getAttribute('id')));
            $request->setParameter('dml_facturas', $this->preDmlFacturasProccessForm($request));            
            $idFa = $this->processFormDmlFacturas($request, $this->frmFacturas);
        endif;
        $this->form = new DmlPagosForm(null, array(
            'id' => $this->getUser()->getAttribute('id'),
            'idFa' => $idFa
        ));
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
        $idPa = $this->processForm($request, $this->form);
//        if ($request->getParameter('dz_count') == 0):
//            unset($request['dml_facturas']);
//            unset($request['dml_pagos']);
//            unset($request['module']);
//            unset($request['action']);
//            $request->setParameter('idFa', $idFa);
//            $request->setParameter('idPa', $idPa);
//            $this->processForm($request, $this->form, true);
//        endif;
        $this->redirect($this->generateUrl('json', array(
            'id' => $idPa,
            'idFa' => $idFa,
        )));
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
      
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array(
            $pa->getFacturas()
        ));
        $this->forward404Unless($fa, sprintf('x'));
        $this->frmFacturas = new DmlFacturasForm($fa);
        $this->frmFacturas->setDefault('fa_beneficiarios_json', json_decode($fa->getFaBeneficiariosJson()));
        
        $bi_count = DmlBinariosTable::getConteoBinNoEliminados($fa->getId());
        $this->iva = sfConfig::get('app_iva');
        $this->ice = sfConfig::get('app_ice');
        $this->comision = sfConfig::get('app_comision');
        $this->bi_count = 0 !== $bi_count
                            ? sfConfig::get('app_max_files_per_paid') - $bi_count
                            : sfConfig::get('app_max_files_per_paid');
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $request->setParameter('dml_facturas', $this->preDmlFacturasProccessForm($request));
        $facturas = $request->getParameter('dml_facturas');
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array($facturas['id']));
        $this->forward404Unless($fa, sprintf('x'));
        $this->frmFacturas = new DmlFacturasForm($fa, array('id' => $this->getUser()->getAttribute('id')));

        $pa = Doctrine_Core::getTable('DmlPagos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pa,
            sprintf('El objeto pa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlPagosForm($pa, array(
            'id' => $this->getUser()->getAttribute('id'),
            'idFa' => $this->processFormDmlFacturas($request, $this->frmFacturas)
        ));
        $request->setParameter('dml_pagos', $this->preDmlPagosProccessForm($request));
        $this->redirect($this->generateUrl('json', array(
            'id' => $this->processForm($request, $this->form),
            'idFa' => $facturas['id'],
        )));
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $pa = Doctrine_Core::getTable('DmlPagos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pa,
            sprintf('El objeto pa con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $pa->delete();
        $this->redirect('pagos/index');
    }
    
    public function executeDropzone(sfWebRequest $request) {
        $this->processForm($request, null, true);
        return sfView::NONE;
    }
    
    public function executeBinLogicalDelete(sfWebRequest $request) {
        if (DmlBinariosTable::setBinLogicalDelete($request->getParameter('idFa'), $request->getParameter('idBi'))) {
            $this->redirect($this->generateUrl('json', array(
                'logical_delete' => true,
                'pdfs_left' => DmlBinariosTable::getConteoBinNoEliminados($request->getParameter('idFa'))
            )));
        } else {
            $this->redirect($this->generateUrl('json', array('logical_delete' => false)));            
        }
    }

    public function executeModalBodyFacturas(sfWebRequest $request) {
        return $this->renderPartial('modal_body_facturas', array('idFa' => $request->getParameter('idFa')));
    }
    
    public function executeCargarInformacion(sfWebRequest $request) {
        $facturas = DmlFacturasTable::getCargaInformacionFacturas($request->getParameter('idFa'))->execute(null, 3);
        $this->redirect($this->generateUrl('json', array(
            'dml_facturas' => reset($facturas),
            'pdfs_left' => DmlBinariosTable::getConteoBinNoEliminados($request->getParameter('idFa'))
        )));
    }
    
    public function executeCollapseSharefile(sfWebRequest $request) {
        $facturas = new sfDoctrinePager('DmlFacturas', sfConfig::get('app_sharefile_per_file'));
        $facturas->setQuery(DmlFacturasTable::getListaDeFacturas());
        $facturas->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $facturas->init();
        return $this->renderPartial('collapse_sharefile', array('facturas' => $facturas));
    }

    public function executePaginadorSharefile(sfWebRequest $request) {
        $facturas = new sfDoctrinePager('DmlFacturas', sfConfig::get('app_sharefile_per_file'));
        $facturas->setQuery(DmlFacturasTable::getListaDeFacturas());
        $facturas->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $facturas->init();
        return $this->renderPartial('paginador_sharefile', array('facturas' => $facturas));
    }

    private function preDmlPagosProccessForm(sfWebRequest $request, $idFa) {
        foreach ($dml_pagos = $request->getParameter('dml_pagos') as $k => $v):
            switch ($k):
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
    
    protected function processForm(sfWebRequest $request, sfForm $form = null, $dropzone = false) {
        if (!$dropzone) {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $pa = $form->save();

                return $pa->getId();
            }
        } else {
//            if ($request->getParameter('dz_count') > 0) {
                $pdf = $request->getFiles('file');
                $name = explode('.', $pdf['name']);

                $bi = new DmlBinarios();
                $bi->setFacturas($request->getParameter('idFa'));
                $bi->setBiNombreOriginal(reset($name));
                $bi->setBiTamanioBytes(intval($pdf['size']));
                $bi->setBiBinario(file_get_contents($pdf['tmp_name']));
                $bi->setBiMimeType($pdf['type']);
                $bi->setBiFechaCrea(date('Y-m-d H:i:s'));
                $bi->setBiQuienCrea($this->getUser()->getAttribute('id'));
                $bi->setBiBorradoLogico(false);            
                $bi->save();

                $rs = new DmlRespaldos();
                $rs->setPagos($request->getParameter('id'));
                $rs->setBinarios($bi->getId());
                $rs->setRsFechaCrea(date('Y-m-d H:i:s'));
                $rs->setRsQuienCrea($this->getUser()->getAttribute('id'));
                $rs->setRsBorradoLogico(false);
                $rs->save();
//            } else {
//                foreach (DmlBinariosTable::getBinYFactura($request->getParameter('idFa'))->execute(null, 5) as $k => $bi):
//                    $rs = new DmlRespaldos();
//                    $rs->setPagos($request->getParameter('idPa'));
//                    $rs->setBinarios($bi['bi_id']);
//                    $rs->setRsFechaCrea(date('Y-m-d H:i:s'));
//                    $rs->setRsQuienCrea($this->getUser()->getAttribute('id'));
//                    $rs->setRsBorradoLogico(false);
//                    $rs->save();
//                endforeach;
//            }
        }
    }

    /**
     * Procesamiento de datos para DmlFacturas
     */
    private function preDmlFacturasProccessForm(sfWebRequest $request) {
        foreach ($dml_facturas = $request->getParameter('dml_facturas') as $k => $v):
            switch ($k):
                case 'fa_beneficiarios_json':
                    $dml_facturas['fa_beneficiarios_json'] = json_encode($v);
                break;
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
    
    protected function processFormDmlFacturas(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $fa = $form->save();

            return $fa->getId();
        }
//            $fa = new DmlFacturas();
//            foreach ($request->getParameter('dml_facturas') as $k => $v)
//                $fa->{'set'.sfInflector::camelize($k)}($v);
//            $fa->save();
//
//            return $fa->getId();
    }
    /* ---------------------------------------------------------------------- */
}