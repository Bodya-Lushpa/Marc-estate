@extends('layouts.app')

@section('content')


<project-card slug="{{ $slug }}"></project-card>

<!--Clients Section-->
<section class="clients-section style-three">
	<div class="auto-container">
		<div class="sponsors-outer">
			<!--Sponsors Carousel-->
			<ul class="sponsors-carousel owl-carousel owl-theme">
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/4.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/1.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/2.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="images/clients/3.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/4.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/4.png" alt="" /></a>
					</figure>
				</li>
				<li class="slide-item">
					<figure class="image-box">
						<a href="#"><img src="/images/clients/4.png" alt="" /></a>
					</figure>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--End Clients Section-->

@endsection