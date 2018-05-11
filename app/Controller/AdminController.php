<?php

App::uses('AppController', 'Controller');

class AdminController extends AppController {
    
    public $helpers = array('Html', 'Form');
    public function addproducts() {
    $this->layout = 'admin';
    }
    public function index() {
        $this->layout = 'dashboard';
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        }
    public function adduser() {
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
   



