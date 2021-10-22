<?php

use eazy\http\event\RequestCallback;
use eazy\http\event\StartCallback;
use eazy\http\event\SwooleEvent;
use eazy\http\event\WorkerErrorCallback;
use eazy\http\event\WorkerStartCallback;

$callbacks = [
    SwooleEvent::SWOOLE_ON_START => [StartCallback::class, 'onStart'],
    SwooleEvent::SWOOLE_ON_REQUEST => [RequestCallback::class, 'onRequest'],
    SwooleEvent::SWOOLE_ON_WORKER_START => [WorkerStartCallback::class, 'onWorkerStart'],
    SwooleEvent::SWOOLE_ON_WORKER_ERROR => [WorkerErrorCallback::class, 'onWorkerError'],
];

return [
    'mode' => SWOOLE_PROCESS,
    'servers' => [
        's1' => [
            'host' => '0.0.0.0',
            'port' => 9502,
            'type' => \eazy\http\server\HttpServer::class,
            'sock_type' => SWOOLE_SOCK_TCP,
            'note' => 'http main server',
            'callbacks' => $callbacks,
            'settings' => [
                'worker_num' => 1,
                'enable_coroutine' => true,
                'hook_flags' => SWOOLE_HOOK_ALL,
                'daemonize' => false,
            ],
        ],
        's2' => [
            'host' => '0.0.0.0',
            'port' => 9503,
            'type' => \eazy\http\server\HttpServer::class,
            'callbacks' => $callbacks,
            'settings' => [
                'worker_num' => 1,
                'enable_coroutine' => false,
                'hook_flags' => 2147481599,
                'daemonize' => false,
                'log_file' => '/www/wwwroot/eazy-basic/runtime/s2.log',
                'pid_file' => '/www/wwwroot/eazy-basic/runtime/s2.pid',
            ],
        ],
    ],
];