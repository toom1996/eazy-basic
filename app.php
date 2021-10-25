<?php

return [
  'eazysoft/eazy-http' => [
      'aliases' => [
          '@app' => '/www/wwwroot/eazy-basic',
          '@runtime' => __DIR__ . '/runtime',
          '@controllers' => '/www/wwwroot/eazy-basic/controllers',
      ],
      'bootstrap' => [
          'urlManager',
          'log'
      ],
      'components' => [
          'urlManager' => [
              'class' => \eazy\http\components\UrlManager::class,
              'route' => [
                  // Basic usage.
                  ['GET', '/', '@controllers/site/index'],

                  // Multiple request methods.
                  [['POST', 'DELETE'], '/site/methods/{id:\d+}', '@controllers/site/methods'],
                  // set different routes to point to the same action.
                  [['GET', 'POST'], '/about.html', '@controllers/site/methods'],

                  // Group route.
                  '/site' => [
                      // set different routes to point to the same action.
                      [['GET', 'POST'], '/index.html', '@controllers/site/methods']
                  ],
              ]
          ],
          'log' => [
              'class' => \eazy\http\log\LogDispatcher::class,
              'targets' => [
                  'application' => [
                      'microtime' => false,
                      'logFile' => '@runtime/log/app.log'
                  ],
                  'debug' => [
                      'logFile' => '@runtime/log/debug.log'
                  ]
              ]
          ]
      ]
  ],
];
