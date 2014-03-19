<?php

class NewsController extends AppController {

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

}

?>