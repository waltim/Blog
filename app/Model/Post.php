<?php

class Post extends AppModel {

    public $name = 'Post';
	public $primaryKey = '_id';

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
        'hoge' => array(
            'rule' => 'notEmpty'
        )
    );

}