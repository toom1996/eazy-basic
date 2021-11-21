<?php
$this->title = 'Goblin framework!';
?>
<style>
    body {
        margin: 0;
    }

    .c-header-box {
        text-align: center;
        padding: 60px 25px 50px;
        position: relative;
        background-size: cover;
        background: linear-gradient(
                167deg, #fd9faf 50%, #fff 50%) center 60%;
    }

    .c-header-box .main-title {
        color: white;
        font-size: 50px;
    }

    .c-header-box .title {
        -webkit-font-smoothing: antialiased;
        color: #000000;
        text-transform: uppercase;
        line-height: 1.1;
        font-size: 1.25rem;
        font-weight: 300;
    }

    .c-header-box .guide-button {
        display: inline-block;
        background: white;
        padding: 10px 16px;
        border-radius: 4px;
        -webkit-text-decoration: none;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        color: #c83b50;
        box-shadow: 0 8px 16px -4px rgb(200 59 80 / 50%);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        text-transform: uppercase;
        margin: 5px;
    }

    .css-1nh8p6y {
        vertical-align: -7px;
        margin-right: 5px;
    }

    b, strong {
        font-weight: bolder;
    }

    .guide {
        font-family: Menlo,SFMono-Regular,Consolas,Liberation Mono,monospace;
        font-size: 14px;
    }

    .c-header-box .guide .installation-b {
        padding: 10px 15px;
        white-space: nowrap;
        background: #642f45;
        margin-bottom: 15px;
        display: inline-block;
        color: #ffd3f8;
    }

    .c-header-box .guide .installation-a {
        padding: 10px 15px;
        white-space: nowrap;
        background: rgb(75, 35, 52);
        margin-bottom: 15px;
        color:white;
        font-weight: bolder;
        display: inline-block;
        margin-right: -10px;
    }

    .guide-button:hover {
        background: #c73a50;
        color: white;
        border-color: #c73a50;
    }
</style>
<div class="container">
    <header class="c-header-box">
        <h2 class="main-title">eazyframework</h2>
        <h2 class="title">a web framework based for swoole extension</h2>
        <div>
            <a href="https://github.com/toom1996/goblin-basic" rel="nofollow noreferrer" class="guide-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="css-1nh8p6y">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg> Star on GitHub</a>
            <a class="guide-button" href="/docs/v2/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="css-1nh8p6y">
                    <polyline points="4 17 10 11 4 5"></polyline>
                    <line x1="12" y1="19" x2="20" y2="19"></line>
                </svg>Documentation</a>
        </div>
        <p class="version">Currently ： <?= \eazy\http\App::version() ?> | Last update time：2021-10-09</p>
    </header>
</div>