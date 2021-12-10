<?php

return [
    'aliases' => [
        '@controllers' => APP_PATH . '/controllers',
        '@eazy' => APP_PATH . '/vendor/eazysoft/eazy-http/src',
        '@app' => APP_PATH
    ],
    'components' => [
        'router' => [
            'route' => [
                ['GET', '/', '@controllers/site/index'],
                // Group route.
                '/member' => [
                    // set different routes to point to the same action.
                    ['GET', '/register', '@controllers/member/register']
                ],
            ]
        ],
        'db' => [
            'host' => '192.168.10.35',
            'port' => 3306,
            'dbname' => 'toom',
            'charset' => 'utf8mb4',
            'username' => 'root',
            'password' => 'root',
        ]
    ],
];