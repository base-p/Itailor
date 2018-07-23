<?php

App::uses('Controller', 'Controller');

class UsersController extends AppController {

    public $uses = array();

    public $helpers = array('Html', 'Form');
    
    public function index() {
    
    }
    
    public function login() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
               return $this->redirect(array('controller'=>'products','action' => 'index'));
            }
            $this->Session->setFlash("Invalid Username and/or Password!",'myflash',['params'=>['class' => 'flasherror message']]);
             return $this->redirect(array('controller'=>'users','action' => 'index'));
        }
    }
    
    public function register() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $user_array = [];
            $user_array['User'] = [];
            $user_array['User']['username'] = $this->request->data['email_register'];
            $user_array['User']['password'] = $this->request->data['password_register'];
            
            $this->User->create();
            if ($this->User->save($user_array['User'])) {
                    //$email=$this->request->data['User']['username'];
                    //$ref_id=$this->request->data['User']['ref_id'];
                $this->Session->setFlash("Registration Successful. Proceed to Login",'myflash',['params'=>['class' => 'flashsuccess message']]);
                 return $this->redirect(array('controller'=>'users','action' => 'index'));
            }
            $this->Session->setFlash("Something went wrong!",'myflash',['params'=>['class' => 'flasherror message']]);
             return $this->redirect(array('controller'=>'users','action' => 'index'));
        }
    }
    
    
    public function admin_login() {
        $this->layout = 'default3';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
              return $this->redirect(array('controller'=>'products','action' => 'index'));
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
   



