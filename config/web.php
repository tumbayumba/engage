<?php

return [
	'domain' => 'http://testengage'.APP_FOLDER,
	'layout' => BASE_PATH.'/views/layouts/main.php',
	'db' => [
            'host' => 'localhost',
            'username' => 'root', 
            'password' => '',
            'db'=> 'test_engage',
            'port' => 3306,
            'prefix' => 'tbl_',
            'charset' => 'utf8'
	],
];