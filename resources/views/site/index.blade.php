@extends('layouts.app')

@section('content')
<!--Main Slider-->
<section class="main-slider">
	<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
		<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
			<ul>
				<!-- Slide 1 -->
				<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
					<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-1.jpg" />

					<div class="tp-caption" style="display: none" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="nowrap" data-width="auto" data-text-align="center" data-hoffset="['10','50','0','0']" data-voffset="['-20','-20','-20','-20']" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
						<div class="content-box">
							<div class="inner-box">
								<div class="title-box">
									<h3>Luxurious Home</h3>
									<p>9658 Lorem Ave, San Diego, USA</p>
								</div>
								<ul class="info-list">
									<li><span>2340</span>Area Sq-ft</li>
									<li><span>04</span>Bed Room</li>
									<li><span>02</span>Kitchen</li>
								</ul>
								<div class="price">$42, 201,00</div>
								<div class="btn-box">
									<a href="agent-detail.html" class="theme-btn btn-style-one">CONTACT AGENT</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--End Main Slider-->

<!-- Property Search Section -->
<section class="property-search-section" style="display: none">
	<div class="auto-container">
		<div class="property-search-tabs tabs-box">
			<ul class="tab-buttons">
				<li data-tab="#sale" class="tab-btn active-btn">Sale</li>
				<li data-tab="#rent" class="tab-btn">Rent</li>
			</ul>

			<div class="tabs-content">
				<!--Tab / Active Tab-->
				<div class="tab active-tab" id="sale">
					<div class="property-search-form">
						<form method="post" action="index.html">
							<div class="row">
								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>city</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>search by property id</label>
									<input type="text" name="text" placeholder="Search ID" required />
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>search by Address</label>
									<input type="text" name="text" placeholder="Search ID" required />
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>Location</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>country</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>California</option>
										<option>Florida</option>
										<option>Georgia</option>
										<option>New York</option>
										<option>Texas</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<div class="range-slider-one clearfix">
										<label>Area</label>
										<div class="area-range-slider"></div>
										<div class="input">
											<input type="text" class="property-amount" name="field-name" readonly />
										</div>
										<div class="title">m<sup>2</sup></div>
									</div>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<div class="range-slider-one clearfix">
										<label>Price Filter</label>
										<div class="price-range-slider"></div>
										<div class="input">
											<input type="text" class="price-amount" name="field-name" readonly />
										</div>
										<div class="title">US Doller</div>
									</div>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<button type="submit" class="theme-btn btn-style-two">
										Search
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!--Tab -->
				<div class="tab" id="rent">
					<div class="property-search-form">
						<form method="post" action="index.html">
							<div class="row">
								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>city</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>search by property id</label>
									<input type="text" name="text" placeholder="Search ID" required />
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>search by Address</label>
									<input type="text" name="text" placeholder="Search ID" required />
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>Location</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<label>country</label>
									<select class="custom-select-box">
										<option>Any</option>
										<option>California</option>
										<option>Florida</option>
										<option>Georgia</option>
										<option>New York</option>
										<option>Texas</option>
									</select>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<div class="range-slider-one clearfix">
										<label>Area</label>
										<div class="area-range-slider"></div>
										<div class="input">
											<input type="text" class="property-amount" name="field-name" readonly />
										</div>
										<div class="title">m<sup>2</sup></div>
									</div>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<div class="range-slider-one clearfix">
										<label>Price Filter</label>
										<div class="price-range-slider"></div>
										<div class="input">
											<input type="text" class="price-amount" name="field-name" readonly />
										</div>
										<div class="title">US Doller</div>
									</div>
								</div>

								<!-- Form Group -->
								<div class="form-group col-lg-3 col-md-6 col-sm-12">
									<button type="submit" class="theme-btn btn-style-two">
										Search
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Property Search Section -->

