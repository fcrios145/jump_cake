<?php

class CommentsController extends AppController
{
    public $uses = array('News', 'Author', 'Comment', 'User');

    public $components = array(
        'Paginator',
        'Session',
        'RequestHandler',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'news',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'news',
                'action' => 'index',
            )
        )
    );

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

    public function admin_index()
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        $this->set('comments', $this->Comment->find('all'));
    }

    public function admin_view($id)
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if (!$id) {
            throw new NotFoundException(__('Comentario no encontrado'));
        }
        $comment = $this->Comment->findById($id);
        if (!$comment) {
            throw new NotFoundException(__('Comentario no encontrado'));
        }
        $this->set('comment', $comment);
    }

    public function admin_add()
    {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if ($this->request->is('post')) {
            $this->Comment->create();
            if ($this->Comment->save($this->request->data)) {
                $this->Session->setFlash(__('Comentario Guardado.'));
                return $this->redirect(array('action' => 'admin_index'));
            }
            $this->Session->setFlash(__('Imposiburu :('));
        }
        $this->set('users', $this->User->find('list', array('fields' => array('id', 'username'))));
        $this->set('news', $this->News->find('list', array('fields' => array('id', 'titulo'))));

    }

    public function admin_edit($id = null) {
        $this->_isAuthorized('admin');
        $this->layout = 'cake';
        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $comment = $this->Comment->findById($id);
        if (!$comment) {
            throw new NotFoundException(__('Invalid'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Comment->id = $id;
            if ($this->Comment->save($this->request->data)) {
                $this->Session->setFlash(__('Your data has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your data.'));
        }

        if (!$this->request->data) {
            $this->request->data = $comment;
        }
        $this->set('users', $this->User->find('list', array('fields' => array('id', 'username'))));
        $this->set('news', $this->News->find('list', array('fields' => array('id', 'titulo'))));
    }

    public function admin_delete($id) {
        $this->_isAuthorized('admin');
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Comment->delete($id)) {
            $this->Session->setFlash(
                __('El comentario con el id: %s ha sido borrado :/.', h($id))
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