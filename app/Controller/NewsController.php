<?php

class NewsController extends AppController {

    public $uses = array('News','Author');

    public function index() {
        $this->set('news', $this->News->find('all',
            array(
                'order' => array('News.created DESC'),
                'limit' => 3,
            )
        ));

    }

    public function admin_index() {
        $this->set('news', $this->News->find('all'));
    }

    public function admin_view($id) {
        if (!$id) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $noticia = $this->News->findById($id);
        if(!$noticia) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $this->set('news',$noticia);
    }

    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('Noticia Guardada.'));
                return $this->redirect(array('action' => 'admin_index'));
            }
            $this->Session->setFlash(__('No fue posible guardar tu noticia :('));
        }
        $this->set('authors', $this->Author->find('list', array('fields' => array('id','nick'))
        ));

    }

    //Listar noticias de 10 en 10
    public function all() {
        $this->set('news', $this->News->find('all',
            array(
                'order' => array('News.created DESC'),
            )
        ));
    }

}

?>