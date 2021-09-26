<?php

require __DIR__ . '/vendor/autoload.php';

defined('APP_PATH') or define('APP_PATH', __DIR__);

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

$console = new \eazy\console\Console();
$console->run();


