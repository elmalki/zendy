<?php

 class Application_Model_Formulaire extends Zend_Form{

 public function __construct($options = null)
 {

parent::__construct($options);
 $this->setName('login');
 $this->setMethod('post');
 $this->setAction('form');

 $email = new Zend_Form_Element_Text('email');
 $email->setAttrib('size', 35);
 $email->setRequired(true);
 $email->addValidator('emailAddress');
 $email->addErrorMessage('e-mail non valide veuillez vérifier vos donnez');

 $pswd = new Zend_Form_Element_Password('pswd');
 $pswd->setAttrib('size', 35);


 $txtA=new Zend_Form_Element_TextArea('txtA');
$txtA->setAttrib('cols',25);
$txtA->setAttrib('rows',10);
$txtA->setRequired(true);

 $submit = new Zend_Form_Element_Button('submit');
 $submit->removeDecorator('DtDWrapper');
 $submit->setAttrib('class',"btn btn-inverse");
 $submit->setAttrib('type','submit');

 $this->setDecorators( array( array('ViewScript',array('viewScript' => 'form_.phtml'))));
 $this->addElements(array($email, $pswd,$txtA ,$submit));

 } 

 }