<?php

App::uses('Controller', 'Controller');

class AccountsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
    $this->layout = 'default2';
    }
    
    public function login() {
        $this->layout = 'default3';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
              return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    
    public function checkout() {
        $this->layout = 'default3';
	}
    
    public function editaddress() {
        $this->layout = 'default3';
	}
    
}
   



