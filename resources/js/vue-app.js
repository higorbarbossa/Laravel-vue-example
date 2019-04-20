import Vue from 'vue'
import VueRouter from 'vue-router';
import ExampleComponent from './components/ExampleComponent.vue';

import { routes } from './routes';

Vue.use(VueRouter);

const router = new VueRouter({

    routes
});

new Vue({
  el: '#app',
  router
});
