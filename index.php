<?php
session_start();

//DEBUG MODE
$dbg = false;
if($dbg){
	$app_start = microtime();
	echo '<pre>';
}

/////////////////////////////////////////////////
try {
	include_once 'config/config.php';
	include_once 'engage/autoloads/autoload.php';

	$app = new app\Application;
	$_d = new router\Dispatcher();
	$_d->dispatch();

} catch (Exception $e) {
	print_r($e);
}
/////////////////////////////////////////////////

if($dbg){
	echo "============================================".PHP_EOL;
	$app_end = microtime();
	echo 'APP TIME: ',($app_end-$app_start);
}

?>
