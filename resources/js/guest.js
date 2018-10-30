import Vue from 'vue'
import axios from 'axios'

import App from './Guest/App.vue'
import router from './Guest/router'

require('./bootstrap');

const app = new Vue({
    el: '#app',
    template: '<app></app>',
    components: {App},
    router
});
