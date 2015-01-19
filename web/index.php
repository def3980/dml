<?php

/**
 * Proyecto generado, configurado e instalado con el nombre:
 * 
 * dml
 *
 * @author  Oswaldo Rojas <def.3980@gmail.com>
 * @fecha   Viernes, 5 Diciembre 2014 12:20:38
 */


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();