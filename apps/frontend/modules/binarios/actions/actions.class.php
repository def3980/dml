<?php

/**
 * Fecha creacion : "Miercoles, 10 Diciembre 2014 11:20:37"
 */

/**
 * binarios acciones (Controlador).
 *
 * @package    dml
 * @subpackage binarios
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class binariosActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        //$this->binarios = Doctrine_Core::getTable('DmlBinarios')
        //                        ->createQuery('a')
        //                            ->execute();
        $sql = DmlBinariosTable::getInstance()->createQuery('a');
        $this->binarios = new sfDoctrinePager('DmlBinarios', 5);
        $this->binarios->setQuery($sql);
        $this->binarios->setPage($request->getParameter('pagina', 1));
        $this->binarios->init();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlBinariosForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlBinariosForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $bi = Doctrine_Core::getTable('DmlBinarios')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $bi,
            sprintf('El objecto bi con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlBinariosForm($bi);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $bi = Doctrine_Core::getTable('DmlBinarios')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $bi,
            sprintf('El objecto bi con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlBinariosForm($bi);
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $bi = Doctrine_Core::getTable('DmlBinarios')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $bi,
            sprintf('El objecto bi con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $bi->delete();
        $this->redirect('binarios/index');
    }
    
    public function executeBin(sfWebRequest $request) {
        $bin = Doctrine_Core::getTable('DmlBinarios')->findOneBy('id', $request->getParameter('id'));

        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Pragma: public', true);
        $this->getResponse()->setHttpHeader('Content-Type', $bin->getBiMimeType());
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary');
        $this->getResponse()->sendHttpHeaders();
        $this->getResponse()->setContent($bin->getBiBinario());

        return sfView::NONE;
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            // necesito guardar los datos para despues actualizar el objeto form
            $values = $form->getValues();
            $bi = $form->save();
            // actualizo el objeto despues de guardar el formulario para poder
            // poner la imagen en la BDD como contenido binario, ya que por 
            // defecto symfony 1.4 no lo hace...
            foreach ($values as $key => $value)
                if (is_object($value))
                    $bi->$key = file_get_contents($value->getTempName());
            $bi->save();
            $this->redirect('binarios/edit?id='.$bi->getId());
        }
    }

}