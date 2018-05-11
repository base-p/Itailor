<?php

App::uses('Controller', 'Controller');

<<<<<<< HEAD:app/Controller/UsersController.php
class UsersController extends AppController {
=======
class AdminController extends AppController {
    ublic $uses = array();
>>>>>>> Obum001:app/Controller/AdminController.php
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
    
	public function admin_index() {
        $this->layout = 'dashboard';
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        }
    public function admin_adduser() {
        $this->layout = 'dashboard';
        if ($this->request->is('post')) {
        $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                ('The user could not be saved. Please, try again.')
            );
        }
    }
	
	
	
	
	
	
	
}
   



