<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:41:57"
 */

/**
 * DmlPersonas
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class DmlPersonas extends BaseDmlPersonas {

    // Metodo __toString() que ayuda a visualizar datos 
    // como clase padre hacia cualquier clase que herede 
    // de ella. Descomenta dicha funcion cuando sea necesario
    public function __toString() {
        return $this->getPeCedula();
    }
    
    /**
     * FullName, devuelve la concatenacion de 2 campos desde la bdd que son nombres
     * y apellidos. Esta funcion es usada en el sfWidgetFormDoctrineChoice de la clase
     * BaseDmlPagosForm
     * 
     * @return type string pe_nombres pe_apellidos
     */
    public function getFullName() {
        return "{$this->getPeNombres()} {$this->getPeApellidos()}";
    }

}