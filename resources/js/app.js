/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
Vue.component("news", () => import("./components/news/News"));
Vue.component("card-news", () => import("./components/news/Card"));


import App from './components/App.vue'
import Home from './components/Home.vue'
import About from './components/About.vue'

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/about',
			name: 'about',
			component: About
		},
	]
});

const app = new Vue({
	el: '#app',
	components: {App},
	router
})