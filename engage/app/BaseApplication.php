<?php
/**
* 
*/
namespace app;

class BaseApplication
{
	private static $_web_config;
	
	function __construct(){
		$this->set_wconfig();
		
	}

	public function set_wconfig(){
		self::$_web_config = include_once(WEB_CONFIG);
	}

	public static function load_wconfig(){
		return self::$_web_config;
	}

	public function run(){
		
	}
}