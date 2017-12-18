<?php
namespace controllers;
use app\Controller;

class BaseController extends Controller
{
	public function __construct(){
		parent::__construct();
		echo __METHOD__.PHP_EOL;
	}

	public function test(){
		echo __METHOD__.PHP_EOL;
	}

}