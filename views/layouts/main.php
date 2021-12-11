<?php
/* @var $this \eazy\http\web\View */
\app\asset\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="360-site-verification" content="5f7a09c76f4dbe80283ce1d9b27040e3" />
        <meta name="pop-verification" content="f4ae396f5b0edaeac33d4281e3da46c5">
        <title><?= $title ?></title>
        <meta name="keywords" content="伦敦时装周,T台秀场"/>
        <meta name="description" content="POP服装趋势网T台栏目为服装企业和设计师提供伦敦时装周、T台秀场等相关资讯，满足用户和设计师对四大时装周等全球T台秀场内容需求。"/>
        <meta name="robots" content="all"/>
        <meta http-equiv="pragma" name="" content="no-cache"/>
        <meta http-equiv="cache-control" name="" content="no-cache"/>


        <link rel="canonical" href="//www.pop-fashion.com/runways/reg_323/"/>
        <link rel="shortcut icon" href="/favicon.ico?20200903" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://imgf3.pop-fashion.com/global/css/common.css?2021111101">
        <link rel="stylesheet" type="text/css" href="https://imgf3.pop-fashion.com/global/css/common/new_common.css?2021111101">
        <link rel="stylesheet" type="text/css" href="https://imgf3.pop-fashion.com/global/css/lib/Jcrop/jquery.Jcrop.min.css">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/global.css?2021111101">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/common/drag.css">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/pop_layer.css?2021111101">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/lists/common/list-common.css?2021111101">
        <link rel="stylesheet" type="text/css" href="https://imgf2.pop-fashion.com/global/css/lists/runway-list.css?2021111101">
        <?= $this->head() ?>

    </head>
    <body>
    <!--<div id="app">-->
    <!--    <h1 v-if="awesome">Vue is awesome!</h1>-->
    <!--    <h1 v-else>Oh no 😢</h1>-->
    <!--    <div>-->
    <!--        <b-spinner style="width: 3rem; height: 3rem;" label="Large Spinner"></b-spinner>-->
    <!--        <b-spinner style="width: 3rem; height: 3rem;" label="Large Spinner" type="grow"></b-spinner>-->
    <!--    </div>-->
    <?= $content ?>
    <!--</div>-->
    <script>
        import { App } from '../../web/dist/bundle'
        const app = Vue.createApp({
            data() {
                return { count: 4 }
            }
        })

        const vm = app.mount('#app')

        console.log(vm.count) // => 4
    </script>
    </body>
    </html>
<?php $this->endPage() ?>