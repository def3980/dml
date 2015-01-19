<?php

class myUser extends sfBasicSecurityUser {

//    public function getTimedOut() {
//        return $this->timedout;
//    }
//    public function initialize(sfEventDispatcher $dispatcher, sfStorage $storage, $options = array()) {
//        if ($this->isTimedOut()) {
//            sfContext::getInstance()->getUser()->setAuthenticated(false);
//            sfContext::getInstance()->getUser()->getAttributeHolder()->clear();
//            sfContext::getInstance()->getController()->redirect('@homepage');
//        }
//    }
//    public function initialize($context, $parameters = array()) {
//        parent::initialize($context, $parameters = array());
//        if($this->isTimedOut()) {
//            sfContext::getInstance()->getUser()->setAuthenticated(false);
//            sfContext::getInstance()->getUser()->getAttributeHolder()->clear();
//            sfContext::getInstance()->getController()->redirect('@homepage');
//        }
//    }
//    public function __construct() {
//        if ($this->getTimedOut()) {
//            sfContext::getInstance()->getUser()->setAuthenticated(false);
//            sfContext::getInstance()->getUser()->getAttributeHolder()->clear();
//            sfContext::getInstance()->getController()->redirect('@homepage');
//        }
//    }
//    
//    public function getTimedOut() {
//        return $this->timedout;
//    }

}