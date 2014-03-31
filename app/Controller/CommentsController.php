<?php

class CommentsController extends AppController
{

    public function add($id)
    {
        if ($this->request->is('POST')) {
            $this->Comment->create();
            if ($this->Comment->save($this->request->data)) {
                $this->Session->setFlash(__('Comentario guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No fue posible guardar tu comentario =('));
        }
    }
}

?>