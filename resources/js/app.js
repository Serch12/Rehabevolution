/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('nosotros-component', require('./components/Nosotros.vue').default);
Vue.component('servicios-component', require('./components/Servicios.vue').default);
Vue.component('convenios-component', require('./components/Convenios.vue').default);
Vue.component('contacto-component', require('./components/Contacto.vue').default);
Vue.component('avisoprivacidad-component', require('./components/AvisoPrivacidad.vue').default);
Vue.component('encuesta-component', require('./components/EncuestaComponent.vue').default); 
Vue.component('acceso-component', require('./components/Acceso.vue').default); 
Vue.component('perfil-component', require('./components/Perfil.vue').default); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
