import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
//Importare le singole pagine
 import HomePage from './pages/HomePage';

//Creare una nuova istanza di vueRouter
const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        
    ],
});
//esportare router a chi chiama
export default router