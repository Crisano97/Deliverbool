import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
//Importare le singole pagine
 import HomePage from './pages/HomePage';
 import CartPage from './pages/CartPage';
 import CheckoutPage from './pages/CheckoutPage'

//Creare una nuova istanza di vueRouter
const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/Cart',
            name: 'cart',
            component: CartPage
        },
        {
            path: '/Checkout',
            name: 'checkout',
            component: CheckoutPage
        }
        
    ],
});
//esportare router a chi chiama
export default router