<?php

class NewsController extends AppController
{

    public $uses = array('News', 'Author', 'Comment', 'User');

//    public $components = array('Paginator');

    public $paginate = array(
        'limit' => 4,
        'order' => array(
            'News.created' => 'desc'
        )
    );

        public $components = array(
        'Paginator',
            'Session',
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



    public function index()
    {
        $this->set('news', $this->News->find('all',
            array(
                'order' => array('News.created DESC'),
                'limit' => 3,
            )
        ));

    }

    public function admin_index()
    {
        $this->set('news', $this->News->find('all'));
    }

    public function admin_view($id)
    {
        if (!$id) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $noticia = $this->News->findById($id);
        if (!$noticia) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $this->set('news', $noticia);
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
        $this->set('authors', $this->Author->find('list', array('fields' => array('id', 'nick'))
        ));

    }

    //Listar noticias de X en X
    public function all()
    {
        $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('News');
        $this->set('datas', $data);
    }

    /*Vista para una noticia en especifico con sus respectivos comentarios*/
    public function view($id) {
        if(!$id) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $noticia = $this->News->findById($id);
        if (!$noticia) {
            throw new NotFoundException(__('Noticia no encontrada'));
        }
        $this->set('news', $noticia);

        /*Buscar Comentarios - Filtrarlos por el id de la noticia - Mandarlos*/
        $comentarios = $this->Comment->find('all',
            array(
                'conditions' => array('news_id' => $id
            )));
        $this->set('comentarios', $comentarios);

        //Agregar comentario
        if ($this->request->is('post')) {
            $this->request->data['Comment']['news_id'] = $id;
            $this->request->data['Comment']['user_id'] = $this->Session->read('Auth.User.id');
            $this->Comment->create();
            if ($this->Comment->save($this->request->data)) {
                $this->Session->setFlash(__('Comentario guardado.'));
                return $this->redirect($this->referer());
            }
            $this->Session->setFlash(__('No fue posible guardar tu comentario =('));

        }
    }

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow();
    }


}

?>

