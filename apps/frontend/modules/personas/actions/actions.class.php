<?php

/**
 * Fecha creacion : "Sabado, 6 Diciembre 2014 13:27:52"
 */

/**
 * personas acciones (Controlador).
 *
 * @package    dml
 * @subpackage personas
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personasActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        //$this->personas = Doctrine_Core::getTable('DmlPersonas')
        //                        ->createQuery('a')
        //                            ->execute();
        $sql = DmlPersonasTable::getInstance()->createQuery('a');
        $this->personas = new sfDoctrinePager('DmlPersonas', 5);
        $this->personas->setQuery($sql);
        $this->personas->setPage($request->getParameter('pagina', 1));
        $this->personas->init();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new DmlPersonasForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new DmlPersonasForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $pe = Doctrine_Core::getTable('DmlPersonas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pe,
            sprintf('El objecto pe con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlPersonasForm($pe);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $pe = Doctrine_Core::getTable('DmlPersonas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pe,
            sprintf('El objecto pe con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $this->form = new DmlPersonasForm($pe);
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        $pe = Doctrine_Core::getTable('DmlPersonas')->find(array(
            $request->getParameter('id')
        ));
        $this->forward404Unless(
            $pe,
            sprintf('El objecto pe con el parametro (%s), no existe.', $request->getParameter('id'))
        );
        $pe->delete();
        $this->redirect('personas/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $pe = $form->save();
            $this->redirect('personas/edit?id='.$pe->getId());
        }
    }

}