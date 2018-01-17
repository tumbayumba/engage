<?php
namespace controllers;
use app\Controller;

class BaseController extends Controller
{
	public function __construct(){
		parent::__construct();
		$this->init();
	}

	public function init(){
		parent::init();
	}

	public function test(){
		
	}

}