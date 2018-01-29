<?php
namespace app;

class Request
{
	protected $_method;
	protected $_args;

	public function __construct(){
		$this->_method = $_SERVER['REQUEST_METHOD'];
		$this->extract_args();
	}

	public function method(){
		return $this->_method;
	}

	public function extract_args(){
		switch($this->_method){
			case 'GET' : $this->_args = $_GET;break;
			case 'POST' : $this->_args = $_POST;break;
		}
	}

	public function args(){
		return $this->_args;
	}

	public function set_args($args){
		$this->_args = $args;
	}

	public function isPost(){
		return $this->_method=='POST' ? true : false;
	}

}