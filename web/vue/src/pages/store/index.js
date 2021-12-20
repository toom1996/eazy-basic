import { App } from '../../main'
import storeFilter from "../../components/store/Filter.vue";
import StoreList from "../../components/store/List.vue";
App({
    data() {
        return {
            showSkeleton: false, // 骨架图
            listData: [],
            el: {
                filterOffsetHeight: 0,
                filterFixed: false,
                headerHeight: 0,
            },
        }
    },
    created() {
        window.addEventListener('scroll',()=>{
            if (this.el.filterFixed === false && window.scrollY + this.el.headerHeight > document.getElementsByClassName('banner-top new-banner-top new-banner')[0].offsetTop + document.getElementsByClassName('list-nav-screen-section')[0].offsetTop) {
                this.el.filterFixed = true;
                document.getElementsByClassName('list-nav-screen-section')[0].style.position = 'fixed';
                document.getElementsByClassName('list-nav-screen-section')[0].style.width = '100%';
                document.getElementsByClassName('list-nav-screen-section')[0].style.top = '40px';
                document.getElementsByClassName('list-nav-screen-section')[0].style.backgroundColor = 'white';
            }
            console.log(window.scrollY)
            console.log(this.el.filterFixed)
            if (this.el.filterFixed === true && window.scrollY + this.el.headerHeight < document.getElementsByClassName('banner-top new-banner-top new-banner')[0].clientHeight){
                this.el.filterFixed = false;
                document.getElementsByClassName('list-nav-screen-section')[0].style.removeProperty('position');
                document.getElementsByClassName('list-nav-screen-section')[0].style.removeProperty('top');
            }
        })

        // window.onscroll = that => {
        //     let scroll = this.getScroll()
        //     console.log(that.filterFixed)
        //     console.log('scroll -> ',scroll)
        //     console.log('clientHeight -> ', document.getElementsByClassName('banner-top new-banner-top new-banner')[0].clientHeight)
        //     if (this.filterFixed === false && scroll + this.headerHeight > document.getElementsByClassName('banner-top new-banner-top new-banner')[0].offsetTop + document.getElementsByClassName('list-nav-screen-section')[0].offsetTop) {
        //         this.filterFixed = true;
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.position = 'fixed';
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.width = '100%';
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.top = '40px';
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.backgroundColor = 'white';
        //     }
        //     if (this.filterFixed === true && scroll < document.getElementsByClassName('banner-top new-banner-top new-banner')[0].clientHeight){
        //         this.filterFixed = false;
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.removeProperty('position');
        //         document.getElementsByClassName('list-nav-screen-section')[0].style.removeProperty('top');
        //     }
        // };
    },
    mounted() {
        this.el.filterOffsetHeight = document.getElementsByClassName('banner-top new-banner-top new-banner')[0].offsetTop + document.getElementsByClassName('list-nav-screen-section')[0].offsetTop;
        console.log('1 -> ', document.getElementsByClassName('banner-top new-banner-top new-banner')[0].offsetTop)
        console.log('2 -> ', document.getElementsByClassName('list-nav-screen-section')[0].offsetTop)
        this.el.headerHeight = document.getElementsByClassName('head-top-static')[0].clientHeight;
        console.log(this.filterOffsetHeight)
    },
    watch : {

    },
    methods: {

    }
}).component('store-filter', storeFilter).mount('#app');