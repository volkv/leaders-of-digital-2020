import Vue from 'vue'
import store from 'vuex'
import router from './router'
import Vuetify from 'vuetify'
import App from './App'

Vue.config.productionTip = false
Vue.use(Vuetify)
export default new Vuetify({
    theme: {
        dark: true
    }
})

new Vue({
        el: '#app',
        router,
        store,
        vuetify: new Vuetify(),
        components: {App},
        template: '<App/>'
    }
)
