<?php
Class ItemsController extends AppController {
    public $uses = array('Items');

    public function all() {
        $this->set('items', $this->Items->find('all'));
    }

    public function admin_index()
    {
        $this->set('items', $this->Items->find('all'));
    }

    public function admin_view($id)
    {
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
        if ($this->request->is('post')) {
            $this->Items->create();
            if ($this->Items->save($this->request->data)) {
                $this->Session->setFlash(__('Item Guardado.'));
                return $this->redirect(array('action' => 'admin_index'));
            }
            $this->Session->setFlash(__('No fue posible guardar tu Item :('));
        }
    }

    public function admin_edit($id = null) {
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




}
?>