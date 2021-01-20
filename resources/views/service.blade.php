<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset("img/favicon.ico") }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/flaticon.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/style1.css") }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="{{ asset("img/logo.png") }}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{ asset("img/logo.png") }}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				@foreach ($navbars as $e)
				
				<li ><a href="{{ route("welcome") }}">{{ $e->lien1 }}</a></li>
				<li class="active"><a href="{{ route("service") }}">{{ $e->lien2 }}</a></li>
				<li><a href="{{ route("blog") }}">{{ $e->lien3 }}</a></li>
				<li ><a href="{{ route("contact") }}">{{ $e->lien4 }}</a></li>

				@endforeach
				<li class="pl-5">@if (Route::has('login'))
            
					@auth
						<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">BackOffice</a>
					@else
						<a href="{{ route('login') }}" class="text-sm text-gray-700 underline  px-2">Login</a>
						@if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
	
					@endauth
				
			@endif</li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					@foreach ($navbars as $e)
					<span>{{ $e->lien2 }}</span>
						
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				@foreach ($cardrapids->take(9) as $e)
					
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{ $e->font }}" style="font-family: 'FontAwesome'"></i>
						</div>
						<div class="service-text">
							<h2>{{ $e->title }}</h2>
							<p>{{ $e->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
				<!-- single service -->
				<!-- single service -->
				{{-- <div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-011-compass"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-039-vector"></i>
						</div>
						<div class="service-text">
							<h2>Social Media</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-036-brainstorming"></i>
						</div>
						<div class="service-text">
							<h2>Brainstorming</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-026-search"></i>
						</div>
						<div class="service-text">
							<h2>Documented</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-018-laptop-1"></i>
						</div>
						<div class="service-text">
							<h2>Responsive</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-043-sketch"></i>
						</div>
						<div class="service-text">
							<h2>Retina ready</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-012-cube"></i>
						</div>
						<div class="service-text">
							<h2>Ultra modern</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div> --}}
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $str2 !!}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($cardrapids->reverse()->take(3) as $e)
					
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{ $e->title }}</h2>
							<p>{{ $e->description }}</p>
						</div>
						<div class="icon">
							<i class="{{ $e->font }}" style="font-family: fontAwesome"></i>
						</div>
						
					</div>
						
					
					
					@endforeach
					<!-- feature item -->
					{{-- <div class="icon-box light left">
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
						<div class="icon">
							<i class="flaticon-019-coffee-cup"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
						<div class="icon">
							<i class="flaticon-020-creativity"></i>
						</div>
					</div> --}}
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="{{ asset("img/device.png") }}" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">

					@foreach ($cardrapids->reverse()->slice(3,3) as $e)
						
					<div class="icon-box light">
						<div class="icon">
							<i class="{{ $e->font }}" style="font-family: fontAwesome"></i>
						</div>
						<div class="service-text">
							<h2>{{ $e->title }}</h2>
							<p>{{ $e->description }}</p>
						</div>
					</div>
					@endforeach
					<!-- feature item -->
					{{-- <div class="icon-box light">
						<div class="icon">
							<i class="flaticon-025-imagination"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-008-team"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div> --}}
				</div>
			</div>
			<div class="text-center mt100">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{ asset("img/card-1.jpg") }}" alt="">
						</div>
						<div class="card-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{ asset("img/card-2.jpg") }}" alt="">
						</div>
						<div class="card-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-12">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{ asset("img/card-3.jpg") }}" alt="">
						</div>
						<div class="card-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="{{ route("newsletter.store") }}" method="POST">
						@csrf
						<input type="text" placeholder="Your e-mail here" name="email">
						<button class="site-btn btn-2" type="submit">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				
				@foreach ($contacts as $e)
                <div class="col-md-5 col-md-offset-1 contact-info col-push">
                    <div class="section-title left">
                        <h2>{{ $e->title }}</h2>
                    </div>
                    <p>{{$e->description}}</p>
                    <h3 class="mt60">{{ $e->title2 }}</h3>
                    <p class="con-item">{{ $e->adresse }}</p>
                    <p class="con-item">{{ $e->numero }}</p>
                    <p class="con-item">{{ $e->email }}</p>
                </div>
                    
                @endforeach
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								@foreach ($contacts as $e)
                                    
                                <button class="site-btn">{{ $e->button }}</button>
                                @endforeach
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/magnific-popup.min.js") }}"></script>
	<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
	<script src="{{ asset("js/circle-progress.min.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
