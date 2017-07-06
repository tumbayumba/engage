<?php

function app_autoloader($class) {
    require_once BASE_PATH.'/engage/app/' . $class . '.php';
}

spl_autoload_register('app_autoloader');