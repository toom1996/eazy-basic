<?php

namespace app\api\v1\controllers;

use eazy\api\Controller;
use eazy\http\Eazy;

class MemberController extends Controller
{

    public function actionLogin()
    {
        Eazy::$component->response->setHeaders([
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => '*',
        ]);
        return [
            'code' => 0,
            'data' => [
                'nickname' => 'nooooooooooooooooob',
            ]
        ];
    }
}