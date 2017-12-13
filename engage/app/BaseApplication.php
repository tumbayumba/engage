<?php
/**
* 
*/
namespace app;

class BaseApplication
{
	
	function __construct()
	{
		echo __METHOD__.PHP_EOL;
	}

	public function run(){
		echo __METHOD__.PHP_EOL;
	}
}