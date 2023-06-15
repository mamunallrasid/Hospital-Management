<!doctype html>
<html lang="en">


<!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 20:34:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('vertical/assets/images/favicon-32x32.png')}}" type="image/png" />
    <script src="https://kit.fontawesome.com/767f8dca2f.js" crossorigin="anonymous"></script>
	<!--plugins-->
	    <link href="{{url('vertical/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('vertical/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('vertical/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('vertical/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('vertical/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('vertical/assets/css/icons.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('vertical/assets/plugins/toast/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('vertical/assets/plugins/toast/toastr.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('vertical/assets/plugins/sweetalert/sweetalert2.min.css')}}">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{url('vertical/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/header-colors.css')}}" />
    <title>Admin Login</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="{{url('vertical/assets/images/logo-icon.png')}}" width="60" alt="" />
									</div>
									<div class="text-center mb-2">
										<h5 class="">Admin</h5>
									</div>
									<div class="form-body">
                                            <form class="row g-3" id="Loginform" method="POST">
                                                @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control"  id="email" name="email" placeholder="test@example.com" required>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" name="password" value="12345678" placeholder="Enter Password" required>
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
                                            <div class="col-12">
                                                <div class="row">
                                                  <div class="col-md-6 col-12">
                                                        <input type="text" class="form-control" placeholder="Captcha" name="captcha" required>
                                                  </div>
                                                  <div class="col-md-6 col-12 d-flex justify-content-end">
                                                    <div id="captcha_code"> {!! captcha_img() !!}</div>
                                                    <div>
                                                        <div id="load" onclick="RefreshCaptch('{{ route('refresh-raptcha') }}')" style="cursor: pointer;background-color:gainsboro;padding:4px;">
                                                            <i class="fa fa-solid fa-rotate-right" style="font-size: 14px;"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                                </div>
                                            </div>

											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="auth-basic-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary" onclick="requestSend($('#Loginform'),'{{route('admin.login-request')}}')" id="submit" name="submit">Sign in</button>
												</div>
											</div>
											{{-- <div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-signup.html">Sign up here</a>
													</p>
												</div>
											</div> --}}
										</form>
									</div>
									{{-- <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
										<hr/>
									</div> --}}
									{{-- <div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div> --}}

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{url('vertical/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('vertical/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('vertical/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('vertical/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <!-- Main JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="{{url('vertical/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{url('vertical/assets/plugins/toast/toastr.min.js')}}"></script>
    <script src="{{url('backend/custom-js/common.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{url('vertical/assets/js/app.js')}}"></script>
</body>
</html>
