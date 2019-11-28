
require('./bootstrap');
import VueRouter from 'vue-router';

window.Vue = require('vue');
window.Vue.use(VueRouter);

import HomeAdmin from './components/HomeAdmin';
const routes = [
    { path: '/', component: HomeAdmin, name: 'HomeAdmin' },
]
const router = new VueRouter({ 
    mode: 'history',
    routes: routes
 })

const app = new Vue({ router }).$mount('#app')
