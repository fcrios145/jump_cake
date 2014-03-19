<?php

class NewsController extends AppController {

    public function admin_index() {
        $this->set('news', $this->News->find('all'));
    }

    public function admin_view() {

    }
}

?>