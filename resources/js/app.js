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

Vue.mixin({
    methods: {
        route: route
    }
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Partials
Vue.component('navbar-guest', require('./components/partials/NavbarGuest.vue').default);
Vue.component('navbar-auth', require('./components/partials/NavbarAuth.vue').default);
Vue.component('logout-button', require('./components/partials/LogoutButton.vue').default);
Vue.component('flash-message', require('./components/partials/FlashMessage.vue').default);
Vue.component('delete-button', require('./components/partials/DeleteButton.vue').default);


const app = new Vue({
    el: '#app',
    components: {
        'home-auth': () =>
            import ('@/js/pages/home/Auth.vue'),
        'home-guest': () =>
            import ('@/js/pages/home/Guest.vue'),
        'auth-login': () =>
            import ('@/js/pages/auth/Login.vue'),
        'auth-register': () =>
            import ('@/js/pages/auth/Register.vue'),
        'auth-password-update': () =>
            import ('@/js/pages/auth/PasswordUpdate.vue'),
        'stores-index': () =>
            import ('@/js/pages/stores/Index.vue'),
        'stores-create': () =>
            import ('@/js/pages/stores/Create.vue'),
        'stores-edit': () =>
            import ('@/js/pages/stores/Edit.vue'),
        'stores-show': () =>
            import ('@/js/pages/stores/Show.vue'),
        'items-index': () =>
            import ('@/js/pages/items/Index.vue'),
        'items-create': () =>
            import ('@/js/pages/items/Create.vue'),
        'items-edit': () =>
            import ('@/js/pages/items/Edit.vue'),
        'items-show': () =>
            import ('@/js/pages/items/Show.vue'),
        'users-show': () =>
            import ('@/js/pages/users/Show.vue'),
        'users-edit': () =>
            import ('@/js/pages/users/Edit.vue'),
    }
});