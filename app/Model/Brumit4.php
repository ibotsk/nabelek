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
    
    public function getList() {
        return $this->find('list', array(
            'fields' => array('Brumit4.id', 'Brumit4.meno'),
            'recursive' => 0
            )
                );
    }
    
}