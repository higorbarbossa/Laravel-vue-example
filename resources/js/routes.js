import create from './components/brand/create.vue';
import edit from './components/brand/edit.vue';
import list from './components/brand/list.vue';

export const routes = [

    { path: '/vue/brand/create', component: create, name: 'Create Brand'},
    { path: '/vue/brand/edit/:id', component: edit, name: 'Update Brand'},
    { path: '/vue/brand/list', component: list, name: 'List Brand' }
];
