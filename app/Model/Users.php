<?php

class Users extends Model 
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
    }
?>