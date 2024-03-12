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
<link rel="icon" href="{{ asset('frontend_css/assets/images/favicon.ico') }}" type="image/x-icon">
<!-- Stylesheets -->
<link href="{{ asset('frontend_css/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/responsive.css') }}" rel="stylesheet">
</head>
<!-- page wrapper -->

<body>
<div class="boxed_wrapper">

<!-- Start header -->
@include('frontend/include/header')
<!-- End header -->

<!-- Page Title -->
<section class="page-title centred" style="background-image: url({{ asset('frontend_css/assets/images/background/page-title.jpg')}});">
<div class="auto-container">
<div class="content-box">
<div class="title">
<h1>Product</h1>
</div>
<ul class="bread-crumb clearfix">
<li><a href="index.php">Home</a></li>
<li>Product Details</li>
</ul>
</div>
</div>
</section>
<!-- End Page Title -->

<!-- shop-details -->
<section class="shop-details">
<div class="auto-container">
<div class="product-details-content">
<div class="row align-items-center clearfix">
<div class="col-lg-7 col-md-12 col-sm-12 image-column">
    <div class="slider-inner">
        <div class="bxslider">
            <div class="slider-content">
                <div class="slider-pager">
                    <ul class="thumb-box">
                        @foreach(explode(',',$product_detail->gallery_image) as $image)
                        <li><a class="active" href="{{uploaded_asset($image)}}">
                                <figure><img src="{{uploaded_asset($image)}}" alt="Frontage Facade"></figure>
                            </a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-image">
                    <figure class="image">
                        <a href="{{uploaded_asset($product_detail->image)}}"
                            class="lightbox-image" data-fancybox="gallery"><img
                                src="{{uploaded_asset($product_detail->image)}}" alt="Frontage Facade"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-5 col-md-12 col-sm-12 content-column">
    <div class="product-details">
        <h2>{{$product_detail->title}}</h2>
        Start From <h5>₹{{$product_detail->price}}</h5>
        <div class="addto-cart-box">
                <div class="call-us mb-3"><a href="{{uploaded_asset($product_detail->pdfcatalogue)}}""><i class="far fa-cloud-download"></i>
                        Download Catalogue</a></div>
            <ul class="clearfix">
                <li class="call-us"><a href="tel:+91-7376531288"><i class="fa fa-phone"></i>
                        +91-7376531288</a></li>
                <li><button type="button" class="theme-btn-one" onclick="enquiry_modal({{$product_detail->id}})" data-toggle="modal"
                        data-target="#myModal">Enquiry Now <i
                            class="far fa-long-arrow-right"></i></button></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div><br>
<div class="product-discription">
<div class="tabs-box">
<div class="tab-btn-box">
    <ul class="tab-btns tab-buttons clearfix">
        <li class="tab-btn active-btn">Description</li>
    </ul>
</div>
<div class="tabs-content">
    <div class="tab active-tab" >
        <div class="content-box">
            <p>{{$product_detail->short_desc}}</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- shop-details end -->

<!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                @foreach (App\Models\Logo::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get() as $item)
                <figure class="clients-logo-box"><a href="#"><img src="../public/logo/{{$item->image}}" alt="Frontage Facade"></a></figure>
                @endforeach
                </div>
            </div>
        </section>
        <!-- clients-section end -->

<div class="modal" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Product Title</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <strong>Success!</strong> {{ $message }}
    </div>
    @endif
<form method="post" action="{{route('inquiry.store')}}" class="default-form">
    @csrf
    <div class="row clearfix">
        <div class="col-md-12 col-sm-12">
            <label>Full Name</label>
            <input type="hidden" name="product_id" id="product_id" value="{{$product_detail->id}}">
            <input type="text" class="form-control" name="name"
                placeholder="Write Your Name" required="" aria-required="true">
        </div>
        <div class="col-md-6 col-sm-12">
            <label>Email Address</label>
            <input type="email" class="form-control" name="email"
                placeholder="Write Your Email" required="" aria-required="true">
        </div>
        <div class="col-md-6 col-sm-12">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone" required=""
                placeholder="Phone Number" aria-required="true">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Write Your Message</label>
            <textarea name="message" class="form-control" placeholder="Write Message" name="message"></textarea>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
            <button class="theme-btn-one" type="submit" name="submit-form">Submit
                Submit <i class="far fa-long-arrow-right"></i></button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- main-footer -->
@include('frontend/include/footer')
<!-- main-footer end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
<span class="fa fa-arrow-up"></span>
</button>
</div>
<!-- jequery plugins -->
<script src="{{ asset('frontend_css/assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/owl.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/wow.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/validation.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/appear.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.nice-select.min.js') }}"></script>
<!-- main-js -->
<script src="{{ asset('frontend_css/assets/js/script.js') }}"></script>
</body><!-- End of .page_wrapper -->

</html>
