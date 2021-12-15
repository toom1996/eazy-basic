import { App } from '../../main'
import { storeSearch } from '../../api/v1/store.js'
import { getQueryVariable } from '../../utils/url.js'
App({
    data() {
        return {
            searchData: {
                wd: getQueryVariable('wd')
            }
        }
    },
    created() {
        storeSearch(this.searchData)
        alert('111111111111111')
    },
    mounted() {
        alert('22222222222')
    },
    watch : {

    },
    methods: {

    }
}).mount('#app');