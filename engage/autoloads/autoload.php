<?php

function app_autoloader($class) {
	$class_mapping = include 'class_mapping.php';
	if(strrpos($class, "\\")!==false){
		$class_path_arr = explode("\\", $class);
		$class_name = $class_path_arr[(count($class_path_arr)-1)];
		$path_alias = '';
		for($i=0;$i<(count($class_path_arr)-1);$i++)
			$path_alias .= $class_path_arr[$i].'/';
		$path_alias = rtrim($path_alias,'/');
		if(file_exists($class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php'))
			require_once $class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php';	
		else
			throw new Exception("Class ".$class." not found at ".$class_mapping[$path_alias]."!");
		
	}
	else
		throw new Exception("Class ".$class." not found!", 1);
		
}

spl_autoload_register('app_autoloader');