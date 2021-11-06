<?php

return [
    'class' => \eazy\http\Router::class,
    'route' => [
        ['GET', '/', '@controllers/site/index'],
    ]
];