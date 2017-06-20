<?php

App::uses('AppModel', 'Model');

class Brumit4 extends AppModel {

    public $useTable = 'brumit4';
    
    public $belongsTo = array(
        'Brumit3' => array(
            'className' => 'Brumit3',
            'foreignKey' => 'id_parentid'
        )
    );
    
    public $hasMany = array(
        'Lokality' => array(
            'className' => 'Lokality',
            'foreignKey' => 'id_brumit4'
        )
    );
    
}