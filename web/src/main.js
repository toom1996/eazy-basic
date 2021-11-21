import {createApp} from 'vue'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'bootstrap/dist/css/bootstrap.css'
// import './css/base.css'
// import './css/reset.css'
// import './css/global.css'
// import './css/common.css'
// import './css/new_common.css'
// import './css/list-common.css'
// import Header from './components/Header.vue'
// import Footer from './components/Footer.vue'

export var App =  function (root) {
    // app.mixin({
    //       data() {
    //             return {
    //                   appScroll: 0
    //             }
    //       }
    // });
    // app.component('top-header', Header);
    // app.component('bottom-footer', Footer);
    return createApp(root);
};
// createApp({
//     data() {
//         return {
//             // 全局滚动高度
//             appScroll: 0,
//             isLoading: 0,
//         }
//     },
//     created() {
//         console.log('main -> created')
//         this.appScroll = this.getScroll();
//         // 全局监听滚轮滚动
//         window.onscroll = () =>  {
//             this.appScroll = this.getScroll();
//         };
//     },
//     mounted() {
//         this.isLoading = false;
//     },
//     methods: {
//         getScroll() {
//             return document.documentElement.scrollTop || document.body.scrollTop;
//         }
//     }
// });
// App.component('top-header', Header);
// App.component('bottom-footer', Footer);

