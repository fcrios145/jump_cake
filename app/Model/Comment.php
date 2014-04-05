<?php

class Comment extends AppModel {
    public $belongsTo = array(
        'News',
        'User'
    );

    public $validate = array(
        'text' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => array('Texto requerido'),
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 5, 128),
                'required' => false,
                'message' => 'El texto debe contener al menos 5 letras y maximo 128',
            ),
        ),
    );
}

?>