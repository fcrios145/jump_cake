<?php

class Author extends AppModel {
    public $hasMany = 'News';

    public $validate = array(
        'nick' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre requerido',
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 5, 20),
                'required' => true,
                'message' => 'El nombre debe contener al menos 5 letras y maximo 20'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => "Nombre de autor existente =/"
            )
        ),
        'mail' => array(
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Porfavor inserta un email valido'
            ),
            'unique' => array(
                'rule' => array('isUniqueEmail'),
                'message' => 'Este email ya esta en uso',
            )
        )
    );

    function isUniqueEmail($check) {

        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'Author.id'
                ),
                'conditions' => array(
                    'Author.mail' => $check['mail']
                )
            )
        );

        if(!empty($email)){
            if(!empty($this->data[$this->alias]['id'])) {
                if($this->data[$this->alias]['id'] == $email['User']['id']){
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return true;
        }
    }
}

?>