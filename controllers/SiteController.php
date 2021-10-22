<?php

namespace app\controllers;

use eazy\Eazy;
use eazy\http\Controller;
use eazy\http\exceptions\NotFoundHttpException;
use Swoole\Http\Server;

class SiteController extends Controller
{
    /**
     * @route ['GET', '/']
     * @return bool|string
     */
    public function actionIndex(): bool|string
    {
        return $this->render('@app/views/index');
    }

    public function actionMethods(): int
    {
        var_dump(memory_get_usage());
//        throw new NotFoundHttpException('page not found');
        return 123;
//        echo __FUNCTION__;
    }
}