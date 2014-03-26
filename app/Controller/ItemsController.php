<?php
Class ItemsController extends AppController {
    public $uses = array('Items');
    public function all() {
        $this->set('items', $this->Items->find('all'));
    }
}
?>