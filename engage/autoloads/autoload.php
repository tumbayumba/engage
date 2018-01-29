<?php

function app_autoloader($class) {
	$class_mapping = include 'class_mapping.php';
	//echo 'Class mapping: ';
	//print_r($class_mapping);
	//echo 'Required class: '.$class."\n";
	if(strrpos($class, "\\")!==false){
		$class_path_arr = explode("\\", $class);
		//echo 'Class path array: ';
		//print_r($class_path_arr);
		$class_name = $class_path_arr[(count($class_path_arr)-1)];
		//echo 'Class name: '.$class_name."\n";
		$path_alias = '';
		for($i=0;$i<(count($class_path_arr)-1);$i++)
			$path_alias .= $class_path_arr[$i].'/';
		$path_alias = rtrim($path_alias,'/');
		//echo 'Path alias: '.$path_alias."\n";
		//echo 'Directory: '.$class_mapping[$path_alias]."\n";
		//if(!isset($class_mapping[$path_alias]))
			//throw new Exception("Class mapping doesn't exists.", 1);
		//echo $class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php'.PHP_EOL;
		if(file_exists($class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php'))
			require_once $class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php';	
		else
			throw new Exception("Class ".$class." not found at ".$class_mapping[$path_alias]."!");
		
	}
	else
		throw new Exception("Class ".$class." not found!", 1);
		
}

spl_autoload_register('app_autoloader');