<?php
namespace app;
use ReflectionClass;

class Controller
{
	public $_refl;
	public $_methods = [];
	public $_actions = [];

	public function __construct(){
		echo __METHOD__.PHP_EOL;
		$this->_refl = new ReflectionClass(get_class($this));
		
		$this->get_actions();
		
		//print_r($this->_actions);

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
		echo __METHOD__.PHP_EOL;
	}
}