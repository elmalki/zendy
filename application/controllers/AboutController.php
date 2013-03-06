<?php

class AboutController extends Zend_Controller_Action
{
    private $userf;
    public function init()
    {
    }

    public function indexAction()
    {
        $this->view->pageTitle="ACTION  TEST REUSSIT";
    }

    public function contactAction()
    {
        $email=$this->_request->getPost('email');
        $msg=$this->_request->getPost('message');
        $this->view->email=$email;
        $this->view->msg=$msg;
        $form=new Application_Model_Formulaire();
     
        $this->view->form=$form;
       if($form->isValid($this->_request->getpost())){}//darori
      $userTable=new  Application_Model_DbTable_User();
      $select=$userTable->select()->where('id_user= ?',48);
      $this->view->user=$userTable->fetchAll($select);

    }

      

    public function formAction()
    {
        // action body

    
    }


}





