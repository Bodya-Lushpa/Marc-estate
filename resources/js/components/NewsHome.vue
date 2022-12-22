<template>
	<div>
		<!-- News Section -->
		<section class="news-section">
			<div class="auto-container">
				<div class="sec-title">
					<span class="title">ИЗУЧИТЕ ПОСЛЕДНИЕ НОВОСТИ И ОБНОВЛЕНИЯ</span>
					<h2>НОВОСТИ</h2>
				</div>

				<div class="row">
					<!-- News Block -->
					<div
						v-for="(post, index) in news"
						:key="index"
						v-if="index < 3"
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
			</div>
		</section>
		<!--End News Section -->
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