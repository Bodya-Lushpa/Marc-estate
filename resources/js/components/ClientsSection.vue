<template>
	<div>
		<!--Clients Section-->
		<section class="clients-section">
			<div class="auto-container">
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li v-for="partner in partners" class="slide-item">
							<figure class="image-box">
								<a><img :src="partner.path" alt="" /></a>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
</template>

<script>
import axios from 'axios';
import $ from "jquery";
import owlCarousel from '/js/owl.js';

export default {
	data(){
		return {
			partners: []
		}
	},
	mounted (){
		axios.get('/api/partner')
		.then(response => {
				this.partners = response.data;
		});
	},
	updated (){
		(function($) {
			//Clients Carousel
			if ($('.sponsors-carousel').length) {
				$('.sponsors-carousel').owlCarousel({
					loop:true,
					margin:30,
					nav:true,
					smartSpeed: 700,
					autoplay: true,
					navText: [ '<span class="la la-angle-left"></span>', '<span class="la la-angle-right"></span>' ],
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						768:{
							items:3
						},
						1024:{
							items:4
						}
					}
				});
			}
		})(window.jQuery);
	}
}
</script>