<?php
namespace app;
use app\View;
use ReflectionClass;

class Controller
{
	public $_refl;
	public $_methods = [];
	public $_actions = [];
	public $_layout;
	public $_view;

	public function __construct(){
		$this->_refl = new ReflectionClass(get_class($this));
		
		$this->get_actions();
		$this->init_view();
		$this->init();

	}

	public function init(){
		
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
}