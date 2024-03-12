<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="app-url" content="{{ getBaseURL() }}">
	<meta name="file-base-url" content="{{ getFileBaseURL() }}">
	<!--favicon-->
	<link rel="icon" href="{{ asset('backend_css/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('backend_css/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}"
		rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('backend_css/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('backend_css/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend_css/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('backend_css/assets/css/icons.css')}}" rel="stylesheet">
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="{{ asset('img_css/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('img_css/css/aiz-core.css') }}">
    <script>
        var AIZ = AIZ || {};
    </script>
	<title>Frontage Facade | Admin Dashboard</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include("backend.include.sidebar")
		<!--end sidebar wrapper -->
		<!--start header -->
		@include("backend.include.header")
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Frontage Facade</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Product</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col-lg-12 col-xl-10">
							<h3>Edit Product</h3>
							</div>
						</div>
					</div>
					<div class="card-body p-4">
						<div class="form-body mt-4">
							<div class="border border-3 p-4 rounded">
								<form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
									@method('PUT')
									@csrf
									<div class="row">
										<div class="col-lg-6 mb-3">
											<label for="inputProductTitle" class="form-label">Title</label>
											<input type="text" class="form-control" name="title"
												placeholder="Enter product title" value="{{$product->title}}">
										</div>
                                        <div class="col-lg-6 mb-3">
											<label for="inputProductTitle" class="form-label">Price</label>
											<input type="text" class="form-control" name="price"
												placeholder="Enter Price" value="{{$product->price}}">
										</div>
										<div class="col-lg-6 mb-3">
											<label for="inputProductDescription" class="form-label">Description</label>
											<textarea class="form-control" name="short_desc"
											 rows="3">{{$product->short_desc}}</textarea>
										</div>
								<div class="col-lg-6 mb-3">
		                          <div class="form-group">
                                    <label class="form-label">Thumbnail Image</label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browser</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="images" class="selected-files" value="{{$product->image}}">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                  </div>
								</div>
								<div class="col-lg-6 mb-3">
		                           <div class="form-group">
                                    <label class="form-label">Gallery Image</label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browser</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="gallery_image" class="selected-files" value="{{$product->gallery_image}}">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                   </div>
								</div>
								<div class="col-lg-6 mb-3">
		                           <div class="form-group">
                                    <label class="form-label">Catalogue</label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="document" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browser</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="pdfcatalogue" class="selected-files" value="{{$product->pdfcatalogue}}">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                   </div>
								</div>

									</div>
									<div class="col">
										<button type="submit" class="btn btn-primary px-5 radius-30">Update</button>
									</div>
								</form>
							</div>
							<!--end row-->

						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include("backend.include.footer")
	</div>
	<!--end wrapper-->
	<script src="{{ asset('backend_css/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('img_css/js/vendors.js') }}"></script>
    <script src="{{ asset('img_css/js/aiz-core.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('backend_css/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('backend_css/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('backend_css/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{ asset('backend_css/assets/js/app.js')}}"></script>
</body>

</html>
