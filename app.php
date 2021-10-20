<?php

return [
  'eazysoft/eazy-http' => [
    'server' => [
      0 => [
        'name' => 's1',
        'host' => '0.0.0.0',
        'port' => 9502,
        'setting' => [
          'enable_static_handler' => false,
          'document_root' => '/www/wwwroot/eazy-basic/web',
          'worker_num' => 1,
          'enable_coroutine' => true,
          'hook_flags' => 2147481599,
          'daemonize' => false,
          'log_file' => '/www/wwwroot/eazy-basic/runtime/s1.log',
          'pid_file' => '/www/wwwroot/eazy-basic/runtime/s1.pid',
        ],
      ],
      1 => [
        'name' => 's2',
        'host' => '0.0.0.0',
        'port' => 9503,
        'setting' => [
          'enable_static_handler' => false,
          'document_root' => '/www/wwwroot/eazy-basic/web',
          'worker_num' => 1,
          'enable_coroutine' => true,
          'hook_flags' => 2147481599,
          'daemonize' => false,
          'log_file' => '/www/wwwroot/eazy-basic/runtime/s2.log',
          'pid_file' => '/www/wwwroot/eazy-basic/runtime/s2.pid',
        ],
      ],
    ],
    'config' => [
      'aliases' => [
        '@controllers' => '/www/wwwroot/eazy-basic/controllers',
        '@app' => '/www/wwwroot/eazy-basic',
      ],
      'bootstrap' => [
          'urlManager'
      ],
      'components' => [
          'urlManager' => [
              'class' => \eazy\http\components\UrlManager::class,
              'route' => [
                  // Basic usage.
                  ['GET', '/', '@controllers/site/index'],

                  // Multiple request methods.
                  [['POST', 'DELETE'], '/site/methods', '@controllers/site/methods'],
                  // set different routes to point to the same action.
                  [['GET', 'POST'], '/about.html', '@controllers/site/methods'],

                  // Group route.
                  '/site' => [
                      // set different routes to point to the same action.
                      [['GET', 'POST'], '/index.html', '@controllers/site/methods']
                  ],
              ]
          ],
      ],
    ],
  ],
];
