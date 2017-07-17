<?php
$class_mapping = include 'class_mapping.php';
print_r($class_mapping);
function app_autoloader($class) {
	echo $class."\n";
	if(strrpos($class, "\\")!==false){
    	//require_once BASE_PATH.'/engage/app/' . $class . '.php';
		$class_path_arr = explode("\\", $class);
		$class_name = $class_path_arr[(count($class_path_arr)-1)];
		echo $class_name."\n";
		$path_alias = '';
		for($i=0;$i<(count($class_path_arr)-1);$i++)
			$path_alias .= $class_path_arr[$i].DIRECTORY_SEPARATOR;
		echo $path_alias;
		echo $class_mapping[$path_alias];
		//if(!isset($class_mapping[$path_alias]))
			//throw new Exception("Class mapping doesn't exists.", 1);
		echo $class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php';	
		require_once $class_mapping[$path_alias].DIRECTORY_SEPARATOR.$class_name.'.php';	
	}
	else
		throw new Exception("Class ".$class." not found!", 1);
		
}

spl_autoload_register('app_autoloader');