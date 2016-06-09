<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

/**
 * Description of User
 *
 * @author Florina
 */
class User extends AppModel {
    public $validate = array(
        'email' => array(
          'required' => array(
              'rule' => 'notBlank',
              'message' => 'A email is required'
          )
      ),
        'password' => array(
            'required' => array(
               'rule' => 'notBlank',
               'message' => 'A password is required'
          )   
        ),
        'role_type' => array(
            'valid' => array (
                'rule' => array('inList', array('admin', 'manager')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
    /* Hashing the users password */
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
