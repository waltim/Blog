<?php
App::uses('Post', 'Model');


class PostTest extends CakeTestCase
{


    public $fixtures = array(
        'app.post'
    );


    public function setUp()
    {
        parent::setUp();
        $this->Post = ClassRegistry::init('Post');
    }


    public function testFind()
    {
        $result = $this->Post->find('all');
        $expected = array(
            array(
                '_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
                'hoge' => 'Lorem',
                'created' => '2015-06-24 19:24:16',
                'modified' => '2015-06-24 19:24:16'
            ),
            array(
                '_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet 2',
                'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
                'hoge' => 'Lorem 2',
                'created' => '2015-06-24 19:24:16',
                'modified' => '2015-06-24 19:24:16'
            ),
            array(
                '_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet 3',
                'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
                'hoge' => 'Lorem 3',
                'created' => '2015-06-24 19:24:16',
                'modified' => '2015-06-24 19:24:16'
            ),
        );
        $this->assertEqual($result, $expected);
    }

}
