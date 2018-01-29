<?php
namespace app;
use app\Application;
use app\View;
use ReflectionClass;
use app\Request;

class Controller
{
	public $_refl;
	public $_methods = [];
	public $_actions = [];
	public $_layout;
	public $_view;
	public $_request;

	public function __construct(){
		$this->_refl = new ReflectionClass(get_class($this));
		$this->_request = new Request;
		$this->get_actions();
		$this->init_view();
		$this->init();

	}

	public function init(){
		
	}

	public function beforeAction(){

	}

	public function request(){
		return $this->_request;
	}

	public function get_methods(){
		return $this->_methods = $this->_refl->getMethods();
	}

	public function get_actions(){
		$this->get_methods();
		foreach($this->_methods as $method)
			if(substr($method->name,0,6)=='action')
				$this->_actions[$method->name] = $method->name;
	}

	public function actionIndex(){
		
	}

	public function init_view(){
		return $this->_view = new View;
	}

	public function view(){
		return $this->_view;
	}

	public function render($alias,$params=[]){
		$this->view()->draw($alias,$params);

	}

	public function redirect($alias,$args=[]){
		$args_str = '';
		if(!empty($args)){
			$args_str .= '?';
			foreach($args as $name=>$value)
				$args_str .= $name."=".$value."&";
			$args_str = rtrim($args_str,"&");
		}
		$p_url = ($alias=='' || $alias=='/') ? $alias : '/'.$alias;
		header("Location: ".Application::load_wconfig()['domain'].$p_url.$args_str);
	}
}