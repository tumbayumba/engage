<?php
namespace controllers;
use controllers\BaseController;

class FooController extends BaseController
{
	public function __construct(){ 
		parent::__construct();
		echo __METHOD__.PHP_EOL; 
		
	}

	public function actionView(){
		echo __METHOD__.PHP_EOL; 
	}
}