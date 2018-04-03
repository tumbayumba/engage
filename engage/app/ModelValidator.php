<?php
namespace app;
use app\validators\Validator;

class ModelValidator extends Validator
{
	public $field;
	public $value;
	public $rules;
	public $errors = [];

	public function __construct($field,$value,$rules){ 
		$this->field = $field;
		$this->value = $value;
		$this->rules = $rules;
	}

	public function validate(){
		$this->errors = [];
		if(isset($this->rules['min_length']) && $this->rules['min_length']>strlen($this->value))
			$this->errors[$this->field][] = 'min_length';
		if(isset($this->rules['max_length']) && $this->rules['max_length']<strlen($this->value))
			$this->errors[$this->field][] = 'max_length';
		if(isset($this->rules['required']) && $this->rules['required'] && (trim($this->value)==='' || trim($this->value)===null))
			$this->errors[$this->field][] = 'required';
		return $this->errors;
	}
}