<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Metronic | Login Page 4</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="{{ asset('cms/assets/css/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->



		<!--end:: Vendor Plugins -->
		<link href="{{ asset('cms/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />



		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('cms/assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('cms/assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('cms/assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('cms/assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('cms/assets/media/logos/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('cms/assets/media/bg/bg-9.jpg') }});">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
                            <div class="kt-login__logo">
								<a href="#">
									<img src="{{ asset('cms/assets/media/logos/pharmcy.png') }}" width="35%">
								</a>
							</div>
							 {{-- <div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign Up <b>DashPord</b></h3>
								</div> --}}
								 {{-- <form class="kt-form" action="">
									<div class="input-group">
										<input for="email" class="form-control" type="text" placeholder="Email" name="email" id="email" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" for="password" type="password" placeholder="Password" name="password" id="password">
									</div>
									<div class="row kt-login__extra">
										<div class="col">
											 <label class="kt-checkbox">
												<input type="checkbox" name="remember"> Remember me
												<span></span>
											</label>
										</div>
										<div class="col kt-align-right">
											<a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
										</div>
									</div>
									<div class="kt-login__actions">
										<button   onclick="login()"  class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
									</div>
								</form>
							</div> --}}
							<div class="kt-login">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign Up</h3>
									<div class="kt-login__desc">Enter your details to create your account:</div>
								</div>

								<form class="kt-form" action="">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Enter first Name"  id="firstName" name="firstName">
									</div>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name">
                                      </div>

                                   <div class="input-group">

                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
                              </div>
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Email" name="email" id="email" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Password" id="password" name="password">
									</div>
                                    <div class="input-group">
                                        <div></div>
                                        <div class="form-control">
                                            <input type="file" placeholder="Choose File" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="customFile">Choose image</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                       <label for="date_of_birth"> Date of Birth</label>
                                       <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter First Date of birth">
                                     </div>
                                           <div class="form-group col-md-4">
                                         <label for="gender">Gender </label>
                                         <select class="form-control" name="gender" style="width: 100%;"
                                             id="gender" aria-label=".form-select-sm example">
                                                 <option value="" >Chosse Gender</option>
                                                 <option value="male" >Male</option>
                                                 <option value="female" >FeMale</option>

                                         </select>
                                     </div>

                                           <div class="form-group col-md-4">
                                         <label for="status">Status</label>
                                         <select class="form-control" name="status" style="width: 100%;"
                                             id="status" aria-label=".form-select-sm example">
                                                 <option value="" >Chosse Statud</option>
                                                 <option value="active" >Active</option>
                                                 <option value="inactive" >In Active</option>
                                         </select>
                                     </div>


                                   </div>

									{{-- <div class="input-group">
										<input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
									</div> --}}
									<div class="row kt-login__extra">
										<div class="col kt-align-left">
											<label class="kt-checkbox">
												<input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
												<span></span>
											</label>
											<span class="form-text text-muted"></span>
										</div>
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_signup_submit"  onclick="Register()" class="btn btn-brand btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
										{{-- <a href="{{ route('view.login', $guard) }}" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</a> --}}
									</div>
								</form>
							</div>
							 {{-- <div class="kt-login__forgot">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Forgotten Password ?</h3>
									<div class="kt-login__desc">Enter your email to reset your password:</div>
								</div>
								<form class="kt-form" action="">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_forgot_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
										<button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
									</div>
								</form>
							</div> --}}
							{{-- <div class="kt-login__account">
								<span class="kt-login__account-msg">
									Don't have an account yet ?
								</span>
								&nbsp;&nbsp; --}}
								{{-- <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		  <script src="{{ asset('cms/assets/plugins/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('cms/assets/plugins/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
        <script src="{{ asset('cms/assets/js/pages/crud/file-upload/dropzonejs.js') }}" type="text/javascript"></script>

		<!--end:: Vendor Plugins -->
		<script src="{{ asset('cms/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>


		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset('cms/assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('cms/js/crud.js') }}"></script>
<script>
    function Register(){
        let formData=new FormData();
        formData.append('firstName' , document.getElementById('firstName').value);
        formData.append('lastName',document.getElementById('lastName').value);
     formData.append('mobile',document.getElementById('mobile').value);
    formData.append('gender',document.getElementById('gender').value);
    formData.append('status',document.getElementById('status').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('date_of_birth',document.getElementById('date_of_birth').value);
    formData.append('image',document.getElementById('image').files[0]);
        formData.append('email' , document.getElementById('email').value);

        store('/cms/admin/confirm',formData);


    }
</script>
		<!--end::Page Scripts -->
       <!--  <script>
            function login(url,data) {
                {{-- var guard = '{{ request('guard')}}'; --}}
            axios.post('/cms/'+guard+'/register', {
                email : document.getElementById('email').value,
                password : document.getElementById('password').value,
                // remember:document.getElementById('email').checked,
                guard: guard,
            })
        // .then(function(response){
        //     window.location.href='/cms/'+guard+'/login'
        // })
        .catch(function(error){
            if(error.response.data.errors!==undefined){
                showErrorMessages(error.response.data.errors);

            }else{
                showMessage(error.response.data);
            }
        });



        }
        </script>
    -->

	</body>

	<!-- end::Body -->
</html>
