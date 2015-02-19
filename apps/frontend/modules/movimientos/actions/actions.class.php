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
        $this->movimientos->setQuery(DmlMovimientosTable::getListaDeMovimientos());
        $this->movimientos->setPage($request->getParameter('pagina', 1));
        $this->movimientos->init();
        $this->cuentas_ahorros = DmlAhorrosTable::getCuentasDeAhorros();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlMovimientosForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlMovimientosForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
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
        $mo = Doctrine_Core::getTable('DmlMovimientos')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $mo,
            sprintf('El objeto mo con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlMovimientosForm($mo);
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
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
                            $arrTd[$c] = str_pad(($val * 1), sfConfig::get('app_numero_documento'), '0', STR_PAD_LEFT);
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

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $mo = $form->save();
            $this->redirect('movimientos/edit?id='.$mo->getId());
        }
    }

}