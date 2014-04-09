<?php

App::uses('CakeEmail', 'Network/Email');

Class Contact extends AppModel {

    public $validate = array(
        'name' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'Message' => 'Nombre requerido',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 5, 128),
                'required' => true,
                'mesage' => 'El nombre debe de contener al menos 5 letras'
            ),
        ),
        'email' => array(
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Porfavor ingresa un Email valido.'
            ),
            'between' => array(
                'rule' => array('between', 6, 60),
                'message' => 'Usernames must be between 6 to 60 characters'
            )
        ),
        'comment' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'Message' => 'Mensaje requerido',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 5, 1024),
                'required' => true,
                'mesage' => 'El nombre debe de contener al menos 5 letras'
            ),
        ),
    );

}

?>