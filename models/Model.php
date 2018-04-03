<?php
namespace models;
use app\Application;
use app\BaseModel;
use db\MysqliDb;

class Model extends BaseModel 
{
	public $_db_config;
	private $_connection;

	public function __construct(){ 
		parent::__construct();
		$this->_db_config = Application::load_wconfig()['db'];
		$this->set_db_connection();
	}

	public function db(){
		return $this->_connection;
	}

	private function set_db_connection(){
		$this->_connection = new MysqliDb($this->_db_config);
	}

	public static function get_instance(){
		return MysqliDb::getInstance();
	}
	
}