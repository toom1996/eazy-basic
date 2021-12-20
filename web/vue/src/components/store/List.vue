<template>
  <p>sfasfsdf</p>
<!--  <div class="list mt-1 container">-->
<!--    <div class="list-box row">-->
<!--      <ul v-show="this.properties.list.length > 0" itemscope class="ul-skeleton col-3 p-0" v-for="(item, i) in this.properties.list">-->
<!--        <li class="skeleton-item p-1">-->
<!--          <div class="mask">-->
<!--            <div class="cover-warp">-->
<!--              <img style="width: 100%;display: inline;" class="cover-lazy" :src="item.cover" :alt="item.title">-->
<!--              <div class="info">-->
<!--                <div>-->
<!--                  <a href="javascript(0);">-->
<!--                    <div class="title" :title="item.name">{{ item.title }}</div>-->
<!--                  </a>-->
<!--                  <div class="label-list">-->
<!--                    <a href="/analysis/fairs/sea_12322/" title="2021春夏">2021春夏</a>-->
<!--                    <a href="/analysis/fairs/cat_11121/" title="外套">外套</a>-->
<!--                    <a href="/analysis/fairs/cat_11118/" title="裙">裙</a>-->
<!--                    <a href="/analysis/fairs/cat_11124/" title="礼服">礼服</a>-->
<!--                  </div>-->
<!--                  <div class="label-mask">-->
<!--                  </div>-->
<!--                  <div class="info-mask">-->
<!--                    <div class="label-list">-->
<!--                      <a href="/analysis/fairs/sea_12322/" title="2021春夏">2021春夏</a>-->
<!--                      <a href="/analysis/fairs/cat_11121/" title="外套">外套</a>-->
<!--                      <a href="/analysis/fairs/cat_11118/" title="裙">裙</a>-->
<!--                      <a href="/analysis/fairs/cat_11124/" title="礼服">礼服</a>-->
<!--                    </div>-->
<!--                    <div class="warp clearfix">-->
<!--                      <span class="time fl">2021-08-06</span>-->
<!--                      <span class="view fr">61787</span>-->
<!--                    </div>-->
<!--                    <div class="bg"></div>-->
<!--                    <div class="bg bg-dark"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </li>-->
<!--      </ul>-->
<!--      <div v-show="this.properties.list.length === 0" class="rightc_main">-->
<!--        &lt;!&ndash; 这是游客身份&ndash;&gt;-->
<!--        <div class="no_sear  ">-->
<!--          <p>抱歉，没找到符合条件的内容，试试<a href="/search/" class="js-search-jump" target="_blank">全站搜索</a> 吧！</p>-->
<!--        </div>-->

<!--        &lt;!&ndash; 图案搜索为空时推荐数据 &ndash;&gt;-->

<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
</template>

<script>
import {storeSearch} from "../../api/v1/store";
import {getQueryVariable} from "../../utils/url";

export default {
  name: "StoreList",
  data() {
    return {
      // properties: {
      //   wd: getQueryVariable('wd'),
      //   list: {}
      // }
    }
  },
  created() {
    // if (this.properties.wd !== undefined) {
    //   this.search()
    // }
  },
  methods: {
    // search(){
    //   console.log(this.properties.wd)
    //   storeSearch(this.properties.wd).then((e) => {
    //     console.log(e.code)
    //     this.properties.list = e.data
    //   }).catch()
    // },
  }
}
</script>

<style scoped>

</style>