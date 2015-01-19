<?php

/**
 * json actions.
 * 
 * Ejecutado y creado ~ Sabado, 20 Diciembre 2014 16:14:16
 *
 * @package    dml
 * @subpackage json
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    Symfony 1.4.20
 */
class jsonActions extends sfActions {

    /**
     * Ejecuta una accion en el controlador y devuelve un pagin renderizada
     * en formato json
     *
     * @param sfWebRequest $request Recibe un objeto de la peticion
     */
    public function executeJson(sfWebRequest $request) {
        // ['module'] y ['action'] vienen como parametros adicionales en el $request
        // asi que no son necesarios
        unset($request['module'], $request['action']);
        $this->setLayout(false);
        $this->getResponse()->setHttpHeader('Content-Type', 'application/json; charset=utf-8');
        return $this->renderText(json_encode($request->getParameterHolder()->getAll()));
    }

}