<?php
namespace router;
use router\Uri as Uri;
use Exception;

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
		if($this->_controller!='')
			$c = 'controllers\\'.$this->_controller;
		else
			$c = 'controllers\DefaultController';
		$ctrl = new $c;
		if($this->_action=='')
			$ac = 'actionIndex';
		else{
			$ac = $this->_action;
			if(!isset($ctrl->_actions[$this->_action]))
				throw new Exception("Action '".$this->_action."' is not defined in '".$this->_controller."'!");
				
		}
		
		$ctrl->{$ac}();

	}

	private function parse_url($uri_obj){
		echo __METHOD__.PHP_EOL;
		$url_arr = explode("/",ltrim($uri_obj->get_url(),"/"));
		$url_parts_cnt = count($url_arr);
		if($url_parts_cnt==1 && $url_arr[0]!='')
			$this->_controller = ucfirst($url_arr[0].'Controller');
		if($url_parts_cnt==2 && $url_arr[1]!=''){
			$this->_controller = ucfirst($url_arr[0].'Controller');
			$this->_action = 'action'.ucfirst($url_arr[1]);
		}
	}

}