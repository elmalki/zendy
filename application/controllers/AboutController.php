<?php

class AboutController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->pageTitle="Action TEST REUSSIT";
    }

    public function contactAction()
    {
        $email=$this->_request->getPost('email');
        $msg=$this->_request->getPost('message');
        $this->view->email=$email;
        $this->view->msg=$msg;
    }

    public function formAction()
    {
        // action body
    }


}





