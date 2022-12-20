<template>
	<div>
		<!-- Property Filter Section -->
		<section class="property-filter-section">
			<div class="auto-container">
				<!--MixitUp Galery-->
				<div class="mixitup-gallery">
					<div class="upper-box clearfix">
						<div class="sec-title">
							<span class="title">НАЙТИ СВОЙ ДОМ В ВАШЕМ ГОРОДЕ</span>
							<h2>ТИПЫ НЕДВИЖИМОСТИ</h2>
						</div>

						<!--Filter-->
						<div class="filters">
							<ul class="filter-tabs filter-btns clearfix">
								<li class="filter" data-role="button" data-filter="all">
									Все
								</li>
								<li class="filter" data-role="button" data-filter=".apprtment">
									Квартиры
								</li>
								<li class="filter" data-role="button" data-filter=".house">
									Апартаменты
								</li>
								<li class="filter" data-role="button" data-filter=".villa">
									Дома
								</li>
								<li class="filter" data-role="button" data-filter=".form">
									Резиденции
								</li>
								<li class="filter" data-role="button" data-filter=".restaurent">
									Виллы
								</li>
							</ul>
						</div>
					</div>

					<div class="filter-list row">
						
						<!-- Property Block -->
						<div
						v-for="project in projects"
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
											<i class="la la-calendar-minus-o"></i>{{ project.created_at | moment }}
										</li>
									</ul>
								</div>
								<div class="lower-content">
									<ul class="tags">
										<li v-for="real in project.reals"><a href="#">{{ real.title }}</a>,</li>
									</ul>
									<h3>
										<a :href="('/project/' + project.slug)">{{ project.title }}</a>
									</h3>
									<div class="lucation">
										<i class="la la-map-marker"></i> {{ project.address }}
									</div>
									<ul class="property-info d-none clearfix">
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

				<!--Post Share Options-->
				<div class="styled-pagination">
					<ul class="clearfix">
						<li class="prev">
							<a href="#"><span>Пред</span></a>
						</li>
						<li class="active">
							<a href="#"><span>1</span></a>
						</li>
						<li>
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
		<!--End Property Filter Section -->
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