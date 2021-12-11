<?php

return [
    'class' => \eazy\http\Router::class,
    'route' => [
        ['GET', '/', '@controllers/site/index'],
        ['GET', '/member/register', '@controllers/member/register'],
        '/member' => [
            ['GET', 'register', '@controllers/member/register'],
        ]
    ]
];