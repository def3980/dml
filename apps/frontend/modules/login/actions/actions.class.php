<?php

/**
 * login actions.
 * 
 * Ejecutado y creado ~ Sabado, 6 Diciembre 2014 13:08:58
 *
 * @package    dml
 * @subpackage login
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    Symfony 1.4.20
 */
class loginActions extends sfActions {

    /**
     * Ejecuta una accion en el indice(nombre) del controlador
     *
     * @param sfWebRequest $request Recibe un objecto de la peticion
     */
    public function executeIndex(sfWebRequest $request) {
        $this->form = new LoginForm();
        if ($request->isMethod(sfRequest::POST)):
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()):
                $user = Doctrine_Core::getTable('DmlPersonas')
                        ->findByDql(
                            'pe_email = ? AND pe_password = ?',
                            array(
                                $this->form->getValue('usr'), 
                                $this->form->getValue('pwd')
                            )
                        )
                        ->getFirst();
                if ($user->count()) {
                    $this->getUser()->setAuthenticated(true);
                    $this->getUser()->setAttribute('id', $user->getId());
                    $this->getUser()->setAttribute('email', $user->getPeEmail());
                    $this->getUser()->addCredential('user', 'admin');
                    $this->redirect('movimientos/index');
                }
                $this->executeLogout();
            endif;
        endif;
    }

    /**
     * Ejecuta una accion la cual es retornar al formulario de inicio de sesion
     */
    public function executeLogout() {
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->getAttributeHolder()->clear();
        $this->getUser()->clearCredentials();
        $this->redirect('@login');
    }

}