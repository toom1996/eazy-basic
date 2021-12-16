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
            'msg' => 'ok',
            'data' => [
                [
                    'cover' => 'https://imgf1.pop-fashion.com/fashion/wraps/202112150000102306/women/2122AW/gloves/leather_gloves/small/20211215053_SZ6229.jpg',
                    'name' => '大手套子'
                ],
                [
                    'cover' => 'https://imgf2.pop-fashion.com/styles/2021/1215/202112150000102285/women/2022CR/6/top/vest/202112150014551827/middle/8c23d50c-3496-4d91-9be2-f42744cfd80f.jpg',
                    'name' => '裙子'
                ],
                [
                    'cover' => 'https://imgf1.pop-fashion.com/upload/analysisreport/2018/2018012318/ANAREPORT_5a6711e48dffb_6662.jpg',
                    'name' => '婚纱'
                ],
                [
                    'cover' => 'https://imgf2.pop-fashion.com/upload/analysisreport/2018/2018022716/ANAREPORT_5a9513a12d333_9130.jpg',
                    'name' => '红色的裙子'
                ]
            ]
        ];
    }
}