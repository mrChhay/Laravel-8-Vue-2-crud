
require('./bootstrap');
window.Vue = require('vue').default;

import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import { routes } from './routes';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
 
const router = new VueRouter({
    // mode: 'history',
    routes: routes
});
 
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});

