<?php

namespace app\controllers;

use eazy\http\App;
use eazy\http\BaseController;
use eazy\http\Module;
use eazy\http\Router;
use eazy\http\web\Controller;

#[Router([
    ['xx', '/', 'aa', [Router::class]]
])]
class SiteController extends Controller
{

    public function afterAction($action, $result)
    {
        return false;
    }

    public function actionIndex()
    {
        return $this->view->render('@app/views/index');
    }

    public function actionMethods(): int
    {
//        throw new NotFoundHttpException('page not found');
        return 123;
//        echo __FUNCTION__;
    }
}