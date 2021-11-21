<?php
//\app\asset\AppAsset::register();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?= $this->title ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <script src="https://unpkg.com/vue@next"></script>
    <script src="../../web/dist/bundle.js"></script>
</head>
<body>
<div id="app">
    <h1 v-if="awesome">Vue is awesome!</h1>
    <h1 v-else>Oh no 😢</h1>
    <div>
        <b-spinner style="width: 3rem; height: 3rem;" label="Large Spinner"></b-spinner>
        <b-spinner style="width: 3rem; height: 3rem;" label="Large Spinner" type="grow"></b-spinner>
    </div>
<!--    --><?//= $content ?>
</div>
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