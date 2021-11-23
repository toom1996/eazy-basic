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
                        "name": "服饰鞋包",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "家居生活",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "美妆个护",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
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
                        "name": "家纺 / 家饰 ",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "汽车 /配件",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "生活电器",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "潮电酷玩",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
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
                        "name": " 零食 / 进口食品",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
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
                        "name": "品牌库",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "潮流资讯",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                    {
                        "name": "发现",
                        "url": "",
                        "class": "",
                        "options": {},
                        "child": [{
                            "name": "时尚男装",
                            "url": "/goods/man",
                            "class": ""
                        }]
                    },
                ]
            },
            "footer": {
                "nav": {
                    "关于我们": "https://www.pop-fashion.com/service/aboutus/" ,
                    "加入会员": "https://www.pop-fashion.com/service/joinmember/",
                    "会员须知": "https://www.pop-fashion.com/service/membernotice/",
                    "收费一览": "https://www.pop-fashion.com/service/tolllist/",
                    "付款方式": "https://www.pop-fashion.com/service/payment/",
                    "法律声明": "https://www.pop-fashion.com/service/declaration/",
                    "联系我们": "https://www.pop-fashion.com/service/contactus/",
                    "友情链接": "https://www.pop-fashion.com/service/friendlylink/",
                    "诚聘英才": "http://www.pop136.com/aboutpop.php?sn=7",
                    "网站地图": "https://www.pop-fashion.com/service/sitemap/",
                    "广告中心": "http://www.pop136.com/contactpop.php?sn=3",
                    "活动专题 ": "https://www.pop-fashion.com/topic/",
                    "博客": "https://www.pop-fashion.com/article/"
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
