<?php

return [
    'class' => \eazy\http\Router::class,
    'bootstrap' => true,
    'route' => [
        ['GET', '/', '@controllers/site/index'],
    ]
];