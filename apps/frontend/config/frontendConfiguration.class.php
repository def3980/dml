<?php

class frontendConfiguration extends sfApplicationConfiguration {

//    public function configure() {
//        $this->dispatcher->connect(
//            'context.load_factories',
//            array($this, 'isAuthenticatedAjaxRequest')
//        );
//    }
    
    /**
     * This method checks if an Ajax request comes in and
     * if the session has not expired.
     * If so, a custom header is returned (a standard 401
     * might get trapped and handled by the browser)
     * and a javascript "ajaxSuccess" listener will detect this
     * header and redirect to the webroot.
     *
     * @param sfEvent $event
     */
//    public function isAuthenticatedAjaxRequest(sfEvent $event) {
//        $context = $event->getSubject();
//        $request = $context->getRequest();
//        if ($request->isXmlHttpRequest()) {
//            $user = $context->getUser();
//            if ($user->isAuthenticated() === false) {
//                header('NOT_AUTHORIZED: 499');
//                exit();
//            }
//        }
//    }

}