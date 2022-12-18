@extends('layouts.app')

@section('content')


<!-- Property Filter Section -->
<section class="property-filter-section">
	<div class="auto-container">
		<!--MixitUp Galery-->
		<div class="mixitup-gallery">
			<div class="upper-box clearfix">
				<div class="sec-title">
					<span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
					<h2>PROPERTY TYPES</h2>
				</div>

				<!--Filter-->
				<div class="filters">
					<ul class="filter-tabs filter-btns clearfix">
						<li class="active filter" data-role="button" data-filter="all">
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
				<div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-1.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-5.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Single House Near Orland Park.</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Property Block -->
				<div class="property-block all mix restaurent apprtment form col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-2.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-2.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-6.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Apartment Morden 1243, W No...</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Property Block -->
				<div class="property-block all mix house restaurent villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-3.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-3.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-7.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Great Home for Single fmaily</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Property Block -->
				<div class="property-block all mix apprtment villa form col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-4.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-4.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-8.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Single House Near Orland Park.</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Property Block -->
				<div class="property-block all mix house restaurent villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-5.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-5.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-9.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Apartment Morden 1243, W No...</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Property Block -->
				<div class="property-block all mix apprtment restaurent form col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image">
								<img src="images/resource/property-6.jpg" alt="" />
							</figure>
							<span class="for">ПРОДАЖА</span>
							<span class="featured">Популярное</span>
							<ul class="option-box">
								<li>
									<a href="images/resource/property-6.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-heart"></i></a>
								</li>
								<li>
									<a href="#"><i class="la la-retweet"></i></a>
								</li>
							</ul>
							<ul class="info clearfix">
								<li>
									<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
								</li>
							</ul>
						</div>
						<div class="lower-content">
							<ul class="tags">
								<li><a href="property-detail.html">Apartment</a>,</li>
								<li><a href="property-detail.html">Bar</a>,</li>
								<li><a href="property-detail.html">House</a>,</li>
							</ul>
							<div class="thumb">
								<img src="images/resource/thumb-10.jpg" alt="" />
							</div>
							<h3>
								<a href="property-detail.html">Great Home for Single fmaily</a>
							</h3>
							<div class="lucation">
								<i class="la la-map-marker"></i> Orland Park, IL 35785,
								Chicago, United State
							</div>
							<ul class="property-info clearfix">
								<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
								<li><i class="flaticon-bed"></i> 4 Bedrooms</li>
								<li><i class="flaticon-car"></i> 2 Garage</li>
								<li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
							</ul>
							<div class="property-price clearfix">
								<div class="read-more">
									<a href="property-detail.html" class="theme-btn">More Detail</a>
								</div>
								<div class="price">$ 13,65,000</div>
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
					<a href="#"><span>Prev</span></a>
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
					<a href="#"><span>Next</span></a>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--End Property Filter Section -->

<!--Clients Section-->
<section class="clients-section style-three">
	<div class="auto-container">
		<div class="sponsors-outer">
			<!--Sponsors Carousel-->
			<ul class="sponsors-carousel owl-carousel owl-theme">
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/4.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/4.png" alt="" /></a>
					</figure>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--End Clients Section-->

@endsection