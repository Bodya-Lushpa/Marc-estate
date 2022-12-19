<template>
	<div>
		<!-- Recent Properties -->
		<div class="sidebar-widget recent-properties">
                  <div class="sidebar-title"><h2>Недавно добавленные</h2></div>
                  <div class="widget-content">
                    <!-- Post -->
                    <article v-for="(project, key) in projects" class="post" v-if="key < 3">
                      <div class="post-thumb">
                        <a :href="('/project/' + project.slug)">
                          <img
                            :src="project.images[0].img"
                            alt=""
                          />
                          <span class="status">Rent</span>
                        </a>
                      </div>
                      <span class="location">{{ project.city.title }}, {{ project.country.title }}</span>
                      <h3>
                        <a href="blog-detail.html">{{ project.title }}</a>
                      </h3>
                      <div class="price">$ {{ project.price }}</div>
                    </article>

                  </div>
                </div>
	</div>
</template>

<script>
import mixitup from 'mixitup';
import axios from 'axios';
import moment from 'moment';

export default {
	data(){
		return {
			projects: []
		}
	},
	mounted() {
		axios.get('/api/projects')
		.then(response => {
			this.projects = response.data;
		});
    var containerEl = document.querySelector('.filter-list');
    var mixer = mixitup(containerEl);
  },
	filters: {
		moment: function (date) {
			moment.locale('kk');
			return moment(date).format('L');
		}
	}
}
</script>