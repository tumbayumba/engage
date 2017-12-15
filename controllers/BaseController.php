<?php
namespace controllers;
use app\Controller;

class BaseController extends Controller
{
	public function __construct(){
		echo __METHOD__.PHP_EOL;
	}

}