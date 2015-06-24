<?php

class Post extends AppModel {
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