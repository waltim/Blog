<?php

class PostFixture extends CakeTestFixture {

	public $fields = array(
		'_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'body' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'hoge' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => '_id', 'unique' => 1)
        ),
        'tableParameters' => array(
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
            'engine' => 'InnoDB'
        )
    );


	public $records = array(
		array(
			'_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet 1',
            'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
            'hoge' => 'Lorem 1',
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



}
