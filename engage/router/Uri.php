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
		echo __METHOD__.PHP_EOL;
		if($uri==''){
			$this->_uri = $_SERVER['REQUEST_URI'];
			$this->_url = $_SERVER['REDIRECT_URL'];
			$this->_query_string = $_SERVER['REDIRECT_QUERY_STRING'];
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