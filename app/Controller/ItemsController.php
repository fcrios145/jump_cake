<?php

Class ItemsController extends AppController
{
    public $uses = array('Items');
    var $components = array('Session');


    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('all');
    }


    public function all()
    {
        $this->set('items', $this->Items->find('all'));
    }

    public function admin_index()
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        $this->set('items', $this->Items->find('all'));
    }

    public function admin_view($id)
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if (!$id) {
            throw new NotFoundException(__('Item encontrado'));
        }
        $item = $this->Items->findById($id);
        if (!$item) {
            throw new NotFoundException(__('item no encontrado'));
        }
        $this->set('item', $item);
    }

    public function admin_add()
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if ($this->request->is('post')) {
            $this->Items->create();
            if ($this->Items->save($this->request->data)) {
                $this->Session->setFlash(__('Item Guardado.'));
                return $this->redirect(array('action' => 'admin_index'));
            }
            $this->Session->setFlash(__('No fue posible guardar tu Item :('));
        }
    }

    public function admin_edit($id = null)
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $item = $this->Items->findById($id);
        if (!$item) {
            throw new NotFoundException(__('Invalid'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Items->id = $id;
            if ($this->Items->save($this->request->data)) {
                $this->Session->setFlash(__('Your data has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your data.'));
        }

        if (!$this->request->data) {
            $this->request->data = $item;
        }
    }

    protected function _isAuthorized($role_required)
    {
        if ($this->Auth->user('role') != $role_required) {
            $this->Session->setFlash("your message here...");
            return $this->redirect($this->referer());
        }
    }

    public function admin_delete($id) {
        $this->_isAuthorized('admin');
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Item->delete($id)) {
            $this->Session->setFlash(
                __('El Item con el id: %s ha sido borrado :/.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }


}

?>