<?php
namespace router;
use router\Uri as Uri;
//use controllers;

class Dispatcher implements IDispatcher
{
	protected $_module;
	protected $_controller;
	protected $_action;


	public function __construct(Uri $_uri){
		echo __METHOD__.PHP_EOL;
		$this->parse_url($_uri);
	}

	public function dispatch(){
		echo __METHOD__.PHP_EOL;
		$c = 'controllers\\'.$this->_controller;
		$ctrl = new $c;
		print_r($ctrl);
	}

	private function parse_url($uri_obj){
		echo __METHOD__.PHP_EOL;
		$url_arr = explode("/",ltrim($uri_obj->get_url(),"/"));
		//print_r($url_arr); 
		$url_parts_cnt = count($url_arr);
		if($url_parts_cnt==1 && $url_arr[0]!='')
			$this->_controller = ucfirst($url_arr[0].'Controller');
		if($url_parts_cnt==2 && $url_arr[1]!=''){
			$this->_controller = ucfirst($url_arr[0].'Controller');
			$this->_action = 'action'.ucfirst($url_arr[1]);
		}
	}

}