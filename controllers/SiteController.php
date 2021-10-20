<?php

namespace app\controllers;

use eazy\http\Controller;

class SiteController extends Controller
{
    /**
     * @return bool|string
     */
    public function actionIndex(): bool|string
    {
//        echo __FUNCTION__;
        return $this->render('@app/views/index');
    }

    public function actionMethods(): int
    {
        return 123;
//        echo __FUNCTION__;
    }
}