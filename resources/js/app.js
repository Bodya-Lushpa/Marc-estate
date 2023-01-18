/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueBlurHash from 'vue-blurhash'
import 'vue-blurhash/dist/vue-blurhash.css'

Vue.component("home", () => import("./components/pages/Home"));
Vue.component("projects", () => import("./components/pages/Projects"));
Vue.component("projectcard", () => import("./components/pages/ProjectCard"));
Vue.component("news", () => import("./components/pages/News"));
Vue.component("newscard", () => import("./components/pages/NewsCard"));
Vue.component("contact", () => import("./components/pages/Contact"));

Vue.component('modal-thanks', () => import("./components/modal/Thank"));

Vue.use(VueBlurHash);


const app = new Vue({
	el: '#app',
});

