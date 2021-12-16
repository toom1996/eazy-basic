const path = require('path');

module.exports = {
    entry: {
        '/site/index': {
            import: './src/pages/store/index.js',
            dependOn: ['/vendor/commons']
        },
        '/widgets/headers/mainHeader': {
            import: './src/widgets/headers/mainHeader.js',
            dependOn: ['/vendor/commons']
        },
        // steeper: ['./src/plugins/steeper'],
        '/vendor/commons': [
            './src/main.js',
            // './src/utils/encrypt',
            './src/utils/request',
        ]
    },// 表示，要使用 webpack 打包哪个文件
    output: { // 输出文件相关的配置
        path: path.join(__dirname, './dist'), // 指定 打包好的文件，输出到哪个目录中去
        filename: "[name].bundle.js",
        publicPath: '/js/dist/'
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.cjs.js'
        }
    },
    mode: 'production',
};