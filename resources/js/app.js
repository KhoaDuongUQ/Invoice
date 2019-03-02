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

//User
Vue.component('user-create-form', require('./components/users/UserCreateForm.vue').default);
Vue.component('user-edit-form', require('./components/users/UserEditForm.vue').default);

// Store
Vue.component('store-create-form', require('./components/stores/StoreCreateForm.vue').default);
Vue.component('store-edit-form', require('./components/stores/StoreEditForm.vue').default);

//Item
Vue.component('item-create-form', require('./components/items/ItemCreateForm.vue').default);
Vue.component('item-edit-form', require('./components/items/ItemEditForm.vue').default);

// Partials
Vue.component('navbar-guest', require('./components/partials/NavbarGuest.vue').default);
Vue.component('navbar-auth', require('./components/partials/NavbarAuth.vue').default);
Vue.component('logout-button', require('./components/partials/LogoutButton.vue').default);
Vue.component('flash-message', require('./components/partials/FlashMessage.vue').default);
Vue.component('edit-button', require('./components/partials/EditButton.vue').default);
Vue.component('delete-button', require('./components/partials/DeleteButton.vue').default);
Vue.component('change-password-button', require('./components/partials/ChangePasswordButton.vue').default);

const app = new Vue({
    el: '#app'
});