<!-- Recent Section -->
<section class="property-section">
	<div class="auto-container">
		<div class="sec-title">
			<span class="title">ПОИСК ЗАРУБЕЖНОЙ НЕДВИЖИМОСТИ </span>
			<h2>ПОПУЛЯРНОЕ</h2>
		</div>

		<div class="row">
			<!-- Property Block -->
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<div class="single-item-carousel owl-carousel owl-theme">
							<figure class="image">
								<img src="images/resource/property-1.jpg" alt="" />
							</figure>
							<figure class="image">
								<img src="images/resource/property-2.jpg" alt="" />
							</figure>
							<figure class="image">
								<img src="images/resource/property-3.jpg" alt="" />
							</figure>
						</div>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
						<ul class="info clearfix">
							<li>
								<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
							</li>
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<img src="images/resource/property-2.jpg" alt="" />
						</figure>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
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
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
							<a href="property-detail.html">Apartment Morden 1243, W No.</a>
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
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<img src="images/resource/property-3.jpg" alt="" />
						</figure>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
						<div class="video-link">
							<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a>
						</div>
						<ul class="info clearfix">
							<li>
								<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
							</li>
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<div class="single-item-carousel owl-carousel owl-theme">
							<figure class="image">
								<img src="images/resource/property-1.jpg" alt="" />
							</figure>
							<figure class="image">
								<img src="images/resource/property-2.jpg" alt="" />
							</figure>
							<figure class="image">
								<img src="images/resource/property-3.jpg" alt="" />
							</figure>
						</div>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
						<ul class="info clearfix">
							<li>
								<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
							</li>
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<img src="images/resource/property-2.jpg" alt="" />
						</figure>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
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
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
							<a href="property-detail.html">Apartment Morden 1243, W No.</a>
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
			<div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<img src="images/resource/property-3.jpg" alt="" />
						</figure>
						<span class="for">FOR SALE</span>
						<span class="featured">FEATURED</span>
						<div class="video-link">
							<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a>
						</div>
						<ul class="info clearfix">
							<li>
								<a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a>
							</li>
							<li>
								<a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a>
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
</section>
<!--End Property Section -->

<!-- About Us -->
<section class="about-us" style="background-image: url(images/background/1.jpg)">
	<div class="auto-container">
		<div class="row">
			<!-- Info Column -->
			<div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="sec-title light">
						<span class="title">ЛУЧШЕЕ МЕСТО, ЧТОБЫ НАЙТИ НЕДВИЖИМОСТЬ</span>
						<h2>НАЧНИТЕ ПОИСК С НАМИ</h2>
					</div>

					<div class="text">
						<strong>Сайт рыбатекст поможет</strong> Сайт рыбатекст поможет
						дизайнеру, верстальщику, вебмастеру сгенерировать несколько
						абзацев более менее осмысленного текста рыбы на русском языке,
						а начинающему оратору отточить навык публичных выступлений в
						домашних условиях. При создании генератора мы использовали
					</div>

					<div class="row features">
						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-house-1"></span>
								<h4><a href="about.html">Buy Property</a></h4>
								<div class="text">
									We have the best properties Sale, Buy, and Rent Dealers.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-rent"></span>
								<h4><a href="about.html">REnt Property</a></h4>
								<div class="text">
									We have the best properties Sale, Buy, and Rent Dealers.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-house-5"></span>
								<h4><a href="about.html">Real Estate Kit</a></h4>
								<div class="text">
									We have the best properties Sale, Buy, and Rent Dealers.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-apartment"></span>
								<h4><a href="about.html">Sale Property</a></h4>
								<div class="text">
									We have the best properties Sale, Buy, and Rent Dealers.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Video Column -->
			<div class="video-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="video-box">
						<figure class="image">
							<img src="images/resource/image-2.jpg" alt="" />
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Us -->

