<?php
session_start();
$app_start = microtime();
echo '<pre>';
echo "index.php".PHP_EOL;

include_once 'config/config.php';
include_once 'engage/autoloads/autoload.php';

//print_r($_SERVER);
//$wconfig = include WEB_CONFIG;
//print_r($wconfig);
//$uri = explode("/",ltrim($_SERVER['REQUEST_URI'],'/'));
//print_r($uri);

try {
	$app = (new app\Application)->run();
	
	//$_test = new controllers\TestController;
	//print_r($_test);
	$_uri = new router\Uri;
	//print_r($_uri);
	$_dispatcher = new router\Dispatcher($_uri);
	print_r($_dispatcher);
	$_dispatcher->dispatch();

	
} catch (Exception $e) {
	print_r($e);
}

echo "============================================".PHP_EOL;
$app_end = microtime();
echo 'APP TIME: ',($app_end-$app_start);