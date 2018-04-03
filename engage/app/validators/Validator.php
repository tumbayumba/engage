<?php
namespace app\validators;
use Exception;
use app\validators\IValidator;

abstract class Validator implements IValidator 
{
	public function validate(){
		throw new Exception("Abstract class ".__CLASS__." called!", 1);
	}
}