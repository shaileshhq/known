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
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_css/assets/images/fav.png')}}')}}">
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
			<div class="rs-breadcrumbs img3">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                Contact Us
			                <span class="watermark">Contact</span>
			            </h1>
			            <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official<br>
			            modeserunt mollit anim id est laborum 20 years experience.</span>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Contact Start -->
			<div class="rs-contact contact-style1 contact-modify1 pt-120 md-pt-80">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-6">
							<div class="address-wrap-section">
								<div class="sec-title2 mb-64">
									<h1 class="title title-color pb-20">Let’s talk your business to <span>move</span> forward.</h1>
									<p class="description body-color">Leverage agile frameworks to provide a robust synopsis for high
									level overviews iterative approaches.</p>
								</div>
								<div class="row">
									<div class="col-lg-6 mb-65 md-mb-40">
										<div class="address-item">
											<div class="address-icon">
												<img src="{{ asset('frontend_css/assets/images/contact/icons/1.png')}}" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title"> USA office</h4>
												<p class="address-txt">  12011 West brae Parkway <br>
                                                  Houston, Texas
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 mb-65 md-mb-40">
										<div class="address-item">
											<div class="address-icon">
												<img src="{{ asset('frontend_css/assets/images/contact/icons/2.png')}}" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title">UK office</h4>
												<p class="address-txt">
                                                27 Old Gloucester Street, London  <br>
                                                  35 Malone Avenue, Belfast
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 md-mb-40">
										<div class="address-item">
											<div class="address-icon">
												<img src="{{ asset('frontend_css/assets/images/contact/icons/3.png')}}" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title">Email us</h4>
												<p class="address-txt">
													info@domain.com<br>
													support@name.com
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="address-item">
											<div class="address-icon">
												<img src="{{ asset('frontend_css/assets/images/contact/icons/4.png')}}" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title">Call us</h4>
												<p class="address-txt">
													(+088) 589-8745<br>
													(+088) 222-9999
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-section">
								<div class="sec-title2 mb-35">
									<h1 class="title">Request a  <span style="color:#333;">Call</span> back</h1>
								</div>
			                    <div class="contact-wrap">
			                        <form id="contact-form" method="post">
			                            <fieldset>
			                                <div class="row">
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
			                                    </div>
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
			                                    </div>
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
			                                    </div>
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
			                                    </div>
			                                    <div class="col-lg-12 mb-30">
			                                        <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
			                                    </div>
			                                </div>
			                                <div class="btn-part">
			                                    <div class="form-group mb-0">
			                                        <input class="readon details submit" type="submit" value="Submit Now">
			                                    </div>
			                                </div>
			                            </fieldset>
			                        </form>
			                        <div id="form-messages"></div>
			                    </div>
			                </div>
						</div>
					</div>
				</div>
				<!-- Contact Map Section Start -->
				<div class="contact-map pt-120 md-pt-80">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14429.134122347225!2d82.98241119999999!3d25.2946764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1710153628519!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<!-- Contact Map Section End -->
			</div>
			<!-- Contact End -->

			<!-- Partner Section Start -->
			<div class="rs-partner partner-style1 bg15 pt-80 pb-80 md-pt-70 md-pb-70">
			    <div class="container custom">
			        <div class="rs-carousel owl-carousel"
			            data-loop="true"
			            data-items="5"
			            data-margin="30"
			            data-autoplay="true"
			            data-hoverpause="true"
			            data-autoplay-timeout="5000"
			            data-smart-speed="800"
			            data-dots="false"
			            data-nav="false"
			            data-nav-speed="false"

			            data-md-device="5"
			            data-md-device-nav="false"
			            data-md-device-dots="false"
			            data-center-mode="false"

			            data-ipad-device2="3"
			            data-ipad-device-nav2="false"
			            data-ipad-device-dots2="false"

			            data-ipad-device="3"
			            data-ipad-device-nav="false"
			            data-ipad-device-dots="false"

			            data-mobile-device="2"
			            data-mobile-device-nav="false"
			            data-mobile-device-dots="false">
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/1.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/1.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/2.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/2.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/3.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/3.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/4.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/4.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/5.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/5.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/6.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/6.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/7.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/7.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/8.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/8.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/9.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/9.png')}}" title="" alt="">
			                </a>
			            </div>
			            <div class="logo-img">
			                <a href="https://rstheme.com/">
			                    <img class="hovers-logos rs-grid-img" src="{{ asset('frontend_css/assets/images/partner/style2/10.png')}}" title="" alt="">
			                    <img class="mains-logos rs-grid-img " src="{{ asset('frontend_css/assets/images/partner/style2/10.png')}}" title="" alt="">
			                </a>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Partner Section End -->

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
