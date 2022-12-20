@extends('layouts.app')

@section('content')

<!-- Contact Section -->
<section class="contact-section style-two">
	<div class="auto-container">
		<div class="row">
			<!-- Form Column -->
			<div class="form-column col-lg-8 col-md-6 col-sm-12">
				<div class="inner-column">
					<div class="title-box">
						<h2>Связаться с нами</h2>
						<div class="text">
							Не стесняйтесь связаться с нами для любого вида информации
						</div>
					</div>

					<!-- Contact Form -->
					<div class="contact-form">
						<form method="post" action="sendemail.php" id="contact-form">
							<div class="form-group">
								<input type="text" name="username" placeholder="Имя" required />
							</div>

							<div class="form-group">
								<input type="email" name="email" placeholder="Email" required />
							</div>

							<div class="form-group">
								<input type="text" name="subject" placeholder="Тема" required />
							</div>

							<div class="form-group">
								<textarea name="message" placeholder="Сообщение"></textarea>
							</div>

							<div class="form-group">
								<button class="theme-btn btn-style-one" type="submit" name="submit-form">
									Отправить
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Info Column -->
			<div class="info-column col-lg-4 col-md-6 col-sm-12">
				<div class="inner-column">
					<!-- Info Box -->
					<div class="contact-info-box">
						<div class="inner-box">
							<span class="icon la la-phone"></span>
							<h4>Телефон</h4>
							<ul>
								<li>+ 7 777 552 99 99</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box">
						<div class="inner-box">
							<span class="icon la la-envelope-o"></span>
							<h4>E-mail</h4>
							<ul>
								<li>info@markestate.kz</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box">
						<div class="inner-box">
							<span class="icon la la-globe"></span>
							<h4>Адрес</h4>
							<ul>
								<li>
									Алматы, Сейфуллина 597а
								</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box follow-us">
						<div class="inner-box">
							<h4>Соц. сети:</h4>
							<ul class="social-icon-three">
								<li>
									<a href="#"><span class="la la-instagram"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Contact Section -->

<!-- Map Section -->
<!-- <section class="map-section">
	<div class="map-outer">
		Map Canvas
		<div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"></div>
	</div>
</section> -->
<!-- End Map Section -->

@endsection