<?php
namespace controllers;
use controllers\BaseController;

class DefaultController extends BaseController
{
	
	public function __construct(){ 
		parent::__construct();
	}

	public function actionIndex(){
		
		$this->render('default/index');
	}

}