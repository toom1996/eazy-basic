<?php

namespace app\controllers;

use eazy\http\E;
use eazy\http\Eazy;
use eazy\http\web\Controller;

class MemberController extends Controller
{
    public function actionRegister()
    {
        return Eazy::$component->view->render('@app/views/member/register');
    }
}