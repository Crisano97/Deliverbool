/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');


const app = new Vue({
    el: "#app",
    data() {
        return {
            // PASSWORD REGISTERED
            password: "",
            password_confirm: "",
            password_check: 0,
            user_name: "",
            user_name_check: 0,

            // RESTAURANT FORM
            rest_name: "",
            rest_name_check: 0,
            address: "",
            address_check: 0,
            piva: '',
            piva_check: 0,

            // DISH FORM
            dish_name: "",
            dish_name_check: 0,
            dish_price: "",
            dish_price_check: 0,
        };
    },
    methods: {
        // REGISTERED
        countCharUserName() {
            if (this.user_name.length >= 5) {         
                this.user_name_check = 1;
            } else if (this.user_name.length >= 0 && this.user_name.length < 5) {
                this.user_name_check = 2;
            }
        },
        checkPassword() {
            if (this.password === this.password_confirm && this.password.length >= 8) {
                this.password_check = 1;
            } else {
                this.password_check = 2;
            }
        },

       

        checkLoginPassword() {
            if (this.password.length >= 8) {
                this.password_check = 1;
            } else {
                this.password_check = 2;
            }
        },

        // RISTORANTI
        countCharRestName() {
            if (this.rest_name.length >= 3) {
                this.rest_name_check = 1;
            } else if (this.rest_name.length >= 0 && this.rest_name.length < 3) {
                this.rest_name_check = 2;
            }
        },
        countCharAddress() {
            if (this.address.length >= 5) {
                this.address_check = 1;
            } else if (this.address.length < 5) {
                this.address_check = 2;
            }
        },
        countPIVA() {
            
            if (this.piva.length == 11 ) {
                this.piva_check = 2;
            } else {
                this.piva_check = 1;
            }
        },

        // DISH
       
        countCharDishName() {
            if (this.dish_name.length >= 5) {
                this.dish_name_check = 1;
            } else if (this.dish_name.length > 0 && this.dish_name.length < 50) {
                this.dish_name_check = 2;
            }
        },
        checkDishPrice() {
            let check = parseInt(this.dish_price);
            if (check > 0) {
                this.dish_price_check = 1;
            } else {
                this.dish_price_check = 2;
            }
        },
           
         controlCategory(){
            const checked = document.querySelectorAll('input[type="checkbox"]:checked');
            const uncheck = document.querySelectorAll('input[type="checkbox"]');
            if (checked.length > 0) {
                for (let index = 0; index < uncheck.length; index++) {
                    const el = uncheck[index];
                    if (checked.length > 0) {
                        el.removeAttribute('required')
                    } else{
                        el.setAttribute('required', '')
                    }
                    
                }
            }
        }
     
    },

})