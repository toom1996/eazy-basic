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
        'web/assets/css/register.css'
    ];

    public $js = [];


    public $depends = [];
}