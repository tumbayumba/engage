<?php
echo '<pre>';
echo "index.php\n";

include 'config/config.php';
include 'engage/autoloads/autoload.php';

/*try {
	//foreach ($_SERVER as $key => $value) 
		//if(is_string($value))
			//defined(strtoupper($key)) or define(strtoupper($key), $value);
	throw new Exception('EXCEPTION');
} catch (Exception $e) {
	print_r($e);
	echo $e->getMessage();
}*/

//print_r($_SERVER);

//$uri = explode("/",ltrim($_SERVER['REQUEST_URI'],'/'));

$app = new BaseApplication;