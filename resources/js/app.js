require('./bootstrap');

window.Vue = require('vue');

import signupForm from "./components/signupForm";

import VModal from 'vue-js-modal'
Vue.use(VModal,{dynamic: true})

const app = new Vue({
    el: '#app',
    name:'App',
    methods: {
        openform(){
            this.$modal.show(signupForm,{},{
                height: 'auto'
            });
        }
    }
});
