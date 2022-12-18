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
						<span class="title">How To</span>
						<h2>Contact Us</h2>
						<div class="text">
							Don’t Hesitate to Contact with us for any kind of
							information
						</div>
					</div>

					<!-- Contact Form -->
					<div class="contact-form">
						<form method="post" action="sendemail.php" id="contact-form">
							<div class="form-group">
								<input type="text" name="username" placeholder="Name" required />
							</div>

							<div class="form-group">
								<input type="email" name="email" placeholder="Email" required />
							</div>

							<div class="form-group">
								<input type="text" name="subject" placeholder="Subject" required />
							</div>

							<div class="form-group">
								<textarea name="message" placeholder="Massage"></textarea>
							</div>

							<div class="form-group">
								<button class="theme-btn btn-style-one" type="submit" name="submit-form">
									Send Now
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
							<h4>Phones</h4>
							<ul>
								<li>88 867 56 453</li>
								<li>21 535 42 546</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box">
						<div class="inner-box">
							<span class="icon la la-envelope-o"></span>
							<h4>Emails</h4>
							<ul>
								<li>info@ourland.com</li>
								<li>sale@ourland.com</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box">
						<div class="inner-box">
							<span class="icon la la-globe"></span>
							<h4>Address</h4>
							<ul>
								<li>
									123 Ipsum Ave, Lorem City, <br />
									Dolor Country, Thw World
								</li>
							</ul>
						</div>
					</div>

					<!-- Info Box -->
					<div class="contact-info-box follow-us">
						<div class="inner-box">
							<h4>Follow Us:</h4>
							<ul class="social-icon-three">
								<li>
									<a href="#"><span class="la la-facebook-f"></span></a>
								</li>
								<li>
									<a href="#"><span class="la la-twitter"></span></a>
								</li>
								<li>
									<a href="#"><span class="la la-google-plus"></span></a>
								</li>
								<li>
									<a href="#"><span class="la la-dribbble"></span></a>
								</li>
								<li>
									<a href="#"><span class="la la-pinterest"></span></a>
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
<section class="map-section">
	<div class="map-outer">
		<!--Map Canvas-->
		<div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"></div>
	</div>
</section>
<!-- End Map Section -->

@endsection