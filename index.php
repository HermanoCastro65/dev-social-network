<?php

session_start();

require('vendor/autoload.php');

$app = new src\Application();

$app->run();
