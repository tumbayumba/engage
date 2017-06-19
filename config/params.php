<?php

defined('BASE_PATH') or define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
defined('QUERY_STRING') or define('QUERY_STRING', $_SERVER['REDIRECT_QUERY_STRING']);
defined('URL') or define('URL', $_SERVER['REDIRECT_URL']);
defined('URI') or define('URI', $_SERVER['REQUEST_URI']);
defined('REQ_METHOD') or define('REQ_METHOD', $_SERVER['REQUEST_METHOD']);
defined('REQ_STATUS') or define('REQ_STATUS', $_SERVER['REDIRECT_STATUS']);