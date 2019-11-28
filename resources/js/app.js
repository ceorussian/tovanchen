
require('./bootstrap');
import VueRouter from 'vue-router';
window.Vue = require('vue');
window.Vue.use(VueRouter);


import {routes} from './router';

const router = new VueRouter({ 
    mode: 'history',
    routes: routes
 })

const app = new Vue({ router }).$mount('#app')