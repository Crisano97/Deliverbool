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

            // RESTAURANT FORM
            piva: 0,
            piva_check: 0,
        };
    },
    methods: {
        // REGISTERED
        checkPassword() {
            if (this.password == this.password_confirm && this.password.length >= 8) {
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
        countPIVA() {
            
            if (this.piva.length == 11 ) {
                this.piva_check = 1;
            } else if (this.piva.length <= 10 || this.piva.length >= 12) {
                this.piva_check = 2;
            }
            console.log(this.piva)
        },
    },
})