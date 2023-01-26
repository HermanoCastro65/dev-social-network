<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

require('vendor/autoload.php');

define('INCLUDE_PATH_STATIC', 'http://localhost/dev-social-network/src/views/pages/');
define('INCLUDE_PATH', 'http://localhost/dev-social-network/');

$app = new src\Application();

$app->run();
