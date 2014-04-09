<?php
class AuthorsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function admin_index() {
        $this->_isAuthorized('admin');
        $this->layout = false;
        $this->set('authors', $this->Author->find('all'));
    }

    public function admin_add() {
        $this->_isAuthorized('admin');
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->Author->create();
            if ($this->Author->save($this->request->data)) {
                $this->Session->setFlash(__('Author guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to save.'));
        }
    }

    public function admin_view($id)
    {
        $this->_isAuthorized('admin');
        $this->layout = false;


        if (!$id) {
            throw new NotFoundException(__('Not found'));
        }
        $author = $this->Author->findById($id);
        if (!$author) {
            throw new NotFoundException(__('Not found'));
        }
        $this->set('news', $author);
    }

    public function admin_edit($id = null) {
        $this->_isAuthorized('admin');
        $this->layout = false;
        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $author = $this->Author->findById($id);
        if (!$author) {
            throw new NotFoundException(__('Invalid'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Author->id = $id;
            if ($this->Author->save($this->request->data)) {
                $this->Session->setFlash(__('Your data has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your data.'));
        }

        if (!$this->request->data) {
            $this->request->data = $author;
        }
    }

    public function admin_delete($id) {
        $this->_isAuthorized('admin');
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Author->delete($id)) {
            $this->Session->setFlash(
                __('El autor con el id: %s ha sido borrado :/.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

    protected function _isAuthorized($role_required) {
        if ($this->Auth->user('role') != $role_required) {
            $this->Session->setFlash("your message here...");
            return $this->redirect($this->referer());
        }
    }

}
?>