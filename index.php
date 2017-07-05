<?php
echo '<pre>';
echo "index.php\n";


//include 'config/params.php';
/*try {
	//foreach ($_SERVER as $key => $value) 
		//if(is_string($value))
			//defined(strtoupper($key)) or define(strtoupper($key), $value);
	throw new Exception('EXCEPTION');
} catch (Exception $e) {
	print_r($e);
	echo $e->getMessage();
}*/


//echo REDIRECT_QUERY_STRING;

//print_r($_SERVER);

$uri = explode("/",ltrim($_SERVER['REQUEST_URI'],'/'));

if($uri[0]=='foo')
	include 'controllers/foo.php';
if($uri[0]=='bar')
	include 'controllers/bar.php';
if($uri[0]=='test')
	include 'controllers/test.php';