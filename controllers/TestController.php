<?php
namespace controllers;
use controllers\BaseController;

class TestController extends BaseController
{
	
	public function __construct(){ 
		parent::__construct();
		echo __METHOD__.PHP_EOL; 
		//$this->test();
		//$app = new app\Application; 
	}

	public function actionView(){
		echo __METHOD__.PHP_EOL; 
		//print_r($this->get_methods());
	}

}