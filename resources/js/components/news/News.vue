<template>
	<div>
		<!-- Blog Section -->
<section class="blog-section">
	<div class="auto-container">
		<div class="row">

			<!-- News Block -->
			<div
				v-for="post in filteredProjects()"
			 class="news-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<a :href="('/news/' + post.slug)"><img :src="post.img" alt="" /></a>
						</figure>
					</div>
					<div class="lower-content">
						<ul class="info">
							<li>{{ post.created_at | moment }}</li>
						</ul>
						<h3>
							<a :href="('/news/' + post.slug)">{{ post.title }}</a>
						</h3>
					</div>
				</div>
			</div>

		</div>

		<!-- Pagination -->
		<div class="styled-pagination">
			<ul class="clearfix">
						<li class="prev" v-if="page > 1" @click="page = page - 1">
							<a type="click"><span>Пред</span></a>
						</li>
						<li v-for="(pageNumber, key) in pageCount" :key="key" :class="[ pageNumber == page ? 'active' : '' ]" @click="page = pageNumber">
							<a type="click"><span>{{ pageNumber }}</span></a>
						</li>
						<li class="next" v-if="hasNextPage" @click="page = page + 1">
							<a type="submit"><span>След</span></a>
						</li>
			</ul>
		</div>
	</div>
</section>
<!--End Blog Section -->
	</div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';

export default {
	data(){
		return {
			news: [],
			page: 1,
			pageCount: 1,
			hasNextPage: true,
		}
	},
	mounted (){
		axios.get('/api/news')
		.then(response => {
			this.news = response.data;
		})
	},
	methods: {
		filteredProjects() {
			const start = (this.page - 1) * 6;
			const end = this.page * 6;
			this.pageCount = Math.ceil(this.news.length/6);
			this.hasNextPage = this.news.length > end;

			return this.news.slice(start, end);
		}
	},
	filters: {
		moment: function (date) {
			moment.locale('kk');
			return moment(date).format('L');
		}
	}
}
</script>