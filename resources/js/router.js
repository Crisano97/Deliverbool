import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
//Importare le singole pagine
 import HomePage from './pages/HomePage';
 import CartPage from './pages/CartPage';
 import CheckoutPage from './pages/CheckoutPage';
 import DishesPage from './pages/DishesPage';
 import ErrorPage from './pages/error404';

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
            path: '/checkout',
            name: 'checkout',
            component: CheckoutPage
        },
        {
            path: '/dishes/:id',
            name: 'dishes',
            component: DishesPage
        },
        {
            path: '/error',
            name: 'error',
            component: ErrorPage
        },
        
    ],
});
//esportare router a chi chiama
export default router