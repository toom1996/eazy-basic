<?php
$appPath = APP_PATH;
return [
    'aliases' => [
        '@controllers' => $appPath . '/controllers',
        '@eazy' => $appPath . '/vendor/eazysoft/eazy-http/src',
        '@app' => $appPath,
        '@web' => $appPath . '/web',
        '@api' => $appPath . '/api',
    ],
    'components' => [
        'router' => [
            'route' => [
                ['GET', '/{id:\d+}', '@controllers/site/index'],
                // Group route.
                '/member' => [
                    // set different routes to point to the same action.
                    ['GET', '/register', '@controllers/member/register']
                ],
                '/api/v1/store' => [
                    ['GET', '/search', '@api/v1/controllers/store/search']
                ]
            ]
        ],
        'db' => [
            'host' => '192.168.100.65',
            'port' => 3306,
            'dbname' => 'toom',
            'charset' => 'utf8mb4',
            'username' => 'root',
            'password' => 'root',
        ]
    ],
];