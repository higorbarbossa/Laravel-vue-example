require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios'

import App from './components/App.vue';

import { routes } from './routes';

Vue.use(VueRouter);

axios.create({
    baseURL: 'http://localhost:8000',
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
});

Vue.use(VueAxios, axios);


const router = new VueRouter({
    mode: 'history',
    routes
});

new Vue({
  el: '#appp',
  router,
  render: h => h(App)
});
