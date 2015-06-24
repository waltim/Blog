<?php
App::uses('PostsController', 'Controller');


class PostsControllerTest extends ControllerTestCase {


	public $fixtures = array(
		'app.post'
	);

	public function testIndex()
    {
        $results = $this->testAction('posts/index/');
        debug($results);
	}

	public function testAdd()
    {
        $data = array(
            'Post' => array(
                'title' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
                'hoge' => 'Lorem',
                'created' => '2015-06-24 19:24:16',
                'modified' => '2015-06-24 19:24:16'
            )
        );
        $results = $this->testAction('posts/add',array('data' => $data,'method' => 'post'));
        debug($results);
    }



	public function testEdit()
    {
        $results1 = $this->testAction('posts/edit/1');
        debug($results1);
        $data = array(
            'Post' => array(
                '_id' => 1,
                'title' => 'teste update',
                'body' => 'teste update do texto',
                'hoge' => 'update',
                'created' => '2015-06-24 12:10:30',
                'modified' => '2015-06-24 12:10:30'
            )
        );
        $results2 = $this->testAction('posts/edit',array('data' => $data,'method' => 'post'));
        debug($results2);
	}


	public function testDelete()
    {
        $results = $this->testAction('posts/delete/1');
        debug($results);
	}

}
