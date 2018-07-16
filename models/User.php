<?php
namespace models;
use models\Model;

class User extends Model 
{
	/*public $attributes = [
		'id' => [
			'label' => 'ID',
			'type' => 'number',
			'max_length' => 10,
			'required' => false,
		],
		'password' => [
			'label' => 'Password',
			'type' => 'string',
			'min_length' => 8,
			'max_length' => 25,
			'required' => true,
		],
		'login' => [
			'label' => 'Login',
			'type' => 'string',
			'min_length' => 4,
			'max_length' => 25,
			'visible' => false,
			'required' => true,
		],
	];*/

	public function __construct(){ 
		parent::__construct();

	}

	public function getUser($login,$password){
		/*
		$db = $this->db();
		$db->where('login',$login);
		$db->where('password',$password);
		$user = $db->get('user',1);
		*/
		if($login=='admin' && $password=='1234')
			return [
				'id' => 1,
				'login' => 'admin',
				'password' => '1234',
			];
		else 
			return [];
	}

	
}