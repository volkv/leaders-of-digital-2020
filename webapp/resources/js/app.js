import Vue from 'vue'
import store from 'vuex'
import router from './router'
import App from './App'

/* eslint-disable no-new */
new Vue({
        el: '#app',
        components: {App},
        template: '<app></app>',
        store,
        router,
    }
)
