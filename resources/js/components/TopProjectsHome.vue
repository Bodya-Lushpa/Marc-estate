<template>
	<div>
		<!-- Recent Section -->
		<section class="property-section">
			<div class="auto-container">
				<div class="sec-title">
					<span class="title">ПОИСК ЗАРУБЕЖНОЙ НЕДВИЖИМОСТИ </span>
					<h2>ПОПУЛЯРНОЕ</h2>
				</div>

				<div class="row">
	<!-- Property Block -->
	<div
						v-for="(project, index) in projects"
						v-if="index<6"
						class="property-block all mix restaurent apprtment form col-xl-4 col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="image-box">
									<figure class="image">
										<img :src="project.images[0].img" alt="" />
									</figure>
									<span class="for">ПРОДАЖА</span>
									<span class="featured">Популярное</span>
									<ul class="option-box">
										<li>
											<a :href="project.images[0].img" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
										</li>
									</ul>
									<ul class="info clearfix">
										<li>
											<a href="properties.html"><i class="la la-calendar-minus-o"></i>{{ project.created_at | moment }}</a>
										</li>
									</ul>
								</div>
								<div class="lower-content">
									<ul class="tags">
										<li><a href="property-detail.html">Apartment</a>,</li>
										<li><a href="property-detail.html">Bar</a>,</li>
										<li><a href="property-detail.html">House</a>,</li>
									</ul>
									<h3>
										<a href="property-detail.html">{{ project.title }}</a>
									</h3>
									<div class="lucation">
										<i class="la la-map-marker"></i> {{ project.address }}
									</div>
									<ul class="property-info clearfix">
										<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
										<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
										<li><i class="flaticon-car"></i> 2 Garage</li>
										<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
									</ul>
									<div class="property-price clearfix">
										<div class="read-more">
											<a :href="('/project/' + project.slug)" class="theme-btn">Подробнее</a>
										</div>
										<div class="price">$ {{ project.price }}</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!--End Property Section -->
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