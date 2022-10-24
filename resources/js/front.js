import Vue from 'vue';
import VueRouter from 'vue-router';

window.Vue = require('vue');

import App from './views/App';

Vue.use(VueRouter)
import router from './router.js';
// Vue.use(VueBraintree);
// import VueBraintree from 'vue-braintree';

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});