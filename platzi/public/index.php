<?php

use Illuminate\Http\Request;
use PlatziPHP\Application;
use PlatziPHP\Http\Controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';

$app =  new Application(
    new \Illuminate\Container\Container()
);

$app->run();