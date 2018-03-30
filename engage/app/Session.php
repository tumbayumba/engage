<?php
namespace app;

class Session 
{
	public function set($key,$value){
		$_SESSION[$key] = $value;
	}

	public function get($key){
		return $_SESSION[$key];
	}
}