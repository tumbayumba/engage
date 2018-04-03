<?php
namespace controllers;
use controllers\BaseController;
use models\User;
use app\UserIdentity;
use app\validators\StringValidator;

class LoginController extends BaseController
{
	public $_user;
	
	public function __construct(){ 
		parent::__construct();
		$this->_user = new User;
		//UserIdentity::authorize();
		//UserIdentity::guest();
		//echo UserIdentity::role('admin');exit;
	}

	public function actionIndex(){
		if($this->request()->isPost()){
			$args = $this->request()->args();

			//$m = $this->load_model('models\User');
			//$this->_user->validate($args);
			//$v = new StringValidator;
			//$v->validate();

			$db = $this->_user->db();
			$db->where('login',$args['login']);
			$db->where('password',$args['password']);
			$user = $db->get('user',1);
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