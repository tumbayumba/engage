<?php
namespace models;
use models\Model;

class User extends Model 
{
	public $attributes = [
		'id' => [
			'label' => 'ID',
			'type' => 'number',
			'max_length' => 10,
			'hidden' => true,
			'required' => false,
		],
		'password' => [
			'label' => 'Password',
			'type' => 'string',
			'min_length' => 8,
			'max_length' => 25,
			'hidden' => false,
			'required' => true,
		],
		'login' => [
			'label' => 'Login',
			'type' => 'string',
			'min_length' => 4,
			'max_length' => 25,
			'hidden' => false,
			'required' => true,
		],
	];

	public function __construct(){ 
		parent::__construct();

	}

	
}