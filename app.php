<?php

return [
  'eazysoft/eazy-http' => [
    'server' => [
      'host' => '0.0.0.0',
      'port' => 9503,
      'event' => [
        'start' => [
          0 => 'eazy\\http\\event\\StartCallback',
          1 => 'onStart',
        ],
      ],
      'setting' => [
        'worker_num' => 2,
        'enable_coroutine' => true,
        'daemonize' => false,
        'log_file' => 'D:\\yii2\\eazy-basic/runtime/http.log',
        'pid_file' => 'D:\\yii2\\eazy-basic/runtime/server.pid',
      ],
    ],
    'config' => [
    ],
  ],
];
