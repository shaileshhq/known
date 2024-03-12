<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('backend_css/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend_css/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
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
	<link rel="stylesheet" href="{{ asset('img_css/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('img_css/css/aiz-core.css') }}">
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
								<li class="breadcrumb-item active" aria-current="page">All Product</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				@if (Session::has('success'))
				<div class="alert border-0 bg-white border-start border-5 border-success alert-dismissible fade show py-2">
					<div class="d-flex align-items-center">
						<div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
						</div>
						<div class="ms-3">
							<h6 class="mb-0 text-success">Success</h6>
							<div>{{Session::get('success')}}</div>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif

				@if (Session::has('update'))
				<div class="alert border-0 bg-white border-start border-5 border-info alert-dismissible fade show py-2">
				   <div class="d-flex align-items-center">
					   <div class="font-35 text-info"><i class="bx bx-info-square"></i>
					   </div>
					   <div class="ms-3">
						   <h6 class="mb-0 text-info">Update</h6>
						   <div>{{Session::get('update')}}</div>
					   </div>
				   </div>
				   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>
			   @endif

			   @if (Session::has('error'))
			   <div class="alert border-0 bg-white border-start border-5 border-danger alert-dismissible fade show py-2">
				   <div class="d-flex align-items-center">
					   <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
					   </div>
					   <div class="ms-3">
						   <h6 class="mb-0 text-danger">Danger</h6>
						   <div>{{Session::get('error')}}</div>
					   </div>
				   </div>
				   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>
				@endif
				<div class="card">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col-lg-9 col-xl-10">
							<h3>Product</h3>
							</div>
							<div class="col-lg-3 col-xl-2">
								<a href="{{ route('product.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Product</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
										<th>Image</th>
										<th>Category</th>
										<th>Title</th>
										<th>Short Description</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @php
									$i=1;
									@endphp
									@foreach ($product as $item)
									<tr>
										<td>{{$i++}}</td>
										<td><img src="{{uploaded_asset($item->image)}}" style="width:150px;"></td>
										<td>
											@php
                                            $pro_title=App\Models\ProductCategory::where('id',$item->category_id)->first();
											@endphp

											@if (!empty($pro_title))
											{{$pro_title->title}}
											@endif
										</td>
										<td>{{$item->title}}</td>
										<td>{{$item->short_desc}}</td>
										<td>
											<div class="d-flex order-actions">
												<a href="{{ route('product.edit', $item->id) }}" class=""><i class='bx bxs-edit'></i></a>
												<a href="{{route('product.delete', $item->id)}}" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include("backend.include.footer")
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('img_css/js/vendors.js') }}"></script>
    <script src="{{ asset('img_css/js/aiz-core.js') }}"></script>
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
