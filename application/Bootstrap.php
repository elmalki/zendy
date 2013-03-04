<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initRoutes()
{
 	$frontController=Zend_Controller_Front::getInstance();
	$router=$frontController->getRouter();
	$route=new Zend_Controller_Router_Route_Static ('yassine',array('controller' => 'about','action' => 'contact' ));
	$router->addRoute('yassine',$route);
 }
}