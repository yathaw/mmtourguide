<!DOCTYPE html>
<html lang="en">
<head>
<title>MM Tour Guide </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('logo.gif') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/about_responsive.css') }}">

{{-- Select2 --}}
<!-- select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

<!-- select2-bootstrap4-theme -->
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->

<link href="{{ asset('select2/select2-bootstrap4.css') }}" />


@if(Request::segment(1) === 'login' || Request::segment(1) === 'register')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css') }}">



@else

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/responsive.css') }}">



@endif

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo">
								<a href="index.html"> <img src="{{ asset('logotwo.gif') }}" class="img-fluid" style="height: 50px"> MM Tour Guide </a>
							</div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="{{ Request::segment(1) === null ? 'active' : '' }} ">
										<a href="{{ asset('') }}">Home</a>
									</li>

									<li class="{{ Request::segment(1) === 'about' ? 'active' : '' }} ">
										<a href="{{ asset('about') }}"> About </a>
									</li>

									<li class="{{ Request::segment(1) === 'howitworks' ? 'active' : '' }} ">
										<a href="{{ asset('howitworks') }}">How It Works</a>
									</li>

									<li class="{{ Request::segment(1) === 'login' ? 'active' : '' }} ">
										<a href="{{ route('login') }}"> Login </a>
									</li>

									<li class="{{ Request::segment(1) === 'register' ? 'active' : '' }} ">
										<a href="{{ route('register') }}"> Register </a>
									</li>

								</ul>
							</nav>
							<div class="header_phone ml-auto">
								<a href=""> 
									<img src="{{ ('logo.png') }}" class="img-fluid" style="width: 30px; height: 30px;">
									<span></span>
								</a>
							</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href=""> MM Tour Guide  </a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href=""> Find a guide </a></li>
				<li><a href="">How It Works </a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">
				<a> Login | Register </a>
			</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	@if(Request::segment(1) === 'login' || Request::segment(1) === 'register')

	<div class="home">
		<div class="background_image" style="background-image:url({{ asset('frontend/images/news.jpg') }})"></div>
	</div>

	@else

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider.jpg') }})"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us take you away</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider.jpg') }})"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us take you away</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider.jpg') }})"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us take you away</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	@endif

	<!-- Search -->

	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title">Search for your trip</div>
						<div class="home_search_content">
							<form action="{{asset('search')}}" method="POST" class="home_search_form" id="home_search_form pt-5">
                          	@csrf
                          		<div class="row">
									<p class="col-6"> Where Are You Going? </p>

									<p class="col-6"> Choose Language </p>


                          		</div>
								
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start ">

								    <select  class="form-control mr-5 mt-3" name="place" style="width: 50%; padding-top: 5px">
										@foreach($data[0] as $place)
										
										<?php 
											$placenameString = $place->name;
  											$placenameArray = explode(',', $placenameString);

  											$placeidString = $place->id;
  											$placeidArray = explode(',', $placeidString);	

  											$arraydata = array_combine($placeidArray, $placenameArray)
										?>

										<optgroup label="{{ $place->region_name }}">

											@foreach($arraydata as $placeidArray => $placenameArray)

												<option value="{{ $placeidArray }}"> 
													{{ $placenameArray }} 
												</option>

											@endforeach

										</optgroup>

										
										@endforeach
									</select>

								<select name="language[]" class="form-control js-example-basic-multiple mr-5 mt-3" multiple="multiple" style="width: 30%; padding-top: 5px">
                                  	<option value="">Choose Language</option>
                                  
                                  	@foreach($data[1] as $language)
                                    	<option value="{{$language->id}}">{{$language->name}}</option>
                                  	@endforeach
                              	</select>
									

									<button type="submit" class="home_search_button">search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('content')

	@if(Request::segment(1) === 'login' || Request::segment(1) === 'register')
		
		<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/images/footer_1.jpg') }}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name inpt" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email inpt" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="{{ asset('frontend/images/sign.svg') }}" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="{{ asset('frontend/images/trekking.svg') }}" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="{{ asset('frontend/images/around.svg') }}" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>

	@endif
</div>

<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/about.js') }}"></script> --}}

{{-- SELECT2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


@if(Request::segment(1) === 'login' || Request::segment(1) === 'register')
<script src="{{ asset('frontend/js/contact.js') }}"></script>


@else
<script src="{{ asset('frontend/js/custom.js') }}"></script>


@endif

<script type="text/javascript">



	$(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});

	$(document).ready(function()
	{

      // select 2
    	$('.js-example-basic-multiple').select2(
    		{
    			theme: 'bootstrap4',
      			width: 'style',
      			placeholder: $(this).attr('Choose Language'),

    		});


    })

</script>

@yield('script')

</body>
</html>