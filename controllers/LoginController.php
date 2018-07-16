<?php
namespace controllers;
use controllers\BaseController;
use models\User;
use app\UserIdentity;

/*
UserIdentity::authorize() - authorize user
UserIdentity::guest() - unauthorize user
UserIdentity::role('admin') - set role
*/

class LoginController extends BaseController
{
	public $_user;
	
	public function __construct(){ 
		parent::__construct();
		$this->_user = new User;
	}

	public function actionIndex(){
		if($this->request()->isPost()){
			$args = $this->request()->args();
			$user = $this->_user->getUser($args['login'],$args['password']);
			if(!empty($user)){
				UserIdentity::authorize();
				$this->redirect('/');
			}
		}
		$this->render('login/index',['title'=>'Sign In']);
	}

	public function actionLogout(){
		UserIdentity::guest();
		$this->redirect('login');
	}

}