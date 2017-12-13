<?php
session_start();
$app_start = microtime();
echo '<pre>';
echo "index.php".PHP_EOL;

include_once 'config/config.php';
include_once 'engage/autoloads/autoload.php';

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
//$wconfig = include WEB_CONFIG;
//print_r($wconfig);
$uri = explode("/",ltrim($_SERVER['REQUEST_URI'],'/'));
print_r($uri);

$app = (new app\Application)->run();

//$test = new controllers\TestController;
//$router = new router\Router;
$uri = new router\Uri;

$app_end = microtime();
echo 'APP TIME: ',($app_end-$app_start);