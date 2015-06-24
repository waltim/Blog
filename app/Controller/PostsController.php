<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {

    public $name = 'Posts';
    public $fixtures = array('app.post');

    public function index() {
        $this->Post->recursive = 0;
        $this->set('posts', $this->paginate());
    }

    public function view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('A notícia está inválida.'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('novidade', $this->Post->find('first', $options));
    }


    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('A notícia foi salva com sucesso!'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('A notícia pode ser salva, por favor tente novamente.'), 'flash/error');
            }

        }

    }

    public function edit($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('A notícia está inválida.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('A notícia foi salva com sucesso!'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('A notícia não pode ser salva, por favor tente novamente.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('A notícia está inválida.'));
        }
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('A notícia foi apagada.'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('A notícia não pode ser apagada.'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }





}