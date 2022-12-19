<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Marc estate') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="/css/bootstrap.css" rel="stylesheet" />
	<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION SETTINGS STYLES -->
	<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION LAYERS STYLES -->
	<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/responsive.css" rel="stylesheet" />
	<!--Color Switcher Mockup-->
	<link href="/css/color-switcher-design.css" rel="stylesheet" />
	<!--Color Themes-->
	<link id="theme-color-file" href="/css/color-themes/default-theme.css" rel="stylesheet" />

	<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
	<link rel="icon" href="/images/favicon.png" type="image/x-icon" />
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
	<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>
	<div id="app">
		<div class="page-wrapper">
			<!-- Main Header-->
			<header class="main-header header-style-one">
				<!-- Header Lower -->
				<div class="header-lower">
					<div class="main-box">
						<div class="auto-container">
							<div class="inner-container clearfix">
								<div class="logo-box">
									<div class="logo">
										<a href="{{ route('home') }}"><img src="/images/logo.svg" alt="" title="" /></a>
									</div>
								</div>

								<div class="nav-outer">
									<!-- Main Menu -->
									<nav class="main-menu navbar-expand-md navbar-light">
										<div class="navbar-header">
											<!-- Toggle Button -->
											<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
												<span class="icon flaticon-menu"></span>
											</button>
										</div>

										<div class="navbar-collapse clearfix collapse" id="navbarSupportedContent" style="">
											<ul class="navigation clearfix">
												<li class="current"><a href="{{ route('home') }}">Главная</a></li>
												<li><a href="{{ route('about') }}">О нас</a></li>
												<li><a href="{{ route('project') }}">Проекты</a></li>
												<li><a href="{{ route('news') }}">Новости</a></li>
												<li><a href="{{ route('contact') }}">Контакты</a></li>
											</ul>
										</div>
									</nav>
									<!-- Main Menu End-->

									<!-- Main Menu End-->
									<div class="outer-box clearfix">
										<!--Search Box-->
										<div class="search-box-outer">
											<div class="dropdown">
												<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="la la-search"></span>
												</button>
												<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3" x-placement="bottom-start" style="
                            position: absolute;
                            transform: translate3d(0px, 5px, 0px);
                            top: 0px;
                            left: 0px;
                            will-change: transform;
                          " x-out-of-boundaries="">
													<li class="panel-outer">
														<div class="form-container">
															<form method="post" action="blog.html">
																<div class="form-group">
																	<input type="search" name="field-name" value="" placeholder="Search Here" required="" />
																	<button type="submit" class="search-btn">
																		<span class="la la-search"></span>
																	</button>
																</div>
															</form>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Header Lower-->
				<!-- Sticky Header  -->
				<div class="sticky-header">
					<div class="auto-container clearfix">
						<!--Logo-->
						<div class="logo pull-left">
							<a href="{{ route('home') }}" title=""><img src="/images/logo-small.svg" alt="" title="" /></a>
						</div>
						<!--Right Col-->
						<div class="pull-right">
							<!-- Main Menu -->
							<nav class="main-menu">
								<div class="navbar-collapse show collapse clearfix">
									<ul class="navigation clearfix">
										<li class="current"><a href="{{ route('home') }}">Главная</a></li>
										<li><a href="{{ route('about') }}">О нас</a></li>
										<li><a href="{{ route('project') }}">Проекты</a></li>
										<li><a href="{{ route('news') }}">Новости</a></li>
										<li><a href="{{ route('contact') }}">Контакты</a></li>
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->
							<div class="outer-box clearfix">
								<!--Search Box-->
								<div class="search-box-outer">
									<div class="dropdown">
										<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="la la-search"></span>
										</button>
										<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3" x-placement="bottom-start" style="
                        position: absolute;
                        transform: translate3d(-120px, 30px, 0px);
                        top: 0px;
                        left: 0px;
                        will-change: transform;
                      ">
											<li class="panel-outer">
												<div class="form-container">
													<form method="post" action="blog.html">
														<div class="form-group">
															<input type="search" name="field-name" value="" placeholder="Search Here" required="" />
															<button type="submit" class="search-btn">
																<span class="la la-search"></span>
															</button>
														</div>
													</form>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Sticky Menu -->
			</header>
			<!--End Main Header -->

			@yield('content')

			<!-- Main Footer -->
			<footer class="main-footer" style="background-image: url('/images/background/3.jpg')">
				<div class="auto-container">
					<!--Widgets Section-->
					<div class="widgets-section">
						<div class="row">
							<!--Big Column-->
							<div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
								<div class="row">
									<!--Footer Column-->
									<div class="footer-column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget contact-widget">
											<h2 class="widget-title">Связаться</h2>
											<div class="widget-content">
												<ul class="contact-list">
													<li>
														<span class="la la-map-marker"></span> Казахстан,
														пр, Сейфулина 597а, <br />Турция, Стамбул, ул Абая 15.
													</li>
													<li>
														<span class="la la-phone"></span>+ 7 777 552 99 99
													</li>
													<li>
														<span class="la la-envelope"></span><a href="#">info@markestate.kz</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<!--Footer Column-->
									<div class="footer-column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget cities-widget">
											<h2 class="widget-title">Недвижимость</h2>
											<div class="widget-content">
												<ul class="list clearfix">
													<li><a href="properties.html">Athina</a></li>
													<li><a href="properties.html">Austin</a></li>
													<li><a href="properties.html">Baytown</a></li>
													<li><a href="properties.html">Brampton</a></li>
													<li><a href="properties.html">Cedar Hill</a></li>
													<li><a href="properties.html">Chester</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Big Column-->
							<div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
								<div class="row clearfix">
									<div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
										<!--Footer Column-->
										<div class="footer-widget popular-posts">
											<h2 class="widget-title">Популярное</h2>
											<!--Footer Column-->
											<div class="widget-content">
												<div class="post">
													<div class="thumb">
														<a href="blog-detail.html"><img src="/images/resource/post-thumb-1.jpg" alt="" /></a>
													</div>
													<h4>
														<a href="blog-detail.html">Modern Design Building
														</a>
													</h4>
													<span class="date">1 October, 2020</span>
												</div>

												<div class="post">
													<div class="thumb">
														<a href="blog-detail.html"><img src="/images/resource/post-thumb-2.jpg" alt="" /></a>
													</div>
													<h4>
														<a href="blog-detail.html">Real Eatate Expo 2020</a>
													</h4>
													<span class="date">10 October, 2020</span>
												</div>
											</div>
										</div>
									</div>

									<!--Footer Column-->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Footer Bottom-->
				<div class="footer-bottom">
					<div class="auto-container">
						<!--Scroll to top-->
						<div class="scroll-to-top scroll-to-target" data-target="html">
							<span class="la la-angle-double-up"></span>
						</div>

						<div class="inner-container clearfix">
							<div class="footer-nav">
								<ul class="clearfix">
									<li class="current"><a href="{{ route('home') }}">Главная</a></li>
									<li><a href="{{ route('about') }}">О нас</a></li>
									<li><a href="{{ route('project') }}">Проекты</a></li>
									<li><a href="{{ route('news') }}">Новости</a></li>
									<li><a href="{{ route('contact') }}">Контакты</a></li>
								</ul>
							</div>

							<div class="copyright-text">
								<p>
									© Все права защищены. Разработано в
									<a href="https://marc.kz" target="_blank">MARC.</a>

								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<!-- End Main Footer -->
		</div>
		<!--End pagewrapper-->
	</div>

	<script src="/js/jquery.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!--Revolution Slider-->
	<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="/js/main-slider-script.js"></script>
	<!--End Revolution Slider-->
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/jquery.fancybox.js"></script>
	<script src="/js/owl.js"></script>
	<script src="/js/wow.js"></script>
	<script src="/js/isotope.js"></script>
	<!-- <script src="/js/mixitup.js"></script> -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="/js/appear.js"></script>
	<script src="/js/script.js"></script>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>


</body>

</html>