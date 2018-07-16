<?php
namespace app;
use app\ModelValidator;
use app\types\ModelTypes;

class BaseModel 
{
	public $errors = [];
        public $default_attributes = [
            ModelTypes::VISIBLE => true,
        ];

        public function __construct(){ 
            
	}

	public function load(){
		return [
			'attributes' => $this->attributes,
		];
	}

	public function validate($values){
		if(is_array($values) && count($values)>0){
			foreach($values as $key=>$v){
				if(isset($this->attributes[$key])){
					$valid = (new ModelValidator($key,$v,$this->attributes[$key]))->validate();
					if(count($valid)>0)
						$this->errors[$key] = $valid;
				}
			}
			return count($this->errors)>0 ? false : true;
		}
		return false;
	}

}