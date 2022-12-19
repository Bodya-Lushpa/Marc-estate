/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

Vue.component("news", () => import("./components/news/News"));
Vue.component("card-news", () => import("./components/news/Card"));
Vue.component("projects", () => import("./components/project/Projects"));
Vue.component("project-card", () => import("./components/project/Card"));
Vue.component("top-project-home", () => import("./components/TopProjectsHome"));
Vue.component("news-home", () => import("./components/NewsHome"));

const app = new Vue({
	el: '#app'
})