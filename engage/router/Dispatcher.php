<?php
namespace router;
use router\Uri as Uri;
use app\Request;
use controllers\DefaultController;
use Exception;

class Dispatcher implements IDispatcher
{
	protected $_module;
	protected $_controller;
	protected $_action;
	protected $_args;
	protected $_controllers;
	private $_class_mapping;
	private $_request;

	public function __construct(){
		$this->_uri = new Uri;
		$this->_request = new Request;
		$this->parse_url($this->_uri);
		$this->_args = $this->_request->args();
		$this->set_class_mapping();
		$this->set_controllers();
	}

	public function dispatch(){
		if($this->_controller!='' && in_array($this->_controller,$this->_controllers))
			$c = 'controllers\\'.$this->_controller;
		else
			$c = 'controllers\DefaultController';
		$ctrl = new $c;
			
		if($this->_action=='')
			$ac = 'actionIndex';
		else{
			$ac = $this->_action;
			if(!isset($ctrl->_actions[$this->_action])){
				$ctrl = new DefaultController;
				$ac = 'action404';
			}
				
		}

		$ctrl->{$ac}();

	}

	private function parse_url($uri_obj){
		$url_arr = explode("/",ltrim($uri_obj->get_url(),"/"));
		$url_parts_cnt = count($url_arr);
		if($url_parts_cnt>2)
			throw new Exception("Modules not supported yet!");
		if($url_parts_cnt==1 && $url_arr[0]!='')
			$this->_controller = ucfirst($url_arr[0].'Controller');
		if($url_parts_cnt==2 && $url_arr[1]!=''){
			$this->_controller = ucfirst($url_arr[0].'Controller');
			$this->_action = 'action'.ucfirst($url_arr[1]);
		}
	}

	private function set_class_mapping(){
		$this->_class_mapping = include(AUTOLOADS_PATH.'class_mapping.php');
	}

	private function set_controllers(){
		$files = scandir($this->_class_mapping['controllers']);
		$controllers = [];
		foreach($files as $file){
			if($file!='.' && $file!='..' && strpos($file,"Controller.php")!==false)
				$controllers[] = strtr($file,['.php'=>'']);
		}
		$this->_controllers = $controllers;
	}

}