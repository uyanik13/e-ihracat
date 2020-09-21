/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './src/main.js'
import ExampleComponent from './components/ExampleComponent.vue' //Importing
import Deneme from './components/Deneme.vue' //Importing
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('deneme', require('./components/Deneme.vue'));
const app = new Vue({
    el: '#app',
    components:{ExampleComponent,Deneme}
});
