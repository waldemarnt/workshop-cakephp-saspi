<?php


class Category extends AppModel 
{
	

	public $hasAndBelongsToMany = array(
        'Post' =>
            array(
                'className' => 'Post',
                'joinTable' => 'posts_categories',
                'foreignKey' => 'category_id',
                'associationForeignKey' => 'post_id',
                'unique' => true
            )
    );
}