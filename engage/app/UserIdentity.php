<?php
namespace app;
use app\Session;

class UserIdentity 
{
	private static $_session = null;

	public static function is_auth(){
		return self::session()->get('authorized');
	}

	public static function authorize(){
		self::session()->set('authorized',true);
	}

	public static function guest(){
		self::session()->set('authorized',false);
	}

	public static function session(){
		return self::$_session === null ? new Session : self::$_session;
	}

	public static function role($type=null){
		if(self::is_auth()){
			if($type!==null)
				self::session()->set('role',$type);
			return self::session()->get('role');
		}
		return 'guest';
	}

}