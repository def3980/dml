<?php

/**
 * Fecha creacion : "Lunes, 1 Junio 2015 16:26:23"
 */

/**
 * tarjetas acciones (Controlador).
 *
 * @package    dml
 * @subpackage tarjetas
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tarjetasActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $sql = DmlConsumosTarjetasTable::getListaDeConsumos();
//        echo "<pre>";
//        print_r($sql->execute(array(), 5));
//        echo "</pre>";
//        echo "<textarea cols='100' rows='10'>";
//        print_r($sql->getSqlQuery());
//        echo "</textarea>";
//        die();
        $this->tarjetas = new sfDoctrinePager('DmlConsumosTarjetas', sfConfig::get('app_max_per_page'));
        $this->tarjetas->setQuery($sql);
        $this->tarjetas->setPage($request->getParameter('pagina', 1));
        $this->tarjetas->init();
        $this->tarjetas_credito = DmlTarjetasCreditoDebitoTable::getInfoMisTarjetasCredito()->execute(null, 5);
    }
    
    public function executeCardsList(sfWebRequest $request) {
        $tarjetas = new sfDoctrinePager('DmlConsumosTarjetas', sfConfig::get('app_max_per_page'));
        $tarjetas->setQuery(DmlConsumosTarjetasTable::getListaDeConsumos());
        $tarjetas->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $tarjetas->init();
        return $this->renderPartial('tarjetas', array('tarjetas' => $tarjetas));
    }

    public function executeCardsPager(sfWebRequest $request) {
        $tarjetas = new sfDoctrinePager('DmlConsumosTarjetas', sfConfig::get('app_max_per_page'));
        $tarjetas->setQuery(DmlConsumosTarjetasTable::getListaDeConsumos());
        $tarjetas->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $tarjetas->init();
        return $this->renderPartial('paginador', array('tarjetas' => $tarjetas));
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlConsumosTarjetasForm();
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
        $this->form = new DmlConsumosTarjetasForm(null, array(
            'id' => $this->getUser()->getAttribute('id'),
            'idFa' => $idFa
        ));
        $request->setParameter('dml_consumos_tarjetas', $this->preDmlTarjetasProccessForm($request));
        $id = $this->processForm($request, $this->form);
        $nombre_tarjeta = DmlConsumosTarjetasTable::getListaDeConsumos()
                            ->andWhere('ct.id = ?', array($id))
                            ->fetchOne(null, 5);
        $this->redirect($this->generateUrl('json', array(
            'id' => $id,
            'idFa' => $idFa,
            'nombreTarjeta' => Singleton::getInstance()->slugify($nombre_tarjeta['ttcd_ttcd_nombre'])
        )));
    }

    public function executeEdit(sfWebRequest $request) {
        $ct = Doctrine_Core::getTable('DmlConsumosTarjetas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $ct,
            sprintf('El objeto ct con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlConsumosTarjetasForm($ct);
      
        $fa = Doctrine_Core::getTable('DmlFacturas')->find(array(
            $ct->getFacturas()
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

        $ct = Doctrine_Core::getTable('DmlConsumosTarjetas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $ct,
            sprintf('El objeto ct con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlConsumosTarjetasForm($ct, array(
            'id' => $this->getUser()->getAttribute('id'),
            'idFa' => $this->processFormDmlFacturas($request, $this->frmFacturas)
        ));
        $request->setParameter('dml_consumos_tarjetas', $this->preDmlTarjetasProccessForm($request));
        $id = $this->processForm($request, $this->form);
        $nombre_tarjeta = DmlConsumosTarjetasTable::getListaDeConsumos()
                            ->andWhere('ct.id = ?', array($id))
                            ->fetchOne(null, 5);
        $this->redirect($this->generateUrl('json', array(
            'id' => $id,
            'idFa' => $facturas['id'],
            'nombreTarjeta' => Singleton::getInstance()->slugify($nombre_tarjeta['ttcd_ttcd_nombre'])
        )));
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $ct = Doctrine_Core::getTable('DmlConsumosTarjetas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $ct,
            sprintf('El objeto ct con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $ct->delete();
        $this->redirect('tarjetas/index');
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

    private function preDmlTarjetasProccessForm(sfWebRequest $request, $idFa) {
        foreach ($dml_consumos_tarjetas = $request->getParameter('dml_consumos_tarjetas') as $k => $v):
            switch ($k):
                case 'ct_iva':
                    $dml_consumos_tarjetas['ct_iva'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'ct_ice':
                    $dml_consumos_tarjetas['ct_ice'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'ct_comision':
                    $dml_consumos_tarjetas['ct_comision'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'ct_valor_parcial':
                    $dml_consumos_tarjetas['ct_valor_parcial'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
            endswitch;
        endforeach;

        return $dml_consumos_tarjetas;
    }
    
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
    
    protected function processForm(sfWebRequest $request, sfForm $form = null, $dropzone = false) {
        if (!$dropzone) {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $ct = $form->save();

                return $ct->getId();
            }
        } else {
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
        }
    }
    
    protected function processFormDmlFacturas(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $fa = $form->save();

            return $fa->getId();
        }
    }

}