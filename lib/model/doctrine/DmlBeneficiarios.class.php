<?php

/**
 * Fecha creacion : "Lunes, 5 Enero 2015 09:00:56"
 */

/**
 * DmlBeneficiarios
 * 
 * Esta clase ha sido auto-generada por el Framework ORM de Doctrine
 * 
 * @package    dml
 * @subpackage model
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class DmlBeneficiarios extends BaseDmlBeneficiarios {

    // Metodo __toString() que ayuda a visualizar datos 
    // como clase padre hacia cualquier clase que herede 
    // de ella. Descomenta dicha funcion cuando sea necesario
    //public function __toString() {}

        
    /**
     * getBeneficiarios, devuelve una lista de beneficiarios que reciben beneficio
     * del pago que el usario esta registrando. Esta funcion es usada en el 
     * sfWidgetFormDoctrineChoice de la clase BaseDmlPagosForm
     * 
     * @return type string be_nombres_identificativos
     */
    public function getBeneficiarios() {
        return "{$this->getBeNombresIdentificativos()}";
    }

}