<!--Popular Places Section-->
<section class="popular-places-section">
	<div class="auto-container">
		<div class="sec-title">
			<span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
			<h2>MOST POPULAR PLACES</h2>
		</div>

		<div class="masonry-items-container clearfix">
			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="images/gallery/1-1.jpg" alt="" />
					</figure>
					<div class="info-box">
						<span class="category">Apartment</span>
						<h3 class="place"><a href="properties.html">Алания</a></h3>
						<div class="properties">
							<a href="properties.html">7 Properties</a>
						</div>
						<div class="view-all">
							<a href="properties.html">View All</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="images/gallery/1-2.jpg" alt="" />
					</figure>
					<div class="info-box">
						<span class="category">House</span>
						<h3 class="place"><a href="properties.html">Стамбул</a></h3>
						<div class="properties">
							<a href="properties.html">9 Properties</a>
						</div>
						<div class="view-all">
							<a href="properties.html">View All</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="images/gallery/1-3.jpg" alt="" />
					</figure>
					<div class="info-box">
						<span class="category">Restaurant</span>
						<h3 class="place"><a href="properties.html">Кемер</a></h3>
						<div class="properties">
							<a href="properties.html">5 Properties</a>
						</div>
						<div class="view-all">
							<a href="properties.html">View All</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item small-item">
				<div class="image-box">
					<figure class="image">
						<img src="images/gallery/1-4.jpg" alt="" />
					</figure>
					<div class="info-box">
						<span class="category">Farm</span>
						<h3 class="place"><a href="properties.html">Кипр</a></h3>
						<div class="properties">
							<a href="properties.html">12 Properties</a>
						</div>
						<div class="view-all">
							<a href="properties.html">View All</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item small-item">
				<div class="image-box">
					<figure class="image">
						<img src="images/gallery/1-5.jpg" alt="" />
					</figure>
					<div class="info-box">
						<span class="category">Villa</span>
						<h3 class="place"><a href="properties.html">Белек</a></h3>
						<div class="properties">
							<a href="properties.html">6 Properties</a>
						</div>
						<div class="view-all">
							<a href="properties.html">View All</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Portfolio Section-->

<!-- Call To Action -->
<section class="call-to-action" style="background-image: url(images/background/2.jpg)">
	<div class="auto-container">
		<div class="row clearfix">
			<!-- Title Column -->
			<div class="title-column">
				<div class="sec-title light">
					<span class="title">IN FEW SECONDS WITH WILLES</span>
					<h2>BUY OR SALE YOUR HOUSE</h2>
				</div>
			</div>

			<!-- Button Column -->
			<div class="button-column">
				<a href="admin/submit-property.html" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
				<a href="#" class="theme-btn btn-style-one">BROWSE PROPERTY</a>
			</div>
		</div>
	</div>
</section>
<!--End Call To Action -->


<!--Clients Section-->
<section class="clients-section">
	<div class="auto-container">
		<div class="sponsors-outer">
			<!--Sponsors Carousel-->
			<ul class="sponsors-carousel owl-carousel owl-theme">
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-4.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/1-4.png" alt="" /></a>
					</figure>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--End Clients Section-->

<!-- News Section -->
<section class="news-section">
	<div class="auto-container">
		<div class="sec-title">
			<span class="title">ИЗУЧИТЕ ПОСЛЕДНИЕ НОВОСТИ И ОБНОВЛЕНИЯ</span>
			<h2>НОВОСТИ</h2>
		</div>

		<div class="row">
			<!-- News Block -->
			<div class="news-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<div class="single-item-carousel owl-carousel owl-theme">
							<figure class="image">
								<a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
							</figure>
							<figure class="image">
								<a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
							</figure>
							<figure class="image">
								<a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
							</figure>
						</div>
					</div>
					<div class="lower-content">
						<ul class="info">
							<li>by <span>Anoma</span></li>
							<li>JANUARY 14, 2020</li>
						</ul>
						<h3>
							<a href="blog-detail.html">Dazzling retreat resort with the Modern Design</a>
						</h3>
					</div>
				</div>
			</div>

			<!-- News Block -->
			<div class="news-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<a href="images/resource/news-2.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/news-2.jpg" alt="" /></a>
						</figure>
						<div class="icon-box">
							<span class="icon la la-photo"></span>
						</div>
					</div>
					<div class="lower-content">
						<ul class="info">
							<li>by <span>Anoma</span></li>
							<li>JANUARY 14, 2020</li>
						</ul>
						<h3>
							<a href="blog-detail.html">Independent apartment with modern design</a>
						</h3>
					</div>
				</div>
			</div>

			<!-- News Block -->
			<div class="news-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<a class="lightbox-image" data-fancybox="video"><img src="images/resource/news-3.jpg" alt="" /></a>
						</figure>
					</div>
					<div class="lower-content">
						<ul class="info">
							<li>by <span>Anoma</span></li>
							<li>JANUARY 14, 2020</li>
						</ul>
						<h3>
							<a href="blog-detail.html">Modron apartment adjacent to CEO park</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End News Section -->
@endsection