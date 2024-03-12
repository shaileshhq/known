<!DOCTYPE html>
<html lang="zxx">
<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>Frontage Facade</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_css/assets/images/fav.png')}}">
		<!-- Bootstrap v5.0.2 css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/bootstrap.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/fonts/font/font-awesome.min.css')}}">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/uicons-regular-rounded.css')}}">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/fonts/flaticon.css')}}">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/animate.css')}}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/owl.carousel.css')}}">
		<!-- slick slider css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/slick.css')}}">
		<!-- odometer css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/odometer.min.css')}}">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/off-canvas.css')}}">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/magnific-popup.css')}}">
		<!-- Main Menu css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/rsmenu-main.css')}}">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/rs-spacing.css')}}">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/style.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend_css/assets/css/responsive.css')}}">

	</head>
	<body class="defult-home">

		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="{{ asset('frontend_css/assets/images/fav.png')}}" alt=""></div>
                </div>
            </div>
        </div>
		<!--Preloader area end here-->

		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
            @include('frontend/include/header')
			<!--Full width header End-->

			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img2">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                Popular Services
			                <span class="watermark">Services</span>
			            </h1>
			            <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official<br>
			            modeserunt mollit anim id est laborum 20 years experience.</span>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Services Section Start -->
			<div class="rs-services services-main-home pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
                    <div class="row">
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/1.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="#">Building Envelope/Facades</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item ser-bg2">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/2.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="#">BIM and 3D</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item ser-bg3">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/3.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="#">Advance Building Geometry</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 md-mb-20">
			    			<div class="services-item ser-bg4">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/4.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="reports-analysis.html">Architectural Engineering</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 sm-mb-20">
			    			<div class="services-item ser-bg5">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/5.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="#">Building Performance Analysis</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6">
			    			<div class="services-item ser-bg6">
			    				<div class="services-wrap">
			    					<div class="services-icon">
			    						<img src="{{ asset('frontend_css/assets/images/services/main-home/main-icons/6.png')}}" alt="Services">
			    					</div>
			    					<div class="services-content">
			    						<h3 class="title"><a href="project-reporting.html">Existing <br> Buildings</a></h3>
			    						<p class="services-txt">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			<!-- Services Section End -->

		</div>
		<!-- Main content End -->

		<!-- Footer Start -->
        @include('frontend/include/footer')
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- modernizr js -->
		<script src="{{ asset('frontend_css/assets/js/modernizr-2.8.3.min.js')}}"></script>
		<!-- jquery latest version -->
		<script src="{{ asset('frontend_css/assets/js/jquery.min.js')}}"></script>
		<!-- Bootstrap v5.0.2 js -->
		<script src="{{ asset('frontend_css/assets/js/bootstrap.min.js')}}"></script>
		<!-- op nav js -->
		<script src="{{ asset('frontend_css/assets/js/jquery.nav.js')}}"></script>
		<!-- PageScroll2id onepage js -->
		<script src="{{ asset('frontend_css/assets/js/jquery.malihu.PageScroll2id.min.js')}}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('frontend_css/assets/js/owl.carousel.min.js')}}"></script>
		<!-- Slick js -->
		<script src="{{ asset('frontend_css/assets/js/slick.min.js')}}"></script>
		<!-- wow js -->
		<script src="{{ asset('frontend_css/assets/js/wow.min.js')}}"></script>
		<!-- Skill bar js -->
		<script src="{{ asset('frontend_css/assets/js/skill.bars.jquery.js')}}"></script>
		<!-- imagesloaded js -->
		<script src="{{ asset('frontend_css/assets/js/imagesloaded.pkgd.min.js')}}"></script>
		<!-- odometer & appear js -->
		<script src="{{ asset('frontend_css/assets/js/jquery.appear.min.js')}}"></script>
		<script src="{{ asset('frontend_css/assets/js/odometer.min.js')}}"></script>
		<!-- magnific popup js -->
		<script src="{{ asset('frontend_css/assets/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- contact form js -->
		<script src="{{ asset('frontend_css/assets/js/contact.form.js')}}"></script>
		<!-- main js -->
		<script src="{{ asset('frontend_css/assets/js/main.js')}}"></script>
	</body>
</html>
