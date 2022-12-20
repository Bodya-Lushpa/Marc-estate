<template>
	<div>
		<!-- Blog Section -->
<section class="blog-section">
	<div class="auto-container">
		<div class="row">

			<!-- News Block -->
			<div
				v-for="post in news"
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
				<li class="prev">
					<a href="#"><span>Пред</span></a>
				</li>
				<li>
					<a href="#"><span>1</span></a>
				</li>
				<li class="active">
					<a href="#"><span>2</span></a>
				</li>
				<li>
					<a href="#"><span>3</span></a>
				</li>
				<li>
					<a href="#"><span>4</span></a>
				</li>
				<li class="next">
					<a href="#"><span>След</span></a>
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
			news: []
		}
	},
	mounted (){
		axios.get('/api/news')
		.then(response => {
			this.news = response.data;
		})
	},
	filters: {
		moment: function (date) {
			moment.locale('kk');
			return moment(date).format('L');
		}
	}
}
</script>