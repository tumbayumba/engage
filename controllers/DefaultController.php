<?php
namespace controllers;
use controllers\BaseController;

class DefaultController extends BaseController
{
	
	public function __construct(){ 
		echo __METHOD__.PHP_EOL; 
		//$app = new app\Application; 
	}

	public function actionView(){
		echo __METHOD__.PHP_EOL; 
	}

}