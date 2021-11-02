<?php

namespace app\controllers;

use eazy\http\Module;

class SiteController extends Module
{

    public function actionIndex()
    {
//        return 405;
        $this->response->setHeaders([
            'x-xss-protection' => 0
        ]);
        $this->response->setHeaders([
            'xpp' => 0
        ], true)->setStatusCode(500);
        return $this->view->render('@app/views/index');
    }

    public function actionMethods(): int
    {
//        throw new NotFoundHttpException('page not found');
        return 123;
//        echo __FUNCTION__;
    }
}