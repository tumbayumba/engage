<?php
namespace app;
use app\Application;

class View
{
	private $_layout;
	private $_view_path;


	public function __construct(){
		$this->set_layout();
		$this->set_view_path();
	}

	public function set_layout($path=''){
		$this->_layout = $path!='' ? $path : Application::load_wconfig()['layout'];
	}

	public function get_layout(){
		return $this->_layout;
	}

	public function set_view_path($path=''){
		$this->_view_path = ($path!='') ? $path : BASE_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR;
	}

	public function get_view_path(){
		return $this->_view_path;
	}

	public function draw($alias,$params){
		extract($params);
		ob_start();
		include($this->get_view_path().$alias.'.php');
		$content = ob_get_contents();
		ob_end_clean();
		include_once $this->get_layout();
	}

	
}