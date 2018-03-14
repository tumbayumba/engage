<?php
namespace router;
use Exception;

class Uri implements IUri
{
	protected $_url;
	protected $_query_string;
	protected $_uri;

	function __construct($uri='')
	{
		if($uri==''){
			$this->_uri = (APP_FOLDER!='') ? substr($_SERVER['REQUEST_URI'],strlen(APP_FOLDER)) : $_SERVER['REQUEST_URI'];
			$this->_url = (APP_FOLDER!='') ? substr($_SERVER['REDIRECT_URL'],strlen(APP_FOLDER)) : $_SERVER['REDIRECT_URL'];
			$this->_query_string = (APP_FOLDER!='') ? substr($_SERVER['REDIRECT_QUERY_STRING'],strlen(APP_FOLDER)) : $_SERVER['REDIRECT_QUERY_STRING'];
		}
		else
			throw new Exception("Query param defined.");
			
	}

	protected function set_url($url){
		$this->_url = $url;
	}

	protected function set_query_string($query_string){
		$this->_query_string = $query_string;
	}

	protected function set_uri($uri){
		$this->_uri = $uri;
	}

	public function get_url(){
		return $this->_url;
	}

	public function get_uri(){
		return $this->_uri;
	}

	public function get_query_string(){
		return $this->_query_string;
	}

}