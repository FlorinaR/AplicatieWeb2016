<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagersController
 *
 * @author Florina
 */
class ManagersController extends AppController {
    //put your code here
    public $helpers = array('Form');
    var $name = 'Managers';
    
    public function index() {
        $this->set('managers', $this->Manager->find('all'));
    }
    
    public function login() {
        
    } 
    
}
