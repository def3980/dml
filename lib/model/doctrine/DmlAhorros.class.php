<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlAhorros
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class DmlAhorros extends BaseDmlAhorros {

    // Metodo __toString() que ayuda a visualizar datos 
    // como clase padre hacia cualquier clase que herede 
    // de ella. Descomenta dicha funcion cuando sea necesario
    public function __toString() {
        $numCta = str_replace("_", "&nbsp;&nbsp;", str_pad($this->getAhNumeroCuenta(), 11, "_", STR_PAD_LEFT));
        return $numCta;
    }

}