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
            'Content-Type' => 'application/json; charset=UTF-8'
        ]);
        Eazy::$component->response->setRawCookie('cert', 'asssssss', 0,'/','localhost');
        return [
            'code' => 0,
            'data' => [
                'nickname' => '🐂noooonnnnnnnnnnnnnn',
                'avatar' => 'https://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJdL4RW29K1I61tU1FicKTARXcG9iaNCQHMhIBmTYkwxECG3UQWdkRQ4uvXj8dqWluVe4wCGkG0GbrQ/132',
            ]
        ];
    }
}