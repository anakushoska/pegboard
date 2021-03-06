/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.config.devtools = true;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('figures-component', require('./components/FiguresComponent.vue').default);
Vue.component('shapes-component', require('./components/ShapesComponent.vue').default);
Vue.component('randomizer-component', require('./components/RandomizerComponent.vue').default);
Vue.component('snake-trap-component', require('./components/SnaketrapComponent.vue').default);
Vue.component('memory-placement-component', require('./components/MemoryPlacementComponent.vue').default);
Vue.component('simon-says-component', require('./components/SimonSaysComponent.vue').default);
Vue.component('path-finder-component', require('./components/PathFinderComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue'));


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
