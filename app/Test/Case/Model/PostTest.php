<?php
App::uses('Post', 'Model');


class PostTest extends CakeTestCase {


	public $fixtures = array(
		'app.post'
	);


	public function setUp() {
		parent::setUp();
		$this->Tipo = ClassRegistry::init('Post');
	}


	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
