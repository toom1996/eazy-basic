<?php

defined('APP_PATH') or define('APP_PATH', __DIR__);

defined('APP_CONFIG') or define('APP_CONFIG', __DIR__ . '/app.php');
defined('APP_SERVER') or define('APP_SERVER', __DIR__ . '/server.php');

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

(function() {
    $console = new \eazy\console\Console();
    $console->run();
})();

function server($key = '')
{
    $server = include APP_SERVER;
    return \eazy\helpers\BaseArrayHelper::getValue($server, $key, null);
}

function config($key = '')
{
    $config = include APP_CONFIG;
    return \eazy\helpers\BaseArrayHelper::getValue($config, $key, null);
}