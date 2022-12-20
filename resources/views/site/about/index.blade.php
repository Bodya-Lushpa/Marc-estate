@extends('layouts.app')

@section('content')

<!-- About Us -->
<section class="about-us style-two">
	<div class="auto-container">
		<div class="row">
			<!-- Info Column -->
			<div class="info-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="sec-title">
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
								<h4><a href="/about">Купить недвижимость</a></h4>
								<div class="text">
									У нас есть лучшие агенты по продаже, покупке и аренде недвижимости.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-rent"></span>
								<h4><a href="/about">АРЕНДА НЕДВИЖИМОСТИ</a></h4>
								<div class="text">
									У нас есть лучшие агенты по продаже, покупке и аренде недвижимости.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-house-5"></span>
								<h4><a href="/about">Комплект недвижимости</a></h4>
								<div class="text">
									У нас есть лучшие агенты по продаже, покупке и аренде недвижимости.
								</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-apartment"></span>
								<h4><a href="/about">Продажа недвижимости</a></h4>
								<div class="text">
									У нас есть лучшие агенты по продаже, покупке и аренде недвижимости.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Video Column -->
			<div class="video-column col-lg-6 col-md-12 col-sm-12">
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

<!-- Fun Fact -->
<section class="fun-facts-section" style="background-image: url(/images/background/pexels-pixabay-262347.jpg)">
	<div class="auto-container">
		<div class="video-box">
			<figure class="image">
				<img src="images/resource/image-5.jpg" alt="" />
				<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-play-button-3"></span></a>
			</figure>
		</div>

		<div class="fun-facts">
			<div class="row clearfix">
				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box"><span class="la la-home"></span></div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="3000" data-stop="300">0
							</span>
						</div>
						<div class="counter-title">Продано домов</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box">
							<span class="la la-th-list"></span>
						</div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="470">0
							</span>
						</div>
						<div class="counter-title">Ежедневные списки</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box">
							<span class="la la-user-secret"></span>
						</div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="250">0
							</span>
						</div>
						<div class="counter-title">Агенты эксперты</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box"><span class="la la-trophy"></span></div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="3000" data-stop="200">0
							</span>
						</div>
						<div class="counter-title">Выигранные награды</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Fun Fact -->

<!-- Services Section -->
<section class="services-section">
	<div class="auto-container">
		<div class="sec-title">
			<span class="title">мы предлагаем лучшую недвижимость</span>
			<h2>Услуги по недвижимости</h2>
		</div>

		<div class="row">
			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-buildings"></span>
					</div>
					<h4><a href="{{ route('project') }}">Дома</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-apartment-1"></span>
					</div>
					<h4><a href="{{ route('project') }}">апартаменты</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-urban"></span>
					</div>
					<h4><a href="{{ route('project') }}">Коммерческая</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-house-1"></span>
					</div>
					<h4><a href="{{ route('project') }}">Аренда и продажа</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-settings-2"></span>
					</div>
					<h4><a href="{{ route('project') }}">Управление</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>

			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-file-1"></span>
					</div>
					<h4><a href="{{ route('project') }}">Список недвижимости</a></h4>
					<div class="text">
						Nonec pede justo fringilla vel aliquet nec vulputate eget arcu
						in enim justo rhoncus ut imperdiet venenatis vitae justo.
					</div>
					<div class="link-box">
						<a href="{{ route('project') }}">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Services Section -->

<!-- Process Section -->
<section class="process-section" style="background-image: url(/images/background/pexels-mikhail-nilov-8297487.jpg)">
	<div class="auto-container">
		<div class="sec-title light">
			<span class="title">НАЙТИ СВОЙ ДОМ В ВАШЕМ ГОРОДЕ</span>
			<h2>ПРОЦЕСС РАБОТЫ</h2>
		</div>

		<div class="row">
			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-user-secret"></span>
					</div>
					<h4><a href="about.html">Познакомьтесь с нашим агентом</a></h4>
					<div class="text">
						Вы встречаетесь с нашим агентом и требуете свою собственность
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-building-o"></span>
					</div>
					<h4><a href="about.html">Выберите местоположение</a></h4>
					<div class="text">
						Вы встречаетесь с нашим агентом и требуете свою собственность
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-map-marker"></span>
					</div>
					<h4><a href="about.html">Выберите свою собственность</a></h4>
					<div class="text">
						Вы встречаетесь с нашим агентом и требуете свою собственность
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-file-text"></span>
					</div>
					<h4><a href="about.html">Подтверждение</a></h4>
					<div class="text">
						Вы встречаетесь с нашим агентом и требуете свою собственность
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process Section -->

<!-- Why Choose Us -->
<section class="why-choose-us">
	<div class="auto-container">
		<div class="sec-title">
			<span class="title">НАЙДИ СВОЙ ДОМ В ВАШЕМ ГОРОДЕ</span>
			<h2>ПОЧЕМУ ВЫБРАЛИ НАС</h2>
		</div>

		<div class="row">
			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-sketching"></span>
					</div>
					<h4><a href="about.html">Архитектурный опыт</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-worker"></span>
					</div>
					<h4><a href="about.html">Калькулятор рефинансирования</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-mixer-with-wheels"></span>
					</div>
					<h4><a href="about.html">House / Condo Contruction</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-award"></span>
					</div>
					<h4><a href="about.html">Финансовый победитель</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-trophy"></span>
					</div>
					<h4><a href="about.html">Победитель в номинации «Лучший продавец дома»</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-medal"></span>
					</div>
					<h4><a href="about.html">Победитель в номинации «Лучшая поддержка»</a></h4>
					<div class="text">
						Сердце и душа того, что мы предоставляем. Наш всеобъемлющий
						архитектурные услуги включают концептуальный и схематический дизайн
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose Us -->

<client-section></client-section>

@endsection