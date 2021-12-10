<style>
    @charset 'utf-8';


    /* 注册页面 */
    .register{background-color: #fff;}
    .reg-images-ad{width: 400px;position: relative;height: 800px;}
    .reg-images-ad>img{position: absolute;top:0;right:0;max-height: 800px}
    .reg-content-wrap{margin-top: 50px;margin-left: 40px;}
    .reg-content-wrap>a{padding-bottom: 10px;}
    .reg-content-wrap>a>img{max-width: 180px;}
    .reg-content-wrap>p{font-size:42px;color:#232f3c;margin-bottom:35px;}
    /* .reg-content .reg-content-left{margin-right:45px;} */
    .reg-content-left .VIP-tequan{width:290px;}
    .reg-content-left .VIP-tequan>.h3-title{color:#333;font-size:18px;font-weight:bold;margin-bottom:77px;}
    .reg-content-left .VIP-tequan>.h3-title>i{background:url(../../images/user/icon.png) no-repeat 0 0;margin-right:6px;width:27px;height:18px;display:inline-block;}
    .reg-content-left .reg-intro{margin-bottom:55px;padding: 20px 25px 35px 0;border-right: 1px solid #eee;}
    .reg-content-left .reg-intro>ul>li{font-size:12px;color:#333;margin-bottom:15px;}
    .reg-content-left .reg-intro>ul>li>i{margin-right:10px;font-style:normal;display: inline-block;}
    .reg-content-left .reg-contact{font-size:14px;color:#333;}
    .reg-content-left .reg-contact>span{font-family:"Arial";font-size:20px;color:#666;font-weight:bold;padding-left: 14px;}
    .reg-content-left .reg-contact>i{background:url(../../images/user/icon.png) no-repeat -45px 0;width:24px;height:24px;display:inline-block;vertical-align:middle;margin-right:4px;}
    .reg-content-right{margin-left: 36px;}
    .reg-content-right .switch-btn{margin-bottom:35px;}
    .reg-content-right .switch-btn>a{font-size:18px;color:#999;font-weight:bold;margin-right:35px;}
    .reg-content-right .switch-btn>a.now-active{color:#232f3c;border-bottom:4px solid #232f3c;}
    .reg-content-right .reg-info>ul{width:390px;}
    .reg-content-right .reg-info>ul>li{border-bottom:1px solid #ccc;position: relative;}
    .reg-content-right .reg-info>ul>li.border-none{border:none;padding:0;margin:0;}
    .reg-content-right .reg-info>ul>li>label{font-size:14px;color:#666;width:75px;height:30px;line-height:30px;float: left;margin-right:25px;font-weight: bold;}
    .reg-content-right .reg-info>ul>li>input{width:280px;height: 30px;line-height: 30px;float:left; border:none 0;}
    .reg-content-right .reg-info>ul>li>div>input{width:250px;height: 30px;line-height: 30px;float:left; border:none 0;}
    .reg-content-right .reg-info>ul>li.reg-btn{width:100%;height:50px;padding-top: 20px;}
    .reg-content-right .reg-info>ul>li.reg-btn>input{width:100%;height:50px;font-size:16px;color:#fff;background-color:#232f3c;border-radius:4px;text-align:center;cursor: pointer;}
    .reg-content-right .reg-info>ul>li.reg-btn>input:hover{background-color:#4f5963;}
    .reg-content-right .reg-info>ul>li.agree-fw{text-align:center;margin-top:10px;font-size:12px;color:#333;line-height: 22px;}
    .reg-content-right .reg-info>ul>li.agree-fw>a{color:#3399ff;}
    .reg-content-right .reg-info>ul>li>span.msg{width:auto;position:absolute;top: 45px;left:0;color:#ff6633;font-size:12px;display:none;z-index:1;}
    .reg-content-right .reg-info>ul>li>em{background:url(../../images/user/icon.png) no-repeat -128px 0; display:inline-block;width:22px;height:15px;position: absolute;right:17px;bottom:13px;cursor: pointer;}
    .reg-content-right .reg-info>ul>li>em.pwd-display{background-position:-86px 4px;}
    .reg-content-right .reg-info>ul>li.city-reg{text-align: right;color: #3399FF;font-size: 12px;margin-top: 4px;border: none;padding-bottom: 0;}
    .reg-content-right .reg-info>ul>li.city-reg>.oversea-btn{color: #3399FF;font-size: 12px;}

    /* 港澳台注册 */
    .city-reg-layer{width: 550px;height: 520px;border-radius: 15px;background-color: #fff;position: absolute;left: 50%;margin-left: -275px;top: 50%;margin-top: -260px;display: none;z-index: 100;}
    .close-city-area{background: url(../../images/user/city_icon.png) no-repeat -4px -4px;display: inline-block;width: 30px;height: 30px;display: inline-block;position: absolute;right: -40px;top: -40px;cursor: pointer;}
    .city-reg-layer>p{color: #333;font-size: 30px;line-height: 42px;padding-top: 40px;text-align: center;font-weight: bold;}
    .city-reg-layer>ul{margin: 30px 60px 0;}
    .city-reg-layer>ul>li{margin-bottom: 40px;border-bottom: 1px solid #ccc;padding-bottom: 12px;position: relative;}
    .city-reg-layer>ul>li.area-li-box{cursor: pointer;}
    .city-reg-layer>ul>li label{width: 70px;float: left;text-align: left;font-size: 14px;color: #333;font-weight: bold;}
    .city-reg-layer>ul>li .input-box{float: left;margin-left: 32px;}
    .city-reg-layer>ul>li .input-box>input{font-size: 14px;border: none;}
    .city-reg-layer>ul>li.area-li-box .input-box>input{cursor: pointer;}
    .city-reg-layer>ul>li .input-box>i{background: url(../../images/user/city_icon.png) no-repeat -50px -4px;display: inline-block;width: 16px;height: 7px;position: absolute;right: 0;top: 7px;}
    .city-reg-layer>ul>li .input-box>i.on{background-position: -50px -27px;}
    .city-reg-layer>ul>li .area-downlist{width: 100%;border-radius:8px;box-shadow:0px 2px 8px 0px rgba(0,0,0,0.06);background-color: #fff;position: absolute;left: 0;top: 30px;padding: 12px 0;z-index: 10;display: none;}
    .city-reg-layer>ul>li .area-downlist>a{display: block;padding-left: 30px;height: 35px;line-height: 35px;font-size: 14px;color: #333;cursor: pointer;position: relative;}
    .city-reg-layer>ul>li .area-downlist>a>i{background: url(../../images/user/city_icon.png) no-repeat -100px -19px;width: 20px;height: 13px;position: absolute;right: 30px;top: 8px;display: none;}
    .city-reg-layer>ul>li .area-downlist>a:hover i{display: block;}
    .city-reg-layer>ul>li .msg-box{position: absolute;font-size: 12px;color: #FF6633;top: 37px;left: 0;display: none;}
    .city-reg-layer>ul>li.area-reg-submit{border: none;padding-bottom: 0;padding-top: 10px;}
    .city-reg-layer>ul>li.area-reg-submit>a{width: 100%;height: 50px;display: inline-block;background-color: #232F3C;border-radius: 4px;color: #fff;font-size: 16px;text-align: center;line-height: 50px;cursor: pointer;}
    .city-reg-layer>ul>li.area-reg-submit>a:hover{background-color: #4F5964;}
    .toast-reg-layer{padding: 0 29px;height: 42px;position: fixed;left: 50%;transform: translate(-50%);top: -50%;;border-radius: 25px; background:rgba(35,47,60,0.8);color: #fff;font-size: 16px;line-height: 42px;}
    /* 手机号重复样式 */
    .number-repeat-box{width: 100%;height: 100%;background: rgba(0,0,0,.6);position: fixed;top: 0;display: none;z-index: 1;}
    .number-repeat{width: 450px;height: 340px;border-radius: 10px;background-color: #fff;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);padding: 0 38px;box-sizing: border-box;}
    .number-repeat>i{display: inline-block;width: 24px;height: 24px;background: url(../../images/register/close-btn.svg) no-repeat;position: absolute;right: 16px;top: 16px;background-size: cover;cursor: pointer;}
    .number-repeat>i:hover{background: url(../../images/register/close-hover.svg) no-repeat;background-size: cover;}
    .number-repeat>p{font-size: 24px;color: #333;font-weight: bold;line-height: 31px;text-align: center;margin: 70px 0 30px 0;}
    .number-repeat>span{font-size: 14px;color: #333;line-height: 24px;text-align: center;display: block;}
    .btn-style{width: 130px;height: 40px;border: 1px solid #1C232B;line-height: 40px;border-radius: 25px;float: left;text-align: center;font-size: 16px;margin-top: 51px;}
    .btn-style>a{display: inline-block;width: 100%;height: 100%;}
    .find-password{margin: 51px 24px 0 45px;}
    .find-password>a{color: #1C232B;}
    .goin,.find-password:hover{background-color: #1C232B;}
    .find-password:hover a,.goin>a{color: #fff;}
    .goin:hover{background-color: #4F5964;border-color: #4F5964;}
    /*注册页面手机验证*/
    .phone-verification{background-color:#fff;width:380px;height:480px;border-radius:4px;position:fixed;left:50%;margin-left:-190px;top:100px;z-index:21;display:none;}
    .veri-top{height:80px;background-color:#eee;position:relative;line-height:80px;}
    .veri-top .veri-title{font-size:24px;color:#333;text-align:center;}
    .veri-top .veri-close{background:url(../../images/user/icon.png) no-repeat -51px -29px;width:18px;height:18px;position:absolute;right:15px;display:inline-block;top:15px;cursor:pointer;}
    .veri-list{margin:10px 40px 0;position:relative;width:300px;}
    .veri-list>ul>li{border-radius:3px;border-bottom:1px solid #ccc;margin-top:30px;padding-bottom:7px;position: relative;}
    .veri-list>ul>li>label{width:45px;float:left;font-size:14px;color:#666;height:30px;line-height:30px;margin-right:20px;}
    .veri-list>ul>li>input[type="text"]{width:200px;float:left;font-size:14px;color:#333;height:30px;line-height:30px;border:none;}
    .veri-list>ul>li>input[type="button"]{width:87px;height:32px;border:1px solid #e5e5e5;background-color:#eee;color:#666;font-size:12px;border-radius:3px;position: absolute;right:0;bottom:7px;cursor: pointer;}
    .veri-list>ul>li.veri-code{margin-bottom:20px;}
    .veri-list>ul>li.veri-success{border:none;padding-bottom:0;padding-top:20px;margin-top:0;}
    .veri-list>ul>li.veri-success>a{width:100%;height:50px;line-height:50px;text-align:center;font-size:16px;color:#fff;background-color:#d8b056;border-radius:4px;display:inline-block;cursor: pointer;}
    .veri-list .reg-infor{text-align:center;margin-top:30px;font-size:14px;color:#999;line-height:22px;}
    .veri-list .msg-veri{position:absolute;width:280px;height:20px;top:-25px;left:0;background:#f8eeb9 url("../../images/message_bg_03.png") no-repeat 5px 2px;color:#333;padding-left:25px;line-height:20px;display:none;}
    .veri-list>ul>li.l_drag{padding:0;border:none;margin-top:30px;display:none;}
    .veri-list{-moz-user-select: none; -khtml-user-select: none; user-select: none;}


    /*协议*/
    .shadowxy{background:url(../../images/white.png) repeat;width:100%;height:100%;position:fixed;left:0;top:0;opacity:.7;filter:alpha(opacity=70);z-index:99;display:none;}
    .closeBtn{background:url(../../images/icon2.png) no-repeat right -262px;width:50px;height:50px;position:fixed;right:40px;top:40px;z-index:100;cursor: pointer; display:none;}
    .alertLayer{width:898px;height:558px;background:#fff;box-shadow:0 0 4px rgba(0,0,0,0.3);position:absolute;left:50%;margin-left:-450px; z-index:100;border:1px solid #d4d4d4;display:none;}
    .fuwu_alertLayer{top:200px;}
    .dianzi_alertLayer{display:none;}
    .share_alertLayer{top:200px;display:none;}
    .alertLayer .layerShadow{width:109px;height:4px;background:#d8b056;position:absolute;left:41px;top:-1px;}
    .alertLayer .content{padding:40px 40px 20px 40px;}
    .alertLayer .content .top>p{float:left;color:#000;font-size:18px;margin-right:10px;margin-top:-13px;*margin-top:-10px;}
    .alertLayer .content .top .xian{width:698px;height:1px;background:#999;display:inline-block;}
    .alertLayer .content .middle{height:370px;width:818px;}
    .alertLayer .content .middle .des{padding:10px 10px 10px 0;margin:10px 15px 10px 0;overflow-y:scroll;height:100%;width:818px;}
    .alertLayer .content .middle .des>div{color:#000;font-size:16px;margin:30px 0;font-weight:bold;}
    .alertLayer .content .middle .des p{color:#000;font-size:14px;line-height:24px;}
    .alertLayer .content .bottom{margin-top:44px;}
    .alertLayer .content .bottom input{width:399px;height:40px;background:#333;color:#fff;border-radius:3px;font-size:14px;cursor:pointer;border:none 0;}
    .alertLayer .content .bottom input.red{background:#d8b056;margin-right:17px;}
    .dianzi_alertLayer .content .bottom{text-align:center;margin-top:40px;}
    .dianzi_alertLayer .content .bottom .tishi{color:#d8b056;margin-bottom:10px;font-size:14px;}
    .dianzi_alertLayer .content .bottom input.gray1{background:#999;}
    .dianzi_alertLayer .content .bottom input.red1{background:#d8b056;}
    @media screen and (min-width:1500px){
        .reg-content-wrap{margin-top: 95px;margin-left: 70px;}
        .reg-content-wrap>a>img{max-width: 240px;}
        .reg-content-wrap>p{font-size:55px;margin-bottom: 70px;}
        .reg-images-ad{width: 530px;height: 1080px;}
        .reg-images-ad>img{max-height: 1080px;}
        .reg-content-left .VIP-tequan{width:330px;}
        .reg-content-left .reg-image{margin-right:40px;}
        .reg-content-left .reg-intro{padding-right: 60px;padding: 20px 45px 35px 0;}
        .reg-content-right .reg-info>ul{width:490px;}
        .reg-content-left .reg-intro>ul>li{font-size:14px;}
        .reg-content-right{margin-left: 72px;}
        .reg-content-right .reg-info>ul>li>input{width:330px;}
        .reg-content-right .reg-info>ul>li>div>input{width: 280px;}
    }

    .reg-info li input::-webkit-input-placeholder{color: #ccc;}
    input:-moz-placeholder {color: #ccc;}
    input::-moz-placeholder {color: #ccc;}
    input:-ms-input-placeholder {color: #ccc;}

    .supplement_black{display:none;position:fixed;height: 100%;width: 100%;top: 0;left: 0;min-width: 1200px;z-index:99;background:#000;background:rgba(0,0,0,.5);filter:alpha(opacity=50)}
    .supplement{display:none;width:650px;height:663px;background-color:#fff;border-radius:5px;position:absolute;left:50%;top:50%;margin-left:0;margin-top:0;padding:50px 60px;box-sizing:border-box;z-index:99;}
    @media screen and (min-width:1000px){
        .supplement{margin-left:-325px;margin-top:-326px};
    }
    .supplement ul{height:100%;position:relative}
    .supplement ul li{height:36px}
    .supplement ul li label{width:85px;display:inline-block;font-size:14px;color:#666}
    .supplement ul li label>span{color:red}
    .supplement ul li>input{width:83%;height:34px;outline:0;border:0;font-size:13.5px}
    .supplement ul li.border{border-bottom:1px solid #ccc}
    .supplement ul li.industry{height:90px;margin-top:30px}
    .supplement ul li.industry>label{float:left}
    .supplement ul li.industry>div{width:83%;float:left}
    .supplement ul li.industry>div>span{float:left;height:30px;line-height:30px;padding:0 10px;border-radius:2px;margin-right:13px;margin-bottom:15px;font-size:12px;cursor:pointer;border:1px solid #ccc}
    .supplement ul li.industry>div>input{float:left;width:105px;height:30px;border:0;border-bottom:1px solid #ccc;display:none}
    .supplement ul li.industry>div>input::placeholder{color:#999}
    .supplement ul li.industry>div>span.active{color:#fff;border-color:#d8b056;background-color:#d8b056}
    .supplement ul li.err{height:15px;font-size:12px;color:red;margin-bottom:0;visibility:hidden}
    .v-hide{visibility:hidden}
    .supplement .immediately_box{height:50px;position:absolute;bottom:40px;left:0;width:100%;margin-bottom:0}
    .immediately{width:100%;height:50px;color:#fff;font-size:15px;background-color:#d8b056;border-radius:5px;outline:0;border:0}
    .err_msg{display: none;position: absolute;bottom: 0;left: 0;width: 100%;text-align: center;color: red;font-size: 12px;line-height: 36px;}

    .reg-info{position:relative;}
    .reg-info>ul>li{border-radius:3px;border-bottom:1px solid #cfcfcf;margin-top: 39px;padding-bottom: 10px;position: relative;}
    .reg-info>ul>li>label{width:45px;float:left;font-size:14px;color:#666;height:30px;line-height:30px;margin-right:20px;}
    .reg-info>ul>li>input[name="verifyCode"]{width:200px;}

    .reg-info>ul>li>input[type="button"]{width:87px;height:32px;background-color:#eee;color:#666;font-size:12px;border-radius:3px;position: absolute;right:0;bottom:7px;cursor: pointer;}
    .reg-info>ul>li.veri-code{margin-bottom:10px;}
    .reg-info>ul>li.veri-success{border:none;padding-bottom:0;padding-top:20px;margin-top:0;}
    .reg-info>ul>li.veri-success>a{width:100%;height:50px;line-height:50px;text-align:center;font-size:16px;color:#fff;background-color:#d8b056;border-radius:4px;display:inline-block;cursor: pointer;}
    .reg-info .reg-infor{text-align:center;margin-top:30px;font-size:14px;color:#999;line-height:22px;}
    .reg-info .msg-veri{/* position:absolute;top:30px;left:0; */width:100%;height:20px;box-sizing: border-box;background:#f8eeb9 url("../../images/message_bg_03.png") no-repeat 5px 2px;color:#333;padding-left:25px;line-height:20px;display:none;}
    .reg-info>ul>li.l_drag{padding:0;border:none;margin-top:30px;/* display:none; */}
    .reg-info{-moz-user-select: none; -khtml-user-select: none; user-select: none;}
    .reg-content-right .reg-info>ul{position: relative;}
    .reg-content-right .reg-info>ul>li>.js-drag-box{width: 100%;color: #fff;}
    .reg-content-right .reg-info>ul>li.l_drag{margin: 20px 0;/* display:none; */}
    .reg-content-right .reg-info>ul>li.l_drag.active{width: 100%;/* position: absolute;top: 100%; */visibility: hidden;}
    .reg-info .drag-box>p{height: 28px;background-position: 0 -4px;top: 1px;}
    .reg-info>ul>li.veri-code>span.msg{bottom: -18px;}
    .reg-info>ul>li.veri-code>input[type="button"]{background: #232f3c;color: #fff;right: 0;}
    .reg-content-right .reg-info>ul>li{border-bottom-color: #cfcfcf;}
    .reg-content-right .reg-info>ul>li.reg-btn>input{bottom: 0;}
    .reg-content-right .reg-info>ul>li.msg-veri-box{margin: 0;padding: 0;border: 0;height: auto;margin-bottom: 20px;}

    .reg-content-right .reg-info>ul>li.imgcaptcha-li>input{width: 195px;}
    .reg-content-right .reg-info>ul>li.imgcaptcha-li>img{width: 88px;height: 33px;border:1px solid #eee;border-radius: 3px;position: absolute;right:0;bottom:7px;cursor: pointer;}

    /* 完善资料 */

    .per-title{color: #333;font-size: 24px;text-align: center;margin-bottom: 10px;}

</style>
<div class="contant">
    <div class="main register">
        <div class="con_width">
            <div class="reg-content clearfix">
                <div class="reg-images-ad fl">
                    <img src="https://imgf3.pop-fashion.com/fashion/fm/ad/20200327/5e7d8dfa18a5f.jpg">
                </div>
                <div class="reg-content-wrap fl">
                    <a href="/" target="_blank"><img src="https://imgf2.pop-fashion.com/global/images/user/logo.png?2020091501"></a>
                    <p>欢迎加入 POP</p>
                    <div class="reg-content-left fl">
                        <div class="VIP-tequan fl">
                            <div class="h3-title">会员专享权利</div>
                            <div class="reg-intro">
                                <ul>
                                    <li><i>•</i>尊贵VIP会员身份标识</li>
                                    <li><i>•</i>网站高清大图，趋势分析报告无限量下载</li>
                                    <li><i>•</i>一线品牌绝密订货会优先接收</li>
                                    <li><i>•</i>智能设计工具优先体验</li>
                                    <li><i>•</i>线下活动优先通知，名额预留</li>
                                    <li><i>•</i>POP线上线下讲堂免费听</li>
                                    <li><i>•</i>一对一售后小秘书答疑解惑</li>
                                    <li><i>•</i>企业微信群服务</li>
                                </ul>
                            </div>
                            <p class="reg-contact">咨询热线:<span>18964394746</span></p>
                        </div>
                    </div>
                    <div class="reg-content-right fl">
                        <div class="reg-info">
                            <input type="hidden" name="RL" value="">
                            <input type="hidden" name="RID" value="0">
                            <input type="hidden" name="UID" value="">
                            <input type="hidden" name="APM" value="">
                            <input type="hidden" name="itype" value="1">
                            <input type="hidden" name="uid">
                            <input type="hidden" name="time">
                            <input type="hidden" name="hash">
                            <input type="hidden" name="aAreas" value="{" 1":"\u9999\u6e2f","2":"\u6fb3\u95e8","3":"\u53f0\u6e7e","4":"\u5176\u4ed6"}"="">
                            <div class="switch-btn">
                                <a class="now-active" href="/member/register/" title="注册" rel="nofollow">注册</a>
                                <a href="/member/pagelogin/" title="登录" rel="nofollow">登录</a>
                            </div>
                            <ul>
                                <p class="errorbox"></p>
                                <li class="clearfix"><label for="usn">用户名</label><input type="text" name="username" id="usn" placeholder="登录时使用，建议使用您常用的字符"><span class="msg" style="display: inline;">用户名不能为空</span></li>
                                <li class="clearfix"><label for="cp">手机号</label><input class="js-only-number" type="text" name="cellphone" id="cp" maxlength="11" placeholder="请输入手机号"><span class="msg"></span></li>
                                <!-- <li class="clearfix"><label for="tn">姓名</label><input type="text" name="truename" id="tn" placeholder="以便为您提供更好的服务" /><span class="msg"></span></li> -->
                                <!-- <li class="clearfix imgcaptcha-li">
                                    <label>图片验证码</label>
                                    <input type="text" name='imgcaptcha' placeholder="请输入图片验证码" maxlength="4"/>
                                    <img src="https://imgf2.pop-fashion.com/global/images/user/img_captcha.png" class="js-imgcaptcha-btn"/>
                                    <span class="msg"></span>
                                </li> -->
                                <li class="clearfix veri-code">
                                    <label>短信验证码</label>
                                    <input type="text" name="verifyCode" placeholder="请输入手机验证码">
                                    <input type="button" class="fr sms-button" id="sendVerifyCode" itype="1" value="获取验证码" data-cla=".js-puzzle-drag-content1" data-reg="1">
                                    <span class="msg"></span>
                                </li>
                                <li class="clearfix"><label for="pw">登录密码</label><div class="js-pwd-box"><input type="text" class="js-pwd-area" name="password" id="pw" placeholder="请输入登录密码"></div><em class="js-pwd-display"></em><span class="msg"></span></li>
                                <!-- js-city-reg-btn -->
                                <li class="city-reg"><a href="/member/HMTuser/" class="oversea-btn" target="_blank">港澳台及海外用户？</a></li>
                                <!-- <li class="city-reg js-city-reg-btn">港澳台及海外用户？</li> -->
                                <li class="reg-btn border-none"><input type="button" name="register_submit" value="立即注册"></li>
                                <li class="agree-fw border-none">提交注册，即同时同意<a href="javascript:void(0);" id="showAgree" class="on">“POP注册协议”</a></li>
                                <li class="agree-fw" style="border:none;text-align: left;">尊敬的用户，POP为了提供更方便、优质的服务，您现在登录注册的账号可在服装、鞋子、家纺、首饰、箱包、官网多个站点登录。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>