<?php
class AuthorsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function admin_index() {
        $this->set('authors', $this->Author->find('all'));
    }

    public function admin_add() {
        if ($this->request->is('author')) {
            $this->Author->create();
            if ($this->Author->save($this->request->data)) {
                $this->Session->setFlash(__('Author guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to save.'));
        }
    }
}
?>