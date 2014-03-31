<?php
class UsersController extends AppController {

        public $components = array(
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

    public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' )
    );



    public function login() {

        //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));
        }

        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->paginate = array(
            'limit' => 6,
            'order' => array('User.username' => 'asc' )
        );
        $users = $this->paginate('User');
        $this->set(compact('users'));
    }


    public function add() {
        if ($this->request->is('post')) {

            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {

        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            $this->Session->setFlash('Invalid User ID Provided');
            $this->redirect(array('action'=>'index'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been updated'));
                $this->redirect(array('action' => 'edit', $id));
            }else{
                $this->Session->setFlash(__('Unable to update your user.'));
            }
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function delete($id = null) {

        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }

        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function activate($id = null) {

        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }

        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }

        public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
    }

}
?>











<?php
//
//// app/Controller/UsersController.php
//class UsersController extends AppController {
//
////    public $components = array(
////        'Session',
////        'Auth' => array(
////            'loginRedirect' => array(
////                'controller' => 'news',
////                'action' => 'index'
////            ),
//////            'authenticate' => array(
//////                'Form' => array(
//////                    'passwordHasher' => array(
//////                        'className' => 'Simple',
//////                        'hashType' => 'sha256'
//////                    )
//////                )
//////            ),
////            'logoutRedirect' => array(
////                'controller' => 'news',
////                'action' => 'index',
////                'home'
////            )
////        )
////    );
//
//    public $components = array(
//        'Session',
//        'Auth' => array(
//            'loginRedirect' => array(
//                'controller' => 'news',
//                'action' => 'index'
//            ),
//            'logoutRedirect' => array(
//                'controller' => 'news',
//                'action' => 'index',
//            )
//        )
//    );
//
//
//    public function add() {
//        if ($this->request->is('post')) {
//            $this->User->create();
//            if ($this->User->save($this->request->data)) {
//                $this->Session->setFlash(__('The user has been saved'));
//                return $this->redirect(array('action' => 'index'));
//            }
//            $this->Session->setFlash(
//                __('The user could not be saved. Please, try again.')
//            );
//        }
//    }
//
//    public function index() {
//        $this->User->recursive = 0;
//        $this->set('users', $this->paginate());
//    }
//
////    public function login() {
////        if ($this->Session->read('Auth.User')){
////            /*Si ya esta logueado que se regrese al index
////            O en este caso al admin del usuario para mofidicar sus datos en caso de tenerlos*/
////            return $this->redirect(array('controller' => 'news', 'action' => 'index'));
////        }
////
////        if ($this->request->is('post')) {
////            if ($this->Auth->login()) {
////                return $this->redirect($this->Auth->redirect());
////            }
////            $this->Session->setFlash(__('Invalid username or password, try again'));
////        }
////    }
//
//    public function login() {
//        if ($this->request->is('post')) {
//            if ($this->Auth->login()) {
//                return $this->redirect($this->Auth->redirect());
//            }
//            $this->Session->setFlash(__('Invalid username or password, try again'));
//        }
//    }
//
//    public function beforeFilter() {
//        parent::beforeFilter();
//        // Allow users to register and logout.
//        $this->Auth->allow('add', 'logout');
//    }
//
//    public function logout() {
//        return $this->redirect($this->Auth->logout());
//    }
//
//}
//
//?>

