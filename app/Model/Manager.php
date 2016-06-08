<?php

use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manager
 *
 * @author Florina
 */
class Manager extends AppModel {
    //put your code here
    var $name = 'Manager';
    
    protected function _setPassword($password) {
        //return (new DefaultPasswordHasher)->hash($password);
        return Security::hash($password);
    }
    
    
}
