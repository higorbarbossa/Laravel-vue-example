import createBrand from './components/brand/create.vue';
import editBrand from './components/brand/edit.vue';
import listBrand from './components/brand/list.vue';
import ExampleComponent from './components/ExampleComponent.vue';

import createProduct from './components/product/create.vue';
import editProduct from './components/product/edit.vue';
import listProduct from './components/product/list.vue';

export const routes = [

    { path: '/vue/', component: ExampleComponent, name: 'ExampleComponent'},

    { path: '/vue/brand/create', component: createBrand, name: 'Create Brand'},
    { path: '/vue/brand/edit/:id', component: editBrand, name: 'Update Brand'},
    { path: '/vue/brand/list', component: listBrand, name: 'List Brand' },

    { path: '/vue/product/create', component: createProduct, name: 'Create product'},
    { path: '/vue/product/edit/:id', component: editProduct, name: 'Update product'},
    { path: '/vue/product/list', component: listProduct, name: 'List product' }
];
