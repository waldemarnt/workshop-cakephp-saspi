<?php
App::uses('AppModel', 'Model');
App::uses('Media', 'Plugin');

/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'author' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

    public $hasAndBelongsToMany = array(
        'Category' =>
            array(
                'className' => 'Category',
                'joinTable' => 'posts_categories',
                'foreignKey' => 'post_id',
                'associationForeignKey' => 'category_id',
                'unique' => true
            )
    );

    public $hasMany = array(
    	'Media'=>
	    	array(
	    		'className'=>'Media.Media',
	    		'foreignKey'=>'model_id',
	    		'conditions'=>array(
	    				'Media.model_name' => 'Post'
	    			)
	    	)
    );

}
