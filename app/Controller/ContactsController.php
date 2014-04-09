<?php

Class ContactsController extends AppController {

    var $components = array('Session');

    public function add() {
        if ($this->request->is('post')) {
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
                $this->Session->setFlash(__('Gracias por su comentario', null),
                    'default',
                    array('class' => 'alert alert-success'));
                return $this->redirect(
                    array('controller' => 'News', 'action' => 'index')
                );
            }
            $this->Session->setFlash(__('Lo sentimos no pudimos enviar tu comentario =('));
        }
    }
}

?>