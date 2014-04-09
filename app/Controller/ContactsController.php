<?php

Class ContactsController extends AppController
{

    var $components = array('Session');

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
                $this->Session->setFlash(__('Gracias por su comentario', null),
                    'default',
                    array('class' => 'alert alert-success'));

                /*Email*/

                App::uses('CakeEmail', 'Network/Email');
                $email = new CakeEmail('thedead');
                $email->from('thedead@alwaysdata.net');
//                $email->from('fcrios145@gmail.com');
                $email->to($this->request->data['Contact']['email']);
                $email->subject('The Dead Ate My Friends | Contacto');
                $email->send("Gracias por ponerse en contacto con nosotros"."\n\n".$this->request->data['Contact']['name']."\n".$this->request->data['Contact']['comment']);

                /*Fin Email*/

                return $this->redirect(
                    array('controller' => 'News', 'action' => 'index')
                );
            }
            $this->Session->setFlash(__('Lo sentimos no pudimos enviar tu comentario =('));
        }
    }
}

?>