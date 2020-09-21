window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import ExampleComponent from './ExampleComponent.vue' //Importing

const app = new Vue({
    el: '#frontend',
    components:{ExampleComponent}
});
