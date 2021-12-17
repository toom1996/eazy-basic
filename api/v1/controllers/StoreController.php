<?php

namespace app\api\v1\controllers;

use eazy\api\Controller;
use eazy\http\Eazy;

class StoreController extends Controller
{
    public function actionSearch()
    {
        $title = Eazy::$component->request->get('wd');
        $query = Eazy::$component->db->createCommand("SELECT * FROM toom_goods WHERE title LIKE '%{$title}%'")->queryAll();
        var_dump($query);
        return [
            'code' => 200,
            'msg' => 'ok',
            'data' => $query
        ];
    }
}