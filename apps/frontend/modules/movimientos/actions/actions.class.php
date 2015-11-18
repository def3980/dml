<?php

/**
 * Fecha creacion : "Viernes, 6 Febrero 2015 13:24:27"
 */

/**
 * movimientos acciones (Controlador).
 *
 * @package    dml
 * @subpackage movimientos
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class movimientosActions extends sfActions {
    
    protected
        $fieldsBancoPichincha = array(
            'Fecha', 
            'Concepto', 
            'Tipo', 
            'Documento', 
            'Oficina', 
            'Monto', 
            'Saldo'
        );

    public function executeIndex(sfWebRequest $request) {
        $this->movimientos = new sfDoctrinePager('DmlMovimientos', sfConfig::get('app_max_per_page'));
        $this->movimientos->setQuery(DmlMovimientosTable::getListaDeMovimientos($request->getParameter('cuenta')));
        $this->movimientos->setPage($request->getParameter('pagina', 1));
        $this->movimientos->init();
        $this->cuentas_ahorros = DmlAhorrosTable::getCuentasDeAhorros()->execute(array(), Doctrine_Core::HYDRATE_SCALAR);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlMovimientosForm();
        $this->form->setDefault('mo_tipo', 'D');
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlMovimientosForm(null, array('id' => $this->getUser()->getAttribute('id')));
        $request->setParameter('dml_movimientos', $this->preDmlMovimientosProccessForm($request));
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
    }

    public function executeEdit(sfWebRequest $request) {
        $mo = Doctrine_Core::getTable('DmlMovimientos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $mo,
            sprintf('El objeto mo con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlMovimientosForm($mo);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        var_dump($request->getParameterHolder()->getAll());
        $mo = Doctrine_Core::getTable('DmlMovimientos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $mo,
            sprintf('El objeto mo con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlMovimientosForm($mo, array('id' => $this->getUser()->getAttribute('id')));
        $request->setParameter('dml_movimientos', $this->preDmlMovimientosProccessForm($request));
        var_dump($request->getParameterHolder()->getAll());
        die();
        $this->redirect($this->generateUrl(
            'json', 
            array('id' => $this->processForm($request, $this->form))
        ));
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $mo = Doctrine_Core::getTable('DmlMovimientos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $mo,
            sprintf('El objeto mo con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $mo->delete();
        $this->redirect('movimientos/index');
    }
    
    public function executeMassInsertion(sfWebRequest $request) {        
        $this->redirect($this->generateUrl('json', array('movimientos' => $this->proccessFields($request))));
    }
    
    public function executeTransactions(sfWebRequest $request) {
        $movimientos = new sfDoctrinePager('DmlMovimientos', sfConfig::get('app_max_per_page'));
        $movimientos->setQuery(DmlMovimientosTable::getListaDeMovimientos($request->getParameter('cuenta')));
        $movimientos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $movimientos->init();
        return $this->renderPartial('movimientos', array('movimientos' => $movimientos));
    }
    
    public function executeTransactionsPager(sfWebRequest $request) {
        $movimientos = new sfDoctrinePager('DmlMovimientos', sfConfig::get('app_max_per_page'));
        $movimientos->setQuery(DmlMovimientosTable::getListaDeMovimientos($request->getParameter('cuenta')));
        $movimientos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $movimientos->init();
        return $this->renderPartial('paginador', array('movimientos' => $movimientos));
    }
    
    public function executeSearchMove(sfWebRequest $request) {
        $movimientos = new sfDoctrinePager('DmlMovimientos', sfConfig::get('app_max_per_page'));
        $movimientos->setQuery(
            DmlMovimientosTable::getListaDeMovimientosPorConcepto($request->getParameter('moCon'), 
            $request->getParameter('ahNc'))
        );
        $movimientos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $movimientos->init();
        return $this->renderPartial('movimientos', array('movimientos' => $movimientos));
    }
    
    public function executeSearchPager(sfWebRequest $request) {
        $movimientos = new sfDoctrinePager('DmlMovimientos', sfConfig::get('app_max_per_page'));
        $movimientos->setQuery(
            DmlMovimientosTable::getListaDeMovimientosPorConcepto($request->getParameter('moCon'), 
            $request->getParameter('ahNc'))
        );
        $movimientos->setPage(
            $request->getParameter(
                'pagina', 
                array_key_exists('pagina', $request->getParameterHolder()->getAll())
                    ? $request->getParameter('pagina') : 1
            )
        );
        $movimientos->init();
        return $this->renderPartial('paginador_buscador', array('movimientos' => $movimientos));
    }

    private function validateFields(sfWebRequest $request) {
        $arrTable = array();
        $movimientos = $request->getParameter('movimientos');
        $cta = end($movimientos);
        array_pop($movimientos);
        foreach ($movimientos as $k => $v)
            if (count($v) != sfConfig::get('app_movimientos_bancarios'))
                return false;
        foreach ($movimientos as $k => $v):
            $arrTd = array();
            if (!empty(array_diff($v, $this->fieldsBancoPichincha))): //Quitando los nombres de campos que pueda tener                
                foreach ($v as $c => $val):
                    switch ($c):
                        case 0: // campo fecha
                            if (preg_match("/\d{2}\/\d{2}\/\d{4}/", $val)
                                || preg_match("/\d{4}\-\d{2}\-\d{2}/", $val))
                                $arrTd[$c] = Singleton::getInstance()->convertirEnFormatoFechaDml($val);
                            else return false;
                        break;
                        case 1: // campo Concepto, valido un solo espacio en el detalle del concepto
                            $arrTd[$c] = trim(preg_replace('/\s+/', ' ', $val));
                        break;
                        case 2: // campo Tipo
                            $arrTd[$c] = $val;
                        break;
                        case 3: // campo Documento, controlo el número de ceros restantes en la parte izquieda
                            //$arrTd[$c] = str_pad(($val * 1), sfConfig::get('app_numero_documento'), '0', STR_PAD_LEFT);
                            // Se elimina los ceros ya que se controla en la vista completando los ceros que son necesarios
                            $arrTd[$c] = ($val * 1).'';
                        break;
                        case 4: // campo Oficina, similar al campo Concepto
                            $arrTd[$c] = trim(preg_replace('/\s+/', ' ', $val));
                        break;
                        case 5: // campo Monto
                            $arrTd[$c] = Singleton::getInstance()->quitarComa($val);
                        break;
                        case 6: // campo Saldo
                            if (strpos($val, '.') !== false)
                                $arrTd[$c] = Singleton::getInstance()->quitarComa($val);
                            else return false;
                        break;
                    endswitch;
                endforeach;
                $arrTable[$k] = $arrTd;
            endif;
        endforeach;
        array_push($arrTable, $cta);
        
        return $arrTable;
    }

    private function proccessFields(sfWebRequest $request) {
        $contenedor = array();
        $movimientos = $this->validateFields($request);
        switch (gettype($movimientos)) {
            case "boolean": $contenedor['observacion'] = "Copia de movimientos, no admitida."; break;
            default:
                $repetidos = 0;
                $cta = end($movimientos);
                array_pop($movimientos);
                foreach ($movimientos as $k => $v):
                    if (DmlMovimientosTable::getSiExisteElMovimientoBancario($v, $cta) > 0):
                        unset($movimientos[$k]);
                        $repetidos++;
                    endif;
                endforeach;
                $contenedor['repetidos'] = $repetidos." ".($repetidos == 1 ? 'registro' : 'registros');
                foreach (array_reverse($movimientos) as $k => $v):
                    $mo = new DmlMovimientos();
                    $mo->setAhorros($cta);
                    $mo->setMoFecha($v[0]);
                    $mo->setMoConcepto($v[1]);
                    $mo->setMoTipo($v[2]);
                    $mo->setMoDocumento($v[3]);
                    $mo->setMoOficina($v[4]);
                    $mo->setMoMonto($v[5]);
                    $mo->setMoSaldo($v[6]);
                    $mo->setMoFechaCrea(date('Y-m-d H:i:s'));
                    $mo->setMoQuienCrea($this->getUser()->getAttribute('id'));
                    $mo->setMoBorradoLogico(0);
                    $mo->save();
                endforeach;
                $contenedor['insertados'] = count($movimientos)." ".(count($movimientos) == 1 ? 'registro' : 'registros');
            break;
        }
        return $contenedor;
    }
    
    private function preDmlMovimientosProccessForm(sfWebRequest $request) {
        foreach ($dml_movimientos = $request->getParameter('dml_movimientos') as $k => $v):
            switch ($k):
                case 'mo_concepto':
                    $dml_movimientos['mo_concepto'] = trim($v);
                break;
                case 'mo_documento':
                    $dml_movimientos['mo_documento'] = trim($v);
                break;
                case 'mo_oficina':
                    $dml_movimientos['mo_oficina'] = trim($v);
                break;
                case 'mo_monto':
                    $dml_movimientos['mo_monto'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'mo_saldo':
                    $dml_movimientos['mo_saldo'] = trim(str_replace('$ ', '', 
                        Singleton::getInstance()->reemplazarComaXPunto(
                            str_replace('.', '', $v)
                        )
                    ));
                break;
                case 'mo_tipo':
                    $dml_movimientos['mo_tipo'] = trim($v);
                break;
            endswitch;
        endforeach;
        
        return $dml_movimientos;
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {        
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $mo = $form->save();
            /**
             * Lun, 9 Nov 2015 15:31:49
             * Llego a realizar esta táctica ya que actualmente symfony 1.4 por
             * el lado de formularios no guarda valores nulos cuando se los indica
             * a los campos en el form principal. Espero poder arreglar ese error
             * ya que cuando cargo los fixtures si me guarda nulos en campos vacios
             */
            $dml_movimientos = $request->getParameter('dml_movimientos');
            if (trim($dml_movimientos['mo_mini_detalle_json']) === ''):            
                $ah = $dml_movimientos['ahorros'];
                $upd = Doctrine_Query::create()
                        ->update('DmlMovimientos')
                        ->set(array('mo_mini_detalle_json' => null))
                        ->where('id = ?', array($mo->getId()))
                        ->andWhere('ahorros = ?', array($ah))
                        ->execute();
            endif;
            return $mo->getId();
        }
    }

}