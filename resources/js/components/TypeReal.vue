<template>
	<!-- Categories -->
	<div class="sidebar-widget categories">
                  <div class="sidebar-title"><h2>ТИП НЕДВИЖИМОСТИ</h2></div>
                  <ul class="cat-list">
                    <li v-for="typeReal in typeReals">
                      <a :href="typeReal.slug">{{ typeReal.title }} <span>{{ typeReal.projects.length }}</span></a>
                    </li>
                  </ul>
                </div>
</template>

<script>
import axios from 'axios';

export default {
	data(){
		return {
			typeReals: []
		}
	},
	mounted (){
		axios.get('/api/type-real')
		.then(response => {
			this.typeReals = response.data;
		});
	},
}
</script>