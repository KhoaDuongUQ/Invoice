/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import Buefy from 'buefy'
Vue.use(Buefy)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('edit-delete-dropdown', require('./components/Dropdown.vue').default);
Vue.component('flash-message', require('./components/FlashMessage.vue').default);
Vue.component('store-create-form', require('./components/StoreCreateForm.vue').default);
Vue.component('store-edit-form', require('./components/StoreEditForm.vue').default);
Vue.component('item-create-form', require('./components/ItemCreateForm.vue').default);
Vue.component('item-edit-form', require('./components/ItemEditForm.vue').default);
Vue.component('edit-button', require('./components/EditButton.vue').default);
Vue.component('delete-button', require('./components/DeleteButton.vue').default);

const app = new Vue({
    el: '#app'
});