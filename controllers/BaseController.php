<?php
namespace controllers;
use app\Controller;
use app\Request;

class BaseController extends Controller
{
	public function __construct(){
		parent::__construct();
		$this->init();
	}

	public function beforeAction(){
		parent::beforeAction();
	}

	public function init(){
		parent::init();
	}

}