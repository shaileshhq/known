<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Frontage Facade | India</title>
<meta name="keywords" content="Frontage Facade Pipes & Fittings, PVC pipes fittings Supplier in Chandauli, PVC Pipes, CPVC Pipes, Pipes & Plumbing Company in Chandauli, Best Water Storage Tank Sellers in Chandauli, Best Pipe Sellers in Chandauli, Best Pumps & Panel Supplier in Chandauli, Best Kitchen Appliances Supplier in Chandauli."/>
<meta name="description" content="Frontage Facade Pipes are the best CPVC pipes and fitting Supplier Company in Chandauli with a wide range of pipes here, such as PVC Pipes, CPVC Pipes, Water Tanks, Decorative Lighting, Bathroom Sanitary & CP Fittings etc"/>
<!-- Fav Icon -->
<link rel="icon" href="{{ asset('frontend_css/assets/images/favicon.ico')}}" type="image/x-icon">
<!-- Stylesheets -->
<link href="{{ asset('frontend_css/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/owl.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/color.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/responsive.css')}}" rel="stylesheet">
<style>
    .block-ellipsis {
    display: -webkit-box;
    max-width: 100%;
    height: 62px;
    margin: 0 auto;
    font-size: 14px;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="preloader"></div>
        <!-- preloader -->

        <!-- Start header -->
        @include('frontend/include/header')
        <!-- End header -->

        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url({{ asset('frontend_css/assets/images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Our Product</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-page-section -->
        <section class="shop-page-section shop-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Product Category</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        @php
                                    $cat_title=App\Models\ProductCategory::where('delete_status',0)->get();
                                    @endphp
                                    @foreach ($cat_title as $key => $items)
                                        <li><a href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Product</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($products as $item)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="product-details/{{$item->slug}}"><img src="{{uploaded_asset($item->image)}}" alt="Frontage Facade"></a></figure>
                                        <h5><a href="product-details/{{$item->slug}}">{{$item->title}}</a></h5>
                                        <span class="price">₹{{$item->price}}</span>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                            <div class="advice-box centred">
                                <div class="inner">
                                    <h3>Have Any Questions?</h3>
                                    <h3>Call Us Today</h3>
                                    <div class="ttm-horizontal_sep w-100 mt-15 mb-20"></div>
                                    <div>
                                     <img src="https://rkconstruction.org.in/frontend_css/images/customer-service.png">
                                    </div>
                                    <h2>Call: +91-7376531288</h2>
                                    <span>info@tirupatibathhub.in</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="our-shop">
                            <!-- <div class="item-shorting clearfix">
                                <div class="text pull-left">
                                    <p>Showing 1–12 of 14 results</p>
                                </div>
                                <div class="short-box pull-right">
                                    <div class="select-box">
                                    </div>
                                </div>
                            </div> -->

                            @forelse ($products as $item)
                            <div class="product-block-two">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{uploaded_asset($item->image)}}" alt="Frontage Facade">
                                        <a href="product-details/{{$item->slug}}"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="content-box">
                                        <h2><a href="product-details/{{$item->slug}}">{{$item->title}}</a></h2>
                                        <h5><span>₹</span>{{$item->price}}</h5>
                                        <p class="block-ellipsis">{{$item->short_desc}}</p>
                                        <div class="link"><a href="product-details/{{$item->slug}}" class="theme-btn-one">sHop now<i class="far fa-long-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h5>Data Not Found</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


        <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                @foreach (App\Models\Logo::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get() as $item)
                <figure class="clients-logo-box"><a href="#"><img src="public/logo/{{$item->image}}" alt="Frontage Facade"></a></figure>
                @endforeach
                </div>
            </div>
        </section>
        <!-- clients-section end -->

 <!-- main-footer -->
 @include('frontend/include/footer')
 <!-- main-footer end -->

 <!--Scroll to top-->
 <button class="scroll-top scroll-to-target" data-target="html">
     <span class="fa fa-arrow-up"></span>
 </button>
</div>
<!-- jequery plugins -->
<script src="{{ asset('frontend_css/assets/js/jquery.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/owl.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/wow.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/validation.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/appear.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/scrollbar.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/nav-tool.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.nice-select.min.js')}}"></script>
<!-- main-js -->
<script src="{{ asset('frontend_css/assets/js/script.js')}}"></script>
</body><!-- End of .page_wrapper -->
</html>
