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

        <!-- Slider Start -->
        <div class="rs-slider rs-slider-style2">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                @foreach ($slider as $item)
                <div class="slider-direction" style="background-image: url('public/slider/{{$item->image}}');">
                </div>
                @endforeach
            </div>
        </div>
        <!-- Slider End -->
		<!-- About Section Start -->
		<div class="rs-about about-style2 pt-120 pb-120 md-pt-80 md-pb-60">
			<div class="container">
				<div class="row y-middle">
					<div class="col-lg-6 md-mb-50">
						<div class="about-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s">
							<img src="{{ asset('frontend_css/assets/images/about/about-4.png')}}" alt="Images">
						</div>
					</div>
					<div class="col-lg-6 pl-50 md-pl-15">
						<div class="sec-title3 mb-30">
							<span class="sub-text">About Us</span>
							<h2 class="title pb-20">
								Over 25 years of experience in Facade Business
							</h2>
							<p class="desc">Are you looking for the Best Front Facade Contractor in India, USA & UK? Then you must give us a call, and we will help you out. We are a leading name in the industry and have reputable goodwill offering 100% customer satisfaction.</p>
						</div>
						<ul class="check-lists">
							<li>We cannot promis specific timeline guarantee results.</li>
							<li>Morbi in sem quis dui placerat ornare. Pellentesque.</li>
							<li>Praesent dapibus, neque id cursus tortor neque</li>
						</ul>
						<!-- Counter Section Start -->
						<div id="rs-counter" class="rs-counter counter-style2 pt-45">
							<div class="row">
								<div class="col-lg-5 md-mb-30">
									<div class="rs-counter-list">
										<div class="counter-right-border"></div>
										<div class="count-text">
											<div class="count-number">
												<span class="rs-count odometer" data-count="550">00</span>
												<span class="prefix">+</span>
											</div>
											<span class="title">Happy Customers</span>
										</div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="rs-counter-list widget-padding">
										<div class="count-text">
											<div class="count-number">
												<span class="rs-count odometer" data-count="600">00</span>
												<span class="prefix">+</span>
											</div>
											<span class="title">Complete Project</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Counter Section End -->
						<div class="btn-part mt-50 md-mt-35">
							<a class="readon slide-get started" href="#"><span>Get Started</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Section End -->

			<!-- Services Section Start -->
			<div class="rs-services services-main-home pt-120 pb-50 md-pt-0" style="background: #effdfc;">
			    <div class="container">
			    	<div class="sec-title3 text-center mb-55 md-mb-25">
			    		<span class="sub-text">Our Services</span>
			    		<h2 class="title">Discover our innovative and sustainable facade products</h2>
			    	</div>
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

			<!-- Testimonial Section Start -->
			<div id="rs-testimonial" class="rs-testimonial testimonial-style1 md-pt-80 md-pb-80">
	        	<div class="row no-gutters">
	        		<div class="col-lg-6">
	        			<div class="testi-image">
	        				<img src="{{ asset('frontend_css/assets/images/testimonial/style1/testimonials.jpg')}}" alt="Testimonial">
	        			</div>
	        		</div>
	        		<div class="col-lg-6">
	    		       	<div class="widget-content">
       				       	<div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true">
       			        		<div class="testi-item">
			        				<div class="item-content-basic">
			        					<span>
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/quote.png')}}" alt="Images">
			        					</span>
			        					<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
			        				</div>
			        				<div class="testi-content">
			        					<div class="image-wrap">
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/1.jpg')}}" alt="Images">
			        					</div>
					                    <div class="testi-information">
		                                    <div class="testi-name">Holing Tums</div>
		                                    <span class="designation">Developer</span>
		                                    <div class="ratting-img">
		                                    	<img src="{{ asset('frontend_css/assets/images/testimonial/style1/ratting.png')}}" alt="Img">
		                                    </div>
		                                </div>
			        				</div>
       			        		</div>
       			        		<div class="testi-item">
			        				<div class="item-content-basic">
			        					<span>
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/quote.png')}}" alt="Images">
			        					</span>
			        					<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
			        				</div>
			        				<div class="testi-content">
			        					<div class="image-wrap">
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/2.jpg')}}" alt="Images">
			        					</div>
					                    <div class="testi-information">
		                                    <div class="testi-name">Angelina Jolie</div>
		                                    <span class="designation">Manager</span>
		                                    <div class="ratting-img">
		                                    	<img src="{{ asset('frontend_css/assets/images/testimonial/style1/ratting.png')}}" alt="Img">
		                                    </div>
		                                </div>
			        				</div>
       			        		</div>
       			        		<div class="testi-item">
			        				<div class="item-content-basic">
			        					<span>
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/quote.png')}}" alt="Images">
			        					</span>
			        					<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
			        				</div>
			        				<div class="testi-content">
			        					<div class="image-wrap">
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/3.jpg')}}" alt="Images">
			        					</div>
					                    <div class="testi-information">
		                                    <div class="testi-name">Abdur Rashid</div>
		                                    <span class="designation">CEO, Keen IT Solution</span>
		                                    <div class="ratting-img">
		                                    	<img src="{{ asset('frontend_css/assets/images/testimonial/style1/ratting.png')}}" alt="Img">
		                                    </div>
		                                </div>
			        				</div>
       			        		</div>
       			        		<div class="testi-item">
			        				<div class="item-content-basic">
			        					<span>
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/quote.png')}}" alt="Images">
			        					</span>
			        					<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
			        				</div>
			        				<div class="testi-content">
			        					<div class="image-wrap">
			        						<img src="{{ asset('frontend_css/assets/images/testimonial/style1/4.jpg')}}" alt="Images">
			        					</div>
					                    <div class="testi-information">
		                                    <div class="testi-name">Margot Robbie</div>
		                                    <span class="designation">CEO, Pro Theme</span>
		                                    <div class="ratting-img">
		                                    	<img src="{{ asset('frontend_css/assets/images/testimonial/style1/ratting.png')}}" alt="Img">
		                                    </div>
		                                </div>
			        				</div>
       			        		</div>
       				       	</div>
	    		       	</div>
	        		</div>
	        	</div>
			</div>
			<!-- Testimonial Section End -->
			<!-- Blog Section Start -->
			<div id="rs-blog" class="rs-blog blog-main-home blog-modify1 pt-120 pb-120 md-pt-40 md-pb-80">
				<div class="container">
					<div class="sec-title3 text-center mb-50 md-mb-35">
						<h2 class="title title title4 title-color">
							Our Latest Project
						</h2>
					</div>
					<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/1.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">How investing in dependend your business growth.</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/2.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">How to maintain customers relations disaster.</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/3.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">Productivity tips to avoid burnout when</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/4.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">There is so much to love about this</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/5.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">Business is the activity of making one’s living money.</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/6.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">The most of the company used for business ventures.</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
						<div class="blog-item">
							<div class="image-wrap shape-show">
								<a href="#"><img src="{{ asset('frontend_css/assets/images/blog/style1/3.jpg')}}" alt=""></a>
							</div>
							<div class="blog-content">
								<h3 class="blog-title"><a href="#">How investing in dependend your business growth.</a></h3>
								<div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>
								<div class="blog-button"><a href="#">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Blog Section End -->
			<!-- Call To Action Choose Start -->
				<div class="rs-cta bg10 pt-80 pb-75">
					<div class="container">
						<div class="call-action">
							<div class="sec-title">
								<span class="sub-text">Contact Us</span>
								<h2 class="title title4 pb-40 md-pb-20">
									Want to Be Part of<br>
									Our <span>Team?</span>
								</h2>
								<div class="btn-part">
									<a class="readon slide-get view-team" href="contact1.html"><span>View Full Team</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- Call To Action Choose End -->
			<!-- Team Section Start -->
			<div class="rs-team team-style1 pb-120 pt-120 md-pb-80">
			    <div class="container">
			    	<div class="sec-title3 text-center mb-50">
			    	 	<span class="sub-text big-text">Team Members</span>
			    	 	<h2 class="title">
			    	 		Meet our experts
			    	 	</h2>
			    	</div>
			    	<div class="row">
			    		<div class="col-lg-3 col-md-6 mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/1.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Tasnia Tasnim</a></h3>
									  	<span class="team-title">Senior Consultant</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/2.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Babar Azam</a></h3>
									  	<span class="team-title">Business Advisor</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/3.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Anushka Sharma</a></h3>
									  	<span class="team-title">Digital Marketer</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/4.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Shaheen Afridi</a></h3>
									  	<span class="team-title">Web Developer</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 md-mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/5.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Sonam Kapoor</a></h3>
									  	<span class="team-title">IT Consultant</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 md-mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/6.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Fakhar Zaman</a></h3>
									  	<span class="team-title">Finance Consultant</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6 sm-mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/7.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Kriti Sanon</a></h3>
									  	<span class="team-title">Senior Consultant</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-3 col-md-6">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="team-single.html"><img src="{{ asset('frontend_css/assets/images/team/8.jpg')}}" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-x-twitter"></i></a>
			    						</div>
			    					</div>
			    					<div class="team-content">
									  	<h3 class="team-name"><a href="team-single.html">Imad Wasim</a></h3>
									  	<span class="team-title">Officer</span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			<!-- Team Section End -->
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
			                <a href="hhttps://rstheme.com">
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
