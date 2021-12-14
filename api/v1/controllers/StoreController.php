<?php

namespace app\api\v1\controllers;

use eazy\api\Controller;
use eazy\Eazy;

class StoreController extends Controller
{
    public function actionSearch()
    {
        return [
            'code' => 200,
            'msg' => \eazy\http\Eazy::$component->request->get('wd'),
            'data' => '撒旦发射点发生打发士大夫'
        ];
    }
}