<?php

session_start();

require('vendor/autoload.php');

define('INCLUDE_PATH_STATIC', 'http://localhost/dev-social-network/src/views/pages/');

$app = new src\Application();

$app->run();
