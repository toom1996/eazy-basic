import axios from 'axios'
import Vue from 'vue'
import qs from 'qs'
// const v = new Vue()
// const state = store.state
// var isRefreshing = false
// create an axios instance
axios.defaults.timeout = 60000
axios.defaults.baseURL = process.env.VUE_APP_API

// 取消重复请求的接口
const removeCommonPending = (config) => {
    for (const k in store.state.axiosPromiseCancel) {
        if (store.state.axiosPromiseCancel[k].u === config.url + '&' + config.method) {
            store.commit('clearCommonAxiosPromiseCancel', k)
        }
    }
}

// request interceptor
axios.interceptors.request.use(
    (config) => {
        // do something before request is sent
        removeCommonPending(config)
        config.headers = {
            'Content-Type': 'application/x-www-form-urlencoded', // 设置跨域头部
            Authorization: state.zUser.token
            // Authorization: state.zUser.token
        }

        config.cancelToken = new axios.CancelToken((cancel) => {
            store.commit('setAxiosPromiseCancelArr', { u: config.url + '&' + config.method, f: cancel })
        })

        // const token = store.state.count
        // config.url = `${config.url}&token=${token}`
        // if (access_token) {
        // config.url = `${config.url}&access-token=${access_token}`;
        // }
        return config
    },
    (error) => {
        // do something with request error
        console.log(error) // for debug
        return Promise.reject(error)
    }
)

// response interceptor
axios.interceptors.response.use(
    /**
     * If you want to get http information such as headers or status
     * Please return  response => response
     */

    /**
     * Determine the request status by custom code
     * Here is just an example
     * You can also judge the status by HTTP Status Code
     */
    (response) => {
        const res = response.data
        // 401 退出登陆
        if (res.code === HttpCode.UserErrTokenExpired || res.code === HttpCode.UserErrBadToken) {
            store.commit('setuserInfo', '')
            localStorage.removeItem('zUser')
            // 跳转到登陆页面
            router.push({ path: '/login' })
        }

        // if the custom code is not 20000, it is judged as an error.
        if (res.code !== HttpCode.Success && res.code !== 401) {
            v.$toast(res.msg || '服务器异常')
            // return Promise.reject(new Error(''))
        }
        if (res.code === HttpCode.Success) {
            // 刷新token
            const t = Math.round(new Date().getTime() / 1000).toString()
            console.log(t - state.zUser.issuing_time)
            // 超过生存时间
            if (t - state.zUser.issuing_time >= 3600 && isRefreshing === false) {
                console.log('超时拉')
                isRefreshing = true
                refreshToken({
                    refresh_token: state.zUser.refresh_token
                }).then((e) => {
                    isRefreshing = false
                    store.commit('setToken', e.data)
                }).catch((e) => {
                    isRefreshing = false
                    console.log(111111111)
                })
            }
        }

        return response
    },
    (error) => {
        v.$toast('服务器异常')
        return Promise.reject(error)
    }
)

/**
 * get 请求方法
 * @param url
 * @param params
 * @returns {Promise}
 */
export function get (url, params = {}) {
    return new Promise((resolve, reject) => {
        axios.get(url, {
            params: params
        })
            .then(response => {
                resolve(response.data)
            })
            .catch(err => {
                reject(err)
            })
    })
}

/**
 * post 请求方法
 * @param url
 * @param data
 * @returns {Promise}
 */
export function post (url, data = {}) {
    return new Promise((resolve, reject) => {
        axios.post(url, qs.stringify(data))
            .then(response => {
                resolve(response.data)
            }, err => {
                reject(err)
            })
    })
}

/**
 * delete 请求方法
 * @param url
 * @param data
 * @returns {Promise}
 */
export function del (url, data = {}) {
    return new Promise((resolve, reject) => {
        axios.delete(url, { data: qs.stringify(data) })
            .then(response => {
                resolve(response.data)
            }, err => {
                reject(err)
            })
    })
}

/**
 * patch 方法封装
 * @param url
 * @param data
 * @returns {Promise}
 */
export function patch (url, data = {}) {
    return new Promise((resolve, reject) => {
        axios.patch(url, data)
            .then(response => {
                resolve(response.data)
            }, err => {
                reject(err)
            })
    })
}

/**
 * put 方法封装
 * @param url
 * @param data
 * @returns {Promise}
 */
export function put (url, data = {}) {
    return new Promise((resolve, reject) => {
        axios.put(url, data)
            .then(response => {
                resolve(response.data)
            }, err => {
                reject(err)
            })
    })
}
