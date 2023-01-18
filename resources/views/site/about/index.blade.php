@extends('layouts.app')

@section('content')

<!-- About Us -->
<section class="about-us" style="background-image: url('images/background/1.jpg');">
	<div class="auto-container">
		<div class="row">
			<!-- Info Column -->
			<div class="info-column col-lg-6 col-md-12 col-sm-12">
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
		<!-- <div class="video-box">
			<figure class="image">
				<img src="images/resource/image-5.jpg" alt="" />
				<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-play-button-3"></span></a>
			</figure>
		</div> -->

		<div class="fun-facts">
			<div class="row clearfix align-items-center">
				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box"><span class="la la-home"></span></div>
						<!-- <div class="count-outer count-box">
							<span class="count-text" data-speed="3000" data-stop="300">0
							</span>
						</div> -->
						<div class="counter-title">Лучшие цены от застройщиков</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box">
							<span class="la la-th-list"></span>
						</div>
						<!-- <div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="470">0
							</span>
						</div> -->
						<div class="counter-title">Без комиссии для покупателей</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box">
							<span class="la la-user-secret"></span>
						</div>
						<!-- <div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="250">0
							</span>
						</div> -->
						<div class="counter-title">Организация ознакомительного тура</div>
					</div>
				</div>

				<!--Column-->
				<div class="column count-box col-lg-3 col-md-6 col-sm-12">
					<div class="content">
						<div class="icon-box"><span class="la la-trophy"></span></div>
						<!-- <div class="count-outer count-box">
							<span class="count-text" data-speed="3000" data-stop="200">0
							</span>
						</div> -->
						<div class="counter-title">Полное сопровождение сделки «под ключ»</div>
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
			<span class="title">Топовые инвестиционные проекты</span>
			<h2>ТИПЫ НЕДВИЖИМОСТИ</h2>
		</div>

		<div class="row">
			<!-- Service Block -->
			<div class="service-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-buildings"></span>
					</div>
					<h4><a href="{{ route('project') }}">ДОМА</a></h4>
					<div class="text">
						Проверенные и перспективные объекты для инвестиций в Турции, Северном Кипре и ОАЭ.
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
						Комфортабельная недвижимость с захватывающим видом для инвестиций и переезда.
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
					<h4><a href="{{ route('project') }}">КОММЕРЧЕСКАЯ НЕДВИЖИМОСТЬ</a></h4>
					<div class="text">
						Рентабельные торговые помещения для ведения собственного бизнеса или сдачи в аренду.
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
			<span class="title">Полное сопровождение сделки</span>
			<h2>ПРОЦЕСС РАБОТЫ</h2>
		</div>

		<div class="row">
			<!-- Process Block -->
			<div class="process-block offset-lg-2 col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-user-secret"></span>
					</div>
					<h4><a href="about.html">Выбор недвижимости</a></h4>
					<div class="text">
						Выберите проекты самостоятельно на нашем сайте либо оставьте заявку для консультации.
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-building-o"></span>
					</div>
					<h4><a href="about.html">Ознакомительный тур</a></h4>
					<div class="text">
						Бесплатно покажем Вам объекты недвижимости и познакомим с особенностями местности.
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-map-marker"></span>
					</div>
					<h4><a href="about.html">Заключение договора</a></h4>
					<div class="text">
						После выбора недвижимости заключается трёхсторонний договор купли-продажи.
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block offset-lg-3 col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-file-text"></span>
					</div>
					<h4><a href="about.html">Внесение оплаты</a></h4>
					<div class="text">
						Поможем совершить безопасную и выгодную покупку удобным для Вас способом оплаты.
					</div>
				</div>
			</div>

			<!-- Process Block -->
			<div class="process-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="la la-file-text"></span>
					</div>
					<h4><a href="about.html">Получение ТАПУ</a></h4>
					<div class="text">
						Получение документа, свидетельствующего право собственности на объект недвижимости.
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
			<span class="title">Mark Estate</span>
			<h2>ПОЧЕМУ МЫ?</h2>
		</div>

		<div class="row">
			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-sketching"></span>
					</div>
					<h4><a href="about.html">Опыт</a></h4>
					<div class="text">
						Мы уверенно ориентируемся на рынке зарубежной недвижимости, знаем все тонкости в оформлении сделок и реальные цены на недвижимость, а также особенности и специфику предлагаемого региона.
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-worker"></span>
					</div>
					<h4><a href="about.html">Цена</a></h4>
					<div class="text">
						Напрямую сотрудничаем с надёжными застройщиками, что позволяет сохранять низкие цены на недвижимость.
					</div>
				</div>
			</div>

			<!-- Features BLock -->
			<div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-award"></span>
					</div>
					<h4><a href="about.html">Сделка «под ключ»</a></h4>
					<div class="text">
						Полностью сопровождаем Вас на всех этапах и защищаем Ваши интересы в процессе переговоров.
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Why Choose Us -->

@endsection