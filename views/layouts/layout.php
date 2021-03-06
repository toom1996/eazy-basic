<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keywords" content="fuck you!"/>
    <meta name="description" content="...."/>
    <meta http-equiv="pragma" name="" content="no-cache"/>
    <meta http-equiv="cache-control" name="" content="no-cache"/>
    <link rel="canonical" href="//www.pop-fashion.com/"/>
    <link rel="shortcut icon" href="/favicon.ico?20200903" type="image/x-icon" />
    <style>
        .loading {
            position: fixed;
            background: rgb(225,230,235);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999;
        }
        .loading .loading-circle, .lazy-loading .loading-circle {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 60px;
            width: 30px;
            height: 30px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-top-color: rgba(0, 0, 0, 0.6);
            border-radius: 100%;
            margin: auto;
        }
        .fa-spin-round {
            -webkit-animation: fa-spin-round 0.9s infinite linear;
            animation: fa-spin-round 0.9s infinite linear;
        }
        @keyframes fa-spin-round {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        const data = {
            "app": {
                "version": "0.1"
            },
            "header": {
                "lang": {
                    "English": "https://www.popfashioninfo.com/"
                },
                "allNav": [{
                    "name": "h1dsfsd",
                    "url": "",
                    "class": "",
                    "options": {},
                    "child": [{
                        "name": "111111111111",
                        "url": "/goods/man",
                        "class": ""
                    },
                        {
                            "name": "222222",
                            "url": "/goods/man",
                            "class": ""
                        },
                        {
                            "name": "333333",
                            "url": "/goods/man",
                            "class": ""
                        }]
                }],
                "nav": [
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "line",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": []
                    },
                    {
                        "name": "?????? / ?????? ",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "?????? /??????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "line",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": []
                    },
                    {
                        "name": " ?????? / ????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "line",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": []
                    },
                    {
                        "name": "?????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "????????????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "??????",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "????????????",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                ]
            },
            "footer": {
                "nav": {
                    "????????????": "https://www.pop-fashion.com/service/aboutus/" ,
                    "????????????": "https://www.pop-fashion.com/service/joinmember/",
                    "????????????": "https://www.pop-fashion.com/service/membernotice/",
                    "????????????": "https://www.pop-fashion.com/service/tolllist/",
                    "????????????": "https://www.pop-fashion.com/service/payment/",
                    "????????????": "https://www.pop-fashion.com/service/declaration/",
                    "????????????": "https://www.pop-fashion.com/service/contactus/",
                    "????????????": "https://www.pop-fashion.com/service/friendlylink/",
                    "????????????": "http://www.pop136.com/aboutpop.php?sn=7",
                    "????????????": "https://www.pop-fashion.com/service/sitemap/",
                    "????????????": "http://www.pop136.com/contactpop.php?sn=3",
                    "???????????? ": "https://www.pop-fashion.com/topic/",
                    "??????": "https://www.pop-fashion.com/article/"
                },
                "support": {

                }
            }
        };
        const detail = {
            "breadCrumb": [
                {
                    "name": "xxx",
                },{
                    "name": "fff",
                },
                {
                    "name": "ddd",
                },
            ]
        }
    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="app">
    <?= \app\widgets\Loading::widget() ?>
    <top-header :mode="appHeaderMode" :is-show-nav="isShowNav" @scroll="getHeaderScroll"></top-header>
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
