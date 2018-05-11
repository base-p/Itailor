<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends Model 
    {
		public $validate = array(
            'firstname' => array(
            'required' => array(
            'rule' => 'notBlank',
            'message' => 'This field is required'
                )
            ),
            'lastname' => array(
            'required' => array(
            'rule' => 'notBlank',
            'message' => 'This field is required'
            )
            ),
            'email' => array(
            'required' => array(
            'rule' => 'notBlank',
            'message' => 'A valid email address is required'
            )
            ),
            'password' => array(
            'required' => array(
            'rule' => 'notBlank',
            'message' => 'A password is required'
            )
            ),
        );
    
        public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
        }
        
    }
?>