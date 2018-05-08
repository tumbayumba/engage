<?php
namespace controllers;
use controllers\BaseController;
use models\User;
use app\UserIdentity;

class UserController extends BaseController
{
	public $_user;
	
	public function __construct(){ 
		parent::__construct();
		$this->view()->set_layout(BASE_PATH.'/views/layouts/main2.php');
		$this->_user = new User;
		if(!UserIdentity::is_auth())
			$this->redirect('default/404');
	}

	public function actionIndex(){
		$db = $this->_user->db();
		$users = $db->get('user');
		$this->render('user/index',['title'=>'ALL USERS','users'=>$users]);
	}

	public function actionView(){
		$args = $this->request()->args();
		$db = $this->_user->db();
		$db->where('id',$args['id']);
		$user = $db->get('user',1);
		$this->render('user/view',['title'=>$user[0]['login'],'user'=>$user]);
	}

	public function actionCreate(){
		if($this->request()->isPost()){
			$args = $this->request()->args();
			$data = ['login'=>$args['login'],'password'=>$args['password']];
			if($this->_user->validate($data)){
				$db = $this->_user->db();
				$id = $db->insert('user',$data);
				$this->redirect('user/view',['id'=>$id]);
			}
			else{
				//$this->_user->errors;
				$this->render('user/create',['title'=>'Create User']);
			} 
		}
		else
                    $this->render('user/create',['title'=>'Create User']);
	}

	public function actionUpdate(){
		if($this->request()->isPost()){
			$db = $this->_user->db();
			$args = $this->request()->args();
			$data = ['login'=>$args['login'],'password'=>$args['password']];
			if($this->_user->validate($data)){
				$db->where('id',$args['id']);
				$id = $db->update('user',$data);
				$this->redirect('user/index');
			}
			else
				$this->redirect('user/view',['id'=>$args['id']]);
		}
	}

	public function actionDelete(){
		if($this->request()->isPost()){
			$db = $this->_user->db();
			$args = $this->request()->args();
			$db->where('id',$args['id']);
			$db->delete('user');
		}
		$this->redirect('user/index');
	}

}