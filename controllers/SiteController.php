<?php

namespace app\controllers;

use eazy\http\BaseController;
use eazy\http\Eazy;
use eazy\http\Module;
use eazy\http\Router;
use eazy\http\web\Controller;

#[Router([
    ['xx', '/', 'aa', [Router::class]]
])]
class SiteController extends Controller
{
    public ?string $layout = '@app/views/layouts/main';

    public function afterAction($action, $result)
    {
        echo __FUNCTION__;
        return false;
    }

    public function actionIndex()
    {
//        $query = (Eazy::$component->db->createCommand("SELECT * FROM toom_config WHERE `key` = 'pc'")->cache()->queryOne());
//        var_dump($query);
        return $this->view->render('@app/views/index');
//        var_dump($query);
//        return  $query[1] ?? '1';
    }

    public function actionMethods(): int
    {
//        throw new NotFoundHttpException('page not found');
        return 123;
//        echo __FUNCTION__;
    }


}