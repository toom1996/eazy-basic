<?php

return [
    'aliases' => [
        '@controllers' => APP_PATH . '/controllers'
    ],
    'components' => [
        'router' => [
            'route' => [
                ['GET', '/', '@controllers/site/index'],
            ]
        ]
    ],
];