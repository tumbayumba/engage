<?php
//version 1.0.0
header('Content-Type: text/html; charset=utf-8');
session_start();

//DEBUG MODE
$dbg = false;
if($dbg){
    $app_start = microtime();
    echo '<pre>';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo "============================================".PHP_EOL;
}

/////////////////////////////////////////////////
try {
    include_once 'config/config.php';
    include_once 'engage/autoloads/autoload.php';
    $app = new app\Application;
    $_d = new router\Dispatcher();
    $_d->dispatch();
} catch (Exception $e) {
    if($dbg) print_r($e);
}
/////////////////////////////////////////////////

if($dbg){
    echo "============================================".PHP_EOL;
    $app_end = microtime();
    echo 'APP TIME: ',($app_end-$app_start);
}

?>
