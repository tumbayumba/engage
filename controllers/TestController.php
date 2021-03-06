<?php
namespace controllers;
use controllers\BaseController;
use app\UserIdentity;

class TestController extends BaseController
{
	
	public function __construct(){ 
		parent::__construct();
	}

	public function actionIndex(){
		$this->render('test/index',['title'=>'Index']);
	}

	public function actionView(){
		$this->render('test/view',['title'=>'View','age'=>35,'fio'=>'Eric','other'=>[22,344,211]]);
	}

	public function actionJax(){
		if($this->request()->isPost()){
			$args = $this->request()->args();
			echo implode(":",$args);
		}
	}

}