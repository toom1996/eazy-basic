<div class="header" id="header">
    <div class="header-top-static">
        <div class="head-t-content clearfix">
            <div class="user-contain fr">
                <div class="user-box fl">
                    <img src="https://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJdL4RW29K1I61tU1FicKTARXcG9iaNCQHMhIBmTYkwxECG3UQWdkRQ4uvXj8dqWluVe4wCGkG0GbrQ/132">
                    <div class='username-box'>
                        <a href='javascript:void(0);' class="username">noooooooooooooooooooob</a>
                    </div>
                    <a href='javascript:void(0);' class='loginLayer' rel="nofollow" title="登录"><span class="lg"></span>登录</a>
                    <i></i>
                    <a class="reg-btn" href="/member/register" rel="nofollow" title="注册"><span class="rg"></span>注册</a>
                    <a class="btn btn-danger" href="#">
                        <i class="fa fa-shopping-cart fa-lg"></i>
                        <span class="product-count bg-black">01</span>
                    </a>
                </div>
            </div>
            <div class="function-contain con_width">
                <div class="f-search-section clearfix">
                    <div class="f-switch-box fl js-f-switch-box">
                        <a class="on" data-type="column">栏目搜</a>
                        <a data-type="all">全站搜</a>
                    </div>
                    <div class="f-search-input js-search-box fl">
                        <div class="js-all-input-contain">
                            <input v-model="searchData.wd" type="text" class="Itext input-Itext js-Itext" growing-track="true" placeholder="在本页面搜索你想要的…" style="padding-left:127px;" data-type="column" >
                            <input  @click="search" class="search-btn js-search-btn common-icon" type="button">
                            <div class="search_listDown">
                                <div class="menu"></div>
                                <div class="hot-menu">
                                    <div class="menu-hot-list">
                                        <div class="label js-history-label">历史记录<div class="fr"><span class="operat js-clear-operat">清除记录</span></div></div>
                                        <ul class="history-list"></ul>
                                        <div class="label">热门搜索</div>
                                        <ul class="hot-list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-find-box">
                    <a class="find-color" href="/Colorsearch/" title="色彩搜图"><i class="common-icon mutual_icon"></i>色彩搜图</a>
                    <span></span>
                    <a class="find-camera js-figure-btn" href="javascript:void(0);" title="以图搜图"><i class="common-icon mutual_icon"></i>以图搜图</a>
                </div>
            </div>
        </div>
    </div>
    <div class="new_nav_box js-new_nav_box">
        <div class="contentNew clearfix">
            <div class="new_lanmu">
                <ul class="clearfix">
                    <li class="nl_hover all-nav-li js-all-nav-li">
                        <a href="javascript:void(0);" class="common-icon"></a>
                        <div class="dropdown-column-list">
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">未来趋势</a>
                                </label>
                                <div class="fl">
                                    <a href="/trends/industryinsight/" target="_blank">行业洞察</a>
                                    <a href="/trends/color/" target="_blank">主题/色彩趋势</a>
                                    <a href="/trends/pattern/" target="_blank">图案趋势</a>
                                    <a href="/trends/craft/" target="_blank">细节工艺</a>
                                    <a href="/trends/material/" target="_blank">面辅料趋势</a>
                                    <a href="/trends/silhouette/" target="_blank">廓形趋势</a>
                                    <a href="/trends/design/" target="_blank"> 企划组货</a>
                                    <a href="/inspiration/" target="_blank">灵感源</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">正在流行</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/" target="_blank">分析报告</a>
                                    <a href="/styles/dis_1/" target="_blank">款式精选</a>
                                    <a href="/trends/capsules/" target="_blank">快反应</a>
                                    <a href="/books/lookbook/" target="_blank">广告大片</a>
                                    <a href="/books/lookbook/typ_2/#anchor" target="_blank">搭配手册</a>
                                    <a href="/books/magazine/" target="_blank">书籍杂志</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">全球商拍</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/market/" target="_blank">市场分析</a>
                                    <a href="/analysis/fabricanalysis/" target="_blank">面料分析</a>
                                    <a href="/analysis/fairs/" target="_blank">展会分析</a>
                                    <a href="/styles/retail/" target="_blank">零售实拍</a>
                                    <a href="/styles/retail/ds_1/" target="_blank">批发精选</a>
                                    <a href="/styles/retail/ds_3/" target="_blank">展会精选</a>
                                    <a href="/references/fabricgallery/" target="_blank">展会面料</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">订货会</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/shows/" target="_blank">订货会分析</a>
                                    <a href="/styles/shows/" target="_blank">订货会精选</a>
                                    <a href="/books/ordermeeting/" target="_blank">全款合辑</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">T台秀场</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/runways/" target="_blank">T台分析</a>
                                    <a href="/styles/runways/" target="_blank">T台精选</a>
                                    <a href="/runways/" target="_blank">T台合辑</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">设计师品牌</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/online/" target="_blank">品牌分析</a>
                                    <a href="/styles/online/" target="_blank">品牌精选</a>
                                    <a href="/styles/designerbrand/" target="_blank">品牌合辑</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">标杆品牌</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/retail/" target="_blank">标杆分析</a>
                                    <a href="/styles/online/" target="_blank">标杆款式</a>
                                    <a href="/styles/popular/" target="_blank">款式流行</a>
                                    <a href="/patterns/topbrands/" target="_blank">大牌花型</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">明星街拍</a>
                                </label>
                                <div class="fl">
                                    <a href="/analysis/trendsetters/" target="_blank">街拍分析</a>
                                    <a href="/styles/trendsetters/" target="_blank">明星街拍</a>
                                    <a href="/styles/streetsnaps/" target="_blank">时尚穿搭</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">图案/素材</a>
                                </label>
                                <div class="fl">
                                    <a href="/trends/pattern/" target="_blank">图案分析</a>
                                    <a href="/patterns/graphics/" target="_blank">图案下载</a>
                                    <a href="/references/design/" target="_blank">款式模板</a>
                                    <a href="/references/details/" target="_blank">款式细节</a>
                                    <a href="/references/accessories/" target="_blank">服饰品</a>
                                    <a href="/references/visual/" target="_blank">店铺陈列</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <label class="fl">
                                    <a href="javascript:void(0);">数据分析</a>
                                </label>
                                <div class="fl">
                                    <a href="/smarttrends/colordata/" target="_blank">色彩数据分析</a>
                                    <a href="https://yuntu.pop136.com/" target="_blank">2D&3D试衣</a>
                                    <a href="/smarttrends/topstyles/" target="_blank">TOP款式热榜</a>
                                    <a href="/Colorsearch/" target="_blank">色彩搜图</a>
                                    <a href="/picmatch/similarpic/" target="_blank">以图搜图</a>
                                </div>
                            </div>
                            <p class="contact-tel clearfix">
                                <em class="fl"></em>
                                <span class="fl">
                                    <i class="common-icon"></i>
                                    产品咨询:<strong class="strong-m">4008-210-500</strong>售后帮助:<strong>4008-210-662</strong>
                                </span>
                                <em class="fl"></em>
                            </p>
                        </div>
                    </li>
                    <li class="nl_hover switch-area js-switch-area  ">
                        <a href="/" class="nl_a" title="切换专区">切换专区</a>

                        <div class="navshaixuan-list">
                            <ul class="small-fenlei js-area-box">
                                <li class="clearfix"><a href="javascript:void(0);" data-id="2" data-key="gen" title="女装"><em>女装</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="1" data-key="gen" title="男装"><em>男装</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="5" data-key="gen" title="童装"><em>童装</em></a></li>
                                <li class="fenge-area-line"></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="1" data-key="reg" title="日韩专区"><em>日韩专区</em></a></li>
                                <li class="clearfix"><a href="/fabriczone/" title="面料专区"><em>面料专区</em></a></li>
                                <li class="fenge-area-line"></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="6" data-key="ind" title="毛衫"><em>毛衫</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="7" data-key="ind" title="牛仔"><em>牛仔</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="8" data-key="ind" title="皮革/皮草"><em>皮革/皮草</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="9" data-key="ind" title="内衣/泳装"><em>内衣/泳装</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="10" data-key="ind" title="婚纱/礼服"><em>婚纱/礼服</em></a></li>
                                <li class="clearfix"><a href="javascript:void(0);" data-id="11" data-key="ind" title="运动"><em>运动</em></a></li>
                            </ul>
                            <a class="back-index-page" href="/" title="切换专区"><em></em>切换专区</a>
                        </div>
                    </li>
                    <li class="nl_hover fg-line"></li>
                    <li class="nl_hover has_down ">
                        <a class="nl_a" href="/trends/" title="趋势解读">趋势解读</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/trends/" title="全部">全部</a></li>
                                <li><a href="/trends/industryinsight/" title="行业洞察">行业洞察</a></li>
                                <li><a href="/trends/color/" title="主题色彩">主题色彩</a></li>
                                <li><a href="/trends/pattern/" title="图案趋势">图案趋势</a></li>
                                <li><a href="/trends/material/" title="面辅料趋势">面辅料趋势</a></li>
                                <li><a href="/trends/craft/" title="细节工艺">细节工艺</a></li>
                                <li><a href="/trends/silhouette/" title="廓形趋势">廓形趋势</a></li>
                                <li><a href="/trends/design/" title="企划/组货">企划/组货</a></li>
                                <li><a href="/trends/capsules/" title="快反应">快反应</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover has_down ">
                        <a class="nl_a" href="/analysis/" title="流行分析">流行分析</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/analysis/" title="全部">全部</a></li>
                                <li><a href="/analysis/tops/" title="爆款数据">爆款数据</a></li>
                                <li><a href="/analysis/runways/" title="T台分析">T台分析</a></li>
                                <li><a href="/analysis/shows/" title="订货会分析">订货会分析</a></li>
                                <li><a href="/analysis/online/" title="设计师品牌分析">设计师品牌分析</a></li>
                                <li><a href="/analysis/retail/" title="标杆品牌分析">标杆品牌分析</a></li>
                                <li><a href="/analysis/market/" title="市场分析">市场分析</a></li>
                                <li><a href="/analysis/fabricanalysis/" title="面料分析">面料分析</a></li>
                                <li><a href="/analysis/fairs/" title="展会分析">展会分析</a></li>
                                <li><a href="/analysis/trendsetters/" title="明星&街拍分析">明星&街拍分析</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover fg-line"></li>
                    <li class="nl_hover has_down ">
                        <a class="nl_a" href="/styles/dis_1/" title="款式">款式</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/styles/dis_1/" title="全部">全部</a></li>
                                <li><a href="/styles/runways/dis_1/" title="秀场提炼">秀场提炼</a></li>
                                <li><a href="/styles/shows/dis_1/" title="订货会精选">订货会精选</a></li>
                                <li><a href="/styles/designerbrand/dis_1/" title="设计师品牌">设计师品牌</a></li>
                                <li><a href="/styles/online/dis_1/" title="名牌精选">名牌精选</a></li>
                                <li><a href="/styles/popular/dis_1/" title="款式流行">款式流行</a></li>
                                <li><a href="/styles/retail/dis_1/" title="全球实拍">全球实拍</a></li>
                                <li><a href="/styles/trendsetters/dis_1/" title="明星/ins">明星/ins</a></li>
                                <li><a href="/styles/streetsnaps/dis_1/" title="街拍图库">街拍图库</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover has_down " data-nav="patterns">
                        <a class="nl_a" href="/patterns/graphics/" title="图案">图案</a>
                        <!-- <div class="downlist_box">
                            <ul>
                                <li><a href="/patterns/graphics/" title="图案素材">图案素材</a></li>
                                <li><a href="/patterns/topbrands/" title="大牌花型">大牌花型</a></li>
                                <li><a href="/patterns/specialtopicpatterns/" title="图案专题">图案专题</a></li>
                                <li><a href="/patterns/technics/" title="图案工艺">图案工艺</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li class="nl_hover has_down selected">
                        <a class="nl_a" href="/runways/" title="T台">T台</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/runways/" title="全部">全部</a></li>
                                <li><a href="/runways/reg_272/" title="巴黎时装周">巴黎时装周</a></li>
                                <li><a href="/runways/reg_341/" title="纽约时装周">纽约时装周</a></li>
                                <li><a href="/runways/reg_335/" title="米兰时装周">米兰时装周</a></li>
                                <li><a href="/runways/reg_323/" title="伦敦时装周">伦敦时装周</a></li>
                                <li><a href="/runways/reg_other/" title="其它">其它</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover has_down ">
                        <a class="nl_a" href="/references/details/" title="素材">素材</a>
                        <div class="downlist_box downlist_box2 downlist_references">
                            <ul>
                                <li><a href="/references/details/" title="款式细节">款式细节</a></li>
                                <li><a href="/references/design/" title="款式手稿">款式手稿</a></li>
                                <li><a href="/references/visual/" title="店铺陈列">店铺陈列</a></li>
                                <li><a href="/references/fabricgallery/" title="展会面料">展会面料</a></li>
                                <li><a href="/references/accessories/" title="服饰品">服饰品</a></li>
                                <li><a href="/inspiration/" title="灵感源">灵感源</a></li>
                                <!-- <li><a href="/inspiration/video/" title="灵感视频">灵感视频</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover has_down ">
                        <a class="nl_a" href="/books/lookbook/" title="读物">读物</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/books/lookbook/" title="广告大片">广告大片</a></li>
                                <li><a href="/books/ordermeeting/" class="js-ordermeeting" title="订货会合辑">订货会合辑</a></li>
                                <li><a href="/books/collections/" title="单品合辑">单品合辑</a></li>
                                <li><a href="/books/fast/" title="快反应系列">快反应系列</a></li>
                                <li><a href="/books/magazine/" title="流行画册">流行画册</a></li>
                                <li><a href="/reportbook/" title="流行画册">系列报告</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover "><a class="nl_a" href="/video/" title="视频">视频</a></li>
                    <li class="nl_hover fg-line"></li>
                    <li class="nl_hover has_down design_tools">
                        <a class="nl_a" href="javascript:void(0);" style="cursor: default;" title="直播/书店"><em></em>直播/书店<i></i></a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/item/seclist/mct_3/" target="_blank" title="云 · 书店">云 · 书店</a></li>
                                <li><a href="https://course.pop-fashion.com/page/1244172" target="_blank" rel="nofollow" title="云 · 时尚">面料直播</a></li>
                                <li><a href="https://course.pop-fashion.com/page/1437198" target="_blank" rel="nofollow" title="云展会">云展会</a></li>
                                <li><a href="https://course.pop-fashion.com/page/827920" target="_blank" rel="nofollow" title="行业课程">行业课程</a></li>
                                <li><a href="https://course.pop-fashion.com/page/828792" target="_blank" rel="nofollow" title="趋势讲堂">趋势讲堂</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover find-brand">
                        <a class="nl_a" href="/brands/" target="_blank" title="发现品牌"><em></em>品牌库</a>
                    </li>
                    <li class="nl_hover has_down service_resources">
                        <a class="nl_a" href="/topic/resources/" title="研发资源"><em></em>资源</a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="https://www.kuanok.com/" target="_blank" rel="nofollow" title="版圈">版圈<i></i></a></li>
                                <li><a href="http://www.popshejie.com" target="_blank" rel="nofollow" title="设界">设界</a></li>
                                <li><a href="/item/" target="_blank" title="商城">商城</a></li>
                                <li><a href="http://www.uliaobao.com/" target="_blank" rel="nofollow" title="优料宝">优料宝</a></li>
                                <li><a href="/topic/20171208/" target="_blank" rel="nofollow" title="找料帮">找料帮</a></li>
                                <li><a href="/activity/lists/" target="_blank" title="时尚商学院">时尚商学院</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nl_hover has_down intelligent">
                        <a class="nl_a" href="/smarttrends/" title="智能+">
                            <span class="js-intelligent-gif">
                                                                <img class="png" src="https://imgf2.pop-fashion.com/global/images/color_data/intelligent.png?2021111101" alt="">
                                <img class="gif" src="https://imgf2.pop-fashion.com/global/images/color_data/intelligent.gif?2021111101" alt="">
                                                            </span>
                        </a>
                        <div class="downlist_box">
                            <ul>
                                <li><a href="/smarttrends/colordata/" target="_blank" title="色彩数据">色彩数据</a></li>
                                <li><a href="/smarttrends/topstyles/" target="_blank" title="款式热榜">款式热榜</a></li>
                                <li><a href="https://yuntu.pop136.com/virtualtryon/virtualspl/" target="_blank" title="2D实景模拟">2D实景模拟</a></li>
                                <li><a href="https://yuntu.pop136.com/simulate3d/" target="_blank" title="3D模拟成品">3D模拟成品</a></li>
                                <li><a href="/picmatch/similarpic/" target="_blank" title="以图搜图">以图搜图</a></li>
                                <li><a href="/patterns/patternRecommend/" target="_blank" title="智能推荐">智能推荐</a></li>
                                <li><a href="/Colorsearch/" target="_blank" title="色彩搜图">色彩搜图</a></li>
                                <li><a href="https://yuntu.pop136.com/" target="_blank" title="云图">云图</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="new_nav_content js-new_nav_content w0">
                <li data-nav="patterns">
                    <img class="nav_bg fade-up" data-delay='1' src="https://imgf2.pop-fashion.com/global/images/new_common/nav_img.png?2021111101" alt="">
                    <div class="nav_table clearfix">
                        <div class="nav_section">
                            <div class="title fade-up" data-delay='1' data-en="TREND">图案趋势</div>
                            <ul class="nav_items clearfix">
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/trends/pattern/relt_173/#anchor" target="_blank"><span class="route-link">图案趋势</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/trends/pattern/?key=%25E5%2589%258D%25E7%259E%25BB%25E5%259B%25BE%25E6%25A1%2588%25E8%25B6%258B%25E5%258A%25BF#anchor" target="_blank"><span>前瞻趋势</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/trends/pattern/trd_12372/#anchor" target="_blank"><span>应用趋势</span></a></div>
                                    <div class="fade-up" data-delay='5'><a href="/trends/pattern/?key=%25E5%259B%25BE%25E6%25A1%2588%25E5%25BF%25AB%25E5%258F%258D#anchor" target="_blank"><span>图案快反</span></a></div>
                                    <div class="fade-up" data-delay='6'><a href="/trends/pattern/trd_12372/?key=%25E5%259B%25BE%25E6%25A1%2588%25E8%2589%25BA%25E6%259C%25AF%25E5%25AE%25B6%25E6%258E%25A8%25E8%258D%2590#anchor" target="_blank"><span>艺术家</span></a></div>
                                </li>
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/trends/pattern/trd_12373/#anchor" target="_blank"><span>图案工艺</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/trends/pattern/trd_12373/#anchor" target="_blank"><span>工艺趋势</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/trends/pattern/trd_12373/?key=%25E5%2588%25BA%25E7%25BB%25A3#anchor" target="_blank"><span>刺绣趋势</span></a></div>
                                </li>
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/analysis/man_12413/#anchor" target="_blank"><span>图案分析</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/analysis/tops/man_12413/#anchor" target="_blank"><span>图案TOP市场分析</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/analysis/runways/man_12413/#anchor" target="_blank"><span>T台图案分析</span></a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="nav_section">
                            <div class="vline fade-up" data-delay='1'></div>
                            <div class="title fade-up" data-delay='1' data-en="PATTERN">图案素材</div>
                            <ul class="nav_items clearfix">
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/patterns/graphics/for_10961/#anchor" target="_blank"><span>矢量素材</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/patterns/graphics/?key=%25E5%2585%25AC%25E7%2589%2588#anchor" target="_blank"><span>公版</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/patterns/graphics/?key=%25E5%258E%259F%25E5%2588%259B#anchor" target="_blank"><span>原创</span></a></div>
                                </li>
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/patterns/graphics/for_15381/#anchor" target="_blank"><span>高清位图</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/patterns/graphics/?key=%25E8%2589%25BA%25E6%259C%25AF%25E5%25AE%25B6#anchor" target="_blank"><span>艺术家</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/patterns/graphics/?key=%25E6%2589%258B%25E7%25BB%2598%25E5%259B%25BE%25E8%25B0%25B1#anchor" target="_blank"><span>手绘图谱</span></a></div>
                                    <div class="fade-up" data-delay='5'><a href="/patterns/graphics/?key=ins#anchor" target="_blank"><span>ins图</span></a></div>
                                </li>
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/patterns/topbrands/" target="_blank"><span>大牌花型</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/patterns/topbrands/?key=%25E5%25A4%25A7%25E7%2589%258C%25E8%25A1%258D%25E4%25BC%25B8#anchor" target="_blank"><span>大牌衍伸</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/patterns/topbrands/?key=Dior#anchor" target="_blank"><span>Dior</span></a></div>
                                    <div class="fade-up" data-delay='5'><a href="/patterns/topbrands/bra_135757/gen_0/#anchor" target="_blank"><span>Louis Vuitton</span></a></div>
                                    <div class="fade-up" data-delay='6'><a href="/patterns/topbrands/bra_82445/gen_0/#anchor" target="_blank"><span>Gucci</span></a></div>
                                </li>
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="tit" href="/patterns/technics/" target="_blank"><span>图案工艺</span></a></div>
                                    <div class="fade-up" data-delay='3'><a href="/patterns/technics/protech_12222/#anchor" target="_blank"><span>品牌工艺</span></a></div>
                                    <div class="fade-up" data-delay='4'><a href="/patterns/technics/protech_12221/#anchor" target="_blank"><span>市场工艺</span></a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="nav_section">
                            <div class="vline fade-up" data-delay='1'></div>
                            <div class="title fade-up" data-delay='1' data-en="AI TOOLS">智能工具</div>
                            <ul class="nav_items clearfix">
                                <li>
                                    <div class="fade-up" data-delay='2'><a class="max" href="/details/virtualspl/?id=554009&t=graphicitem&col=82&sign=4427a&codepic=https%253A%252F%252Fimgf3.pop-fashion.com%252Ffashion%252Fgraphic%252F20210730-sh5998%252Fmbig%252F49d63198322d4d972290615c22b0e81d.png" target="_blank"><span>实景模拟</span></a></div>
                                    <div class="fade-up" data-delay='3'><a class="max" href="https://www.kuanok.com/" target="_blank"><span>作品存证-版圈</span></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>