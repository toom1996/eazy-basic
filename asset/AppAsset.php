<?php

namespace app\asset;

use eazy\http\App;
use eazy\http\AssetBundle;
use eazy\http\exceptions\InvalidConfigException;

class AppAsset extends AssetBundle
{

    public $sourcePath = '@app';

    public $baseUrl = '';

    public $basePath = '@web';

    public $css = [
        'web/assets/css/common/main.css',
        '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
    ];

    public $js = [
//        'web/vue/src/main.js'
    ];


    public $depends = [];
}