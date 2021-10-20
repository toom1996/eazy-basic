<?php

$extensions = require dirname(__DIR__).'vendor/eazysoft/extensions.php';

$config = [
    'eazt-http' => include 'eazy-http.php'
];

return array_merge($extensions, $config);