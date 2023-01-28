<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Компания Mark Estate бесплатно поможет вам с лёгкостью и без лишних усилий приобрести недвижимость за границей. Мы сотрудничаем напрямую как с надёжными застройщиками, так и с зарубежными агентствами недвижимости. Предлагаем более 150 вариантов недвижимости в разных регионах Турции и Кипра и не берём комиссию за свои услуги. Полностью сопровождаем вас на всех этапах покупки и защищаем Ваши интересы в процессе переговоров.">
	<meta name="keywords" content="Mark Estate, Стамбул, Недвижимость, Инвестиции, Квартиры в Турции, Апартаменты в Турции, Квартиры на берегу моря, Алания Недвижимость, Анталия Недвижимость, Купить квартиру, Квартиры от застройщиков Турции, Виллы в Турции, Турция Недвижимость, Получение ВНЖ, Поучение Гражданства в Турции">
	<meta name="google-site-verification" content="nICaUZLtTRbB3rykZTSzTcUfCrVFveh_ZbTrJqPmwWA" />

	<title>Mark Estate - помощь в поиске зарубежной недвижимости</title>


	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


	<!-- Stylesheets -->
	<link href="/css/bootstrap.css" rel="stylesheet" />
	<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION SETTINGS STYLES -->
	<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION LAYERS STYLES -->
	<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
	<!-- REVOLUTION NAVIGATION STYLES -->

	<!-- Styles -->
	<link href="{{ asset('css/app.css?v=2') }}{{  "?dt=".time()  }}" rel="stylesheet">

	<!--Color Switcher Mockup-->
	<!-- <link href="/css/color-switcher-design.css" rel="stylesheet" /> -->

	<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
	<link rel="icon" href="/images/favicon.png" type="image/x-icon" />
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
	<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

	<!-- Meta Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '736549734330618');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=736549734330618&ev=PageView&noscript=1" /></noscript>
	<!-- End Meta Pixel Code -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			for (var j = 0; j < document.scripts.length; j++) {
				if (document.scripts[j].src === r) {
					return;
				}
			}
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(92155894, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/92155894" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MZPXVCH');
	</script>
	<!-- End Google Tag Manager -->

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZPXVCH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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
										<li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Главная</a></li>
										<li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">О нас</a></li>
										<li class="{{ request()->routeIs('project') ? 'current' : '' }}"><a href="{{ route('project') }}">Проекты</a></li>
										<li class="{{ request()->routeIs('news') ? 'current' : '' }}"><a href="{{ route('news') }}">Новости</a></li>
										<li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Контакты</a></li>
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
													<form method="get" action="/project">
														<div class="form-group">
															<input type="search" name="search" placeholder="Поиск" required="" />
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

			<div class="pageWrap">

				@yield('content')

			</div>

			<!-- Main Footer -->
			<footer class="main-footer" style="background-image: url('/images/background/view-new-york-city-night-time.jpg')">
				<div class="auto-container">
					<!--Widgets Section-->
					<div class="widgets-section">
						<div class="row">
							<!--Big Column-->
							<div class="big-column col-lg-12 col-md-12 col-sm-12">
								<div class="row align-items-center">
									<!--Footer Column-->
									<div class="footer-column col-lg-12 col-md-12 col-sm-12">
										<div class="footer-widget contact-widget">
											<div class="widget-content">
												<ul class="contact-list d-md-flex align-items justify-content-md-between">
													<li class="d-flex align-items-center justify-content-center">
														<span class="la la-map-marker"></span>
														<div>Казахстан, Алматы, пр, Сейфулина 597а</div>
													</li>
													<li class="d-flex align-items-center justify-content-center">
														<span class="la la-phone"></span>
														<div><a href="tel:+7 (777) 666 03 90">+7 (777) 666 03 90</a></div>
													</li>
													<li class="d-flex align-items-center justify-content-center">
														<span class="la la-envelope"></span><a href="mailTo:info@markestate.kz">info@markestate.kz</a>
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

		<a href="https://api.whatsapp.com/send?phone=77776660390&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C%20%D0%B7%D0%B0%20%D0%B3%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B5%D0%B9.%20%D0%9C%D0%BE%D0%B3%D0%BB%D0%B8%20%D0%B1%D1%8B%20%D1%81%D0%B2%D1%8F%D0%B7%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D1%81%D0%BE%20%D0%BC%D0%BD%D0%BE%D0%B9%3F" target="_blank" title="Написать в Whatsapp" rel="noopener noreferrer">
			<div class="social-button">
				<span class="la la-whatsapp"></span>
			</div>
		</a>

		<a href="tel:+77776660390" title="Позвонить">
			<div class="social-button social-button-tel">
				<span class="la la-phone"></span>
			</div>
		</a>

		<modal-thanks></modal-thanks>
	</div>

	<script src="/js/jquery.js?v=2"></script>
	<script src="/js/imask.js?v=2"></script>
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
	<!--End Revolution Slider-->
	<script src="/js/jquery-ui.js?v=2"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js?v=2"></script>
	<script src="/js/jquery.fancybox.js"></script>
	<script src="/js/owl.js"></script>
	<script src="/js/wow.js"></script>
	<script src="/js/isotope.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh2CmiYQa-pHzV-BB8LdoQ19qk-mV-08o"></script> -->
	<script src="/js/appear.js"></script>
	<script src="/js/script.js"></script>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}{{  "?dt=".time()  }}" defer></script>



</body>

</html>