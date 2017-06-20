<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP LokalityController
 * @author Matus
 */
class LocalitiesController extends AppController {
    
    public $uses = array('Lokality');
    public $components = array('RequestHandler');

    public function locations() {
        if ($this->request->is('ajax')) {
            
        }
    }

}
