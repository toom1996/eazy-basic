import { App } from '../../main'
import { storeSearch } from '../../api/v1/store.js'
import { getQueryVariable } from '../../utils/url.js'
App({
    data() {
        return {
            searchData: {
                wd: getQueryVariable('wd')
            },
            showSkeleton: false, // 骨架图
            listData: [],
        }
    },
    created() {
        if (this.searchData.wd !== undefined) {
            this.search()
        }
    },
    mounted() {
    },
    watch : {

    },
    methods: {
        search(){
            console.log(this.searchData)
            storeSearch(this.searchData).then((e) => {
                console.log(e.code)
                this.listData = e.data
            }).catch()
        }
    }
}).mount('#app');