@extends('layouts.app')

@section('content')

<main-slider></main-slider>

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

<top-project-home></top-project-home>

<!-- About Us -->
<section class="about-us" style="background-image: url(images/background/1.jpg)">
	<div class="auto-container">
		<div class="row">
			<!-- Info Column -->
			<div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="sec-title light">
						<span class="title">Лучшие объекты для инвестиций за рубежом</span>
						<h2>НАЙДЁМ ДОМ ВАШЕЙ МЕЧТЫ</h2>
					</div>

					<div class="text">
						Компания Mark Estate поможет вам с лёгкостью и без лишних усилий приобрести недвижимость за рубежом. Мы сотрудничаем напрямую как с надёжными застройщиками, так и с зарубежными агентствами недвижимости. Наши менеджеры уверенно ориентируются на рынке зарубежной недвижимости, знают все тонкости в оформлении сделок, а также особенности и специфику предлагаемого региона.
					</div>

					<div class="row features">
						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-house-1"></span>
								<h4><a href="/about">ПОКУПКА НЕДВИЖИМОСТИ</a></h4>
								<div class="text">
									Самые выгодные условия для покупки и лучшие цены от застройщиков
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-rent"></span>
								<h4><a href="/about">ПРОДАЖА НЕДВИЖИМОСТИ</a></h4>
								<div class="text">
									Консультация и полное сопровождение сделки
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
			<span class="title">Поиск по городам</span>
			<h2>САМЫЕ ПОПУЛЯРНЫЕ МЕСТА</h2>
		</div>

		<div class="masonry-items-container clearfix">
			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="/images/background/pexels-oleksandr-pidvalnyi-12940603.jpg" alt="" style="height: 295px;" />
					</figure>
					<div class="info-box">
						<h3 class="place"><a href="/project?cityhome=alaniya">Алания</a></h3>
						<!-- <div class="properties">
							<a href="{{ route('project') }}">7 Характеристик</a>
						</div> -->
						<div class="view-all">
							<a href="/project?cityhome=alaniya">Посмотреть все</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="/images/background/pexels-funda-izgi-13134869.jpg" alt="" style="height: 420px;" />
					</figure>
					<div class="info-box">
						<h3 class="place"><a href="/project?cityhome=kemer">Стамбул</a></h3>
						<!-- <div class="properties">
							<a href="{{ route('project') }}">9 Характеристик</a>
						</div> -->
						<div class="view-all">
							<a href="/project?cityhome=karaganda">Посмотреть все</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item medium-item">
				<div class="image-box">
					<figure class="image">
						<img src="/images/background/pexels-emrah-ayvali-6198387.jpg" alt="" style="height: 295px;" />
					</figure>
					<div class="info-box">
						<h3 class="place"><a href="/project?cityhome=kemer">Кемер</a></h3>
						<!-- <div class="properties">
							<a href="{{ route('project') }}">5 Характеристик</a>
						</div> -->
						<div class="view-all">
							<a href="/project?cityhome=kemer">Посмотреть все</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item small-item">
				<div class="image-box">
					<figure class="image">
						<img src="/images/background/pexels-serkan-pulat-10534187.jpg" alt="" style="height: 170px;" />
					</figure>
					<div class="info-box">
						<h3 class="place"><a href="{{ route('project') }}">Кипр</a></h3>
						<!-- <div class="properties">
							<a href="{{ route('project') }}">12 Характеристик</a>
						</div> -->
						<div class="view-all">
							<a href="{{ route('project') }}">Посмотреть все</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Portfolio Item -->
			<div class="popular-item masonry-item small-item">
				<div class="image-box">
					<figure class="image">
						<img src="/images/background/pexels-mo-ismail-3763190.jpg" alt="" style="height: 170px;" />
					</figure>
					<div class="info-box">
						<h3 class="place"><a href="/project?cityhome=dubay">Дубаи</a></h3>
						<!-- <div class="properties">
							<a href="{{ route('project') }}">6 Характеристики</a>
						</div> -->
						<div class="view-all">
							<a href="/project?cityhome=dubay">Посмотреть все</a>
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
					<span class="title">В самый короткий срок</span>
					<h2>КУПИТЬ ИЛИ ПРОДАТЬ СВОЙ ДОМ</h2>
				</div>
			</div>

			<!-- Button Column -->
			<div class="button-column">
				<a href="admin/submit-property.html" class="theme-btn btn-style-three">Продать недвижимость</a>
				<a href="{{ route('project') }}" class="theme-btn btn-style-one">Выбрать недвижимость</a>
			</div>
		</div>
	</div>
</section>
<!--End Call To Action -->

<client-section></client-section>

<news-home></news-home>

@endsection