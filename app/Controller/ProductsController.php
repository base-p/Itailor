<?php

App::uses('Controller', 'Controller');

class ProductsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index(){
            $this->layout = 'default3';
            
            }
    
    
    public function addproducts(){
            $this->layout = 'admin';
            $this->set('posts', $this->products->find('all'));
            }
    
    public function add(){
            $this->layout = 'default2';
            $products = $this->Products->newEntity();
                if ($this->request->is('posts')) {
                    $products = $this->Products->patchEntity($products, $this->request->getData());
                        if ($this->Products->save($products)) {
                            $this->Flash->success(__('Your Post has been saved.'));
                    }else{
                    $this->Flash->error(__('Unable to add your post.'));}
                }
            $this->set('products', $products);
        }

    
    
}
   



