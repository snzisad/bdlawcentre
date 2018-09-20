<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/styles/bootstrap4/bootstrap.min.css')}}">
		<link href="{{asset('content/unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/plugins/OwlCarousel2-2.2.1/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/styles/main_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('content/unicat/styles/responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('content/css/home.css')}}"/>

	</head>

	<body>

		<div class="super_container">

			<!-- Header -->

			<header class="header">

				<div class="header_container" style="padding: 0px;">
					<marquee behavior="scroll" scrollamount="3" direction="left">Welcome to BD Law Center .. The Fast-moving law firm of Bangladesh</marquee>
				</div>
					
				<!-- Top Bar -->
				<div class="top_bar">
					<div class="top_bar_container">
						<div class="container" style="max-width: 1310px;">
							<div class="row">
								<div class="col">
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
										<ul class="top_bar_contact_list">
											<img src="{{asset("picture/logo/logo.png")}}" alt="logo">
											<li class="title_section">
												<div class="title">{{ $info->title }}</div>
												<p class="sub-title">{{ $info->moto }}</p>
											</li>
											<!-- <li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<div>001-1234-88888</div>
											</li>
											<li>
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
												<div>info.deercreative@gmail.com</div>
											</li> -->
										</ul>
										<ul class="top_bar_contact_list ml-auto">
											<li class="contact-info">
												<div style="color: #606060;"><i class="fa fa-phone" style="color: #ff9100;" aria-hidden="true"></i>  {{ $info->phone }}</div>
												<p style="color: #606060;"><i class="fa fa-envelope-o" style="color: #ff9100;" aria-hidden="true"></i>  {{ $info->email }}</p>
											</li>
											<li class="search_action search_button">
												<a href="#">
													<i class="fa fa-search text-light"></i>
													<p class="text-light">Search</p>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>

				<!-- Header Content -->
				<div class="header_container">
					<div class="container" style="max-width: 1310px;">
						<div class="row">
							<div class="col">
								<div class="header_content d-flex flex-row align-items-center justify-content-around">
									<ul class="main_nav">
										<li class="active"><a href="#">Home</a></li>
										
										<li><a href="#practices">Practices</a></li>

										<li><a href="#lawers">Lawyers</a></li>

										<li><a href="#Client">Our Client</a></li>

										<li><a href="#">Land & Housing</a></li>

										<li><a href="#trainings">Training</a></li>

										<li><a href="#">Major Cases</a></li>
										
										<li><a href="#">Social Move</a></li>
										<li><a href="#">Gallery</a></li>
										<li><a href="#">News & Events</a></li> 
										<li><a href="#">FAQ</a></li> 
										<li><a href="#">Certifications</a></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- More header menu -->
				<div class="header_more_menu_item_container">
					<div class="container">
						<div class="row">
							<div class="col d-flex justify-content-around">
								<div class="header_more_menu_item_content">
									<ul class="main_nav ">
										<li><a href="#">News & Events</li>
										<li><a href="#">Award</li>
										<li><a href="#">Notice</li>
										<li><a href="#">Publication</li>
										<li><a href="#">FAQ</li>
										<li><a href="#">Certifications</li>
									</ul>
								</div>
								<div class="p-2">
									<a class="btn_more_header_menu_item text-danger" href="#"><b class="fa fa-times"> Close</b></a>
								</div>
							</div>
						</div>
					</div>			
				</div>

				<!-- Header Search Panel -->
				<div class="header_search_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
									<form action="#" class="header_search_form">
										<input type="search" class="search_input" id="search_input" placeholder="Search" required="required" autofocus="true">
										<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
										<button class="header_search_close_button d-flex flex-column align-items-center justify-content-center">
											<i class="fa fa-close" aria-hidden="true"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>			
				</div>			
			</header>

			<!-- Menu -->

			<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
				<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
				<div class="search">
					<form action="#" class="header_search_form menu_mm">
						<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
						<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
							<i class="fa fa-search menu_mm" aria-hidden="true"></i>
						</button>
					</form>
				</div>
				<nav class="menu_nav">
					<ul class="menu_mm">
						<li class="menu_mm"><a href="index.html">Home</a></li>
						<li class="menu_mm"><a href="#">About</a></li>
						<li class="menu_mm"><a href="#">Courses</a></li>
						<li class="menu_mm"><a href="#">Blog</a></li>
						<li class="menu_mm"><a href="#">Page</a></li>
						<li class="menu_mm"><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>

			<!-- Main Content -->

			<div class="content">
				@yield('content')
			</div>
			
			
			<!-- Footer -->

		<footer class="footer">
				<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
				<div class="container">
					<div class="row footer_row">
						<div class="col">
							<div class="footer_content">
								<div class="row">

									<div class="col-lg-3 footer_col">

										<!-- Footer Contact -->
										<div class="footer_section footer_contact">
											<div class="footer_title">Contact Us</div>
											<div class="footer_contact_info">
												<ul>
													<li><i class="fa fa-envelope-o"></i> {{ $info->email }}</li>

													<li><i class="fa fa-phone "></i> {{ $info->phone }}</li>

													<li><i class="fa fa-skype "></i> {{ $info->skype }}</li>

													<li><img src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_imo-512.png" width="15px" height="15px"> {{ $info->imo }}</li>

													<li><i class="fa fa-whatsapp "></i> {{ $info->whatsapp }}</li>
													
													<li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8NsvIxD0rS5cbAharjpZXPsoc7TnGmbaoGTWu5uK7yK0SXwoS" width="15px" height="15px"> {{ $info->viber }}</li>
													
													<li><img src="https://cdn.vectorlogosupply.com/logos/large/2x/facebook-messenger-png-transparent-logo.png" width="15px" height="15px"> <a href="{{ $info->messenger }}"> {{ $info->title }}</a></li>
													
													<li><i class="fa fa-map-marker fa-lg"></i> {{ $info->address }}</li>
												</ul>
											</div>
											<div class="footer_social">
												<ul>
													<li><a href="{{ $info->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

													<li><a href="{{ $info->youtube }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

													<li><a href="{{ $info->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

													<li><a href="{{ $info->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

													<li><a href=" {{ $info->gplus }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

													<li><a href="{{ $info->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

													<li><a href="{{ $info->pinterest }}"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>

												</ul>
											</div>
										</div>
										
									</div>

									<div class="col-lg-4 footer_col">
							
										<!-- Footer Contact -->
										<div class="footer_section footer_contact">
											<div class="footer_title">Location</div>
											<div class="footer_contact_info">

												<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

												<div>
													<div id='gmap_canvas'>
														
													</div>
												</div>

											</div>
										</div>
										
									</div>


									<div class="col-lg-3 footer_col">
							
										<!-- Footer links -->
										<div class="footer_section footer_links">
											<div class="footer_title">Payment Method</div>
											<div class="footer_links_container">
												<ul>
													@foreach($paymentmethod as $method)
														<li class="payment"><img src="{{asset('picture/paymentmethod/'.$method->picture)}}" height="50px" width="100px"></li>
													@endforeach
													
												</ul>
											</div>
										</div>
									</div>

									<div class="col-lg-2 footer_col">
							
										<!-- Footer links -->
										<div class="footer_section footer_links"  style="padding-left: 20px;">
											<div class="footer_title">Menu</div>
											<div class="footer_links_container">
												<ul>
													<li><a href="#">T&C</a></li>
													<li><a href="#">Privacy</a></li>
													<li><a href="#">Sitemap</a></li>
													<li><a href="#">FAQs</a></li>
													<li><a href="#">Videos</a></li>
													<li><a href="#">Gallery</a></li>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="row copyright_row">
						<div class="col">
							<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
								<div class="cr_text">
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
								</div>
								<div class="ml-lg-auto cr_links">
									Developed By: <a href="http://banglasofttech.com">Bangla Soft Tech</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>


		<script src="{{asset('content/unicat/js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/greensock/TweenMax.min.js"')}}></script>
		<script src="{{asset('content/unicat/plugins/greensock/TimelineMax.min.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/greensock/animation.gsap.min.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/easing/easing.js')}}"></script>
		<script src="{{asset('content/unicat/plugins/parallax-js-master/parallax.min.js')}}"></script>

		<script src="{{asset('content/js/popper.js')}}"></script>
		<script src="{{asset('content/js/custom.js')}}"></script>
		<script src="{{asset('content/js/homepage.js')}}"></script>
		<script src="{{asset('content/js/bootstrap.min.js')}}"></script>


	</body>
</html>