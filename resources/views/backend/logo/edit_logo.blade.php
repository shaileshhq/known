<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend_css/assets/css/header-colors.css')}}" />
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
								<li class="breadcrumb-item active" aria-current="page">Brand Logo</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col-lg-12 col-xl-10">
							<h3>Edit Gallery</h3>
							</div>
						</div>
					</div>
					<div class="card-body p-4">
						<div class="form-body mt-4">
							<div class="border border-3 p-4 rounded">
								<form method="POST" action="{{route('logo.update', $logo->id)}}" enctype="multipart/form-data">
									@method('PUT')
									@csrf
									<div class="row">
										<div class="col-lg-6 mb-3">
											<label for="formFile" class="form-label">Image</label>
											<input class="form-control" type="file" name="image" id="formFile">
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
	<!--start switcher-->
	@include("backend.include.theme_switcher")
	<!--end switcher-->
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
