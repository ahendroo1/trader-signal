
@extends('front.auth.base_auth_')
@section('content_auth')

<div class="limiter" >
	<div class="container-login100">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
			<form class="login100-form validate-form" method="post"  action="{{url('/login_account')}}">

				{{ csrf_field() }}
				
				<img src="{{asset('assets/img/signal-logo-text.png')}}"  class="m-b-16" width="150px" alt="">
				<h4><b>Premium Signal Access</b></h4>
				<small class="m-b-16">Enter your detail to login</small>
			
				@if (Session::has('success'))
					<div class="alert alert-primary">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
							<i class="nc-icon nc-simple-remove"></i>
						</button>
						<span>
							<b> Success - </b> {{Session::get('success')}}
						</span>
					</div>
				
				@endif
				@if (Session::get('warning'))
					<div class="alert alert-warning">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
							<i class="nc-icon nc-simple-remove"></i>
						</button>
						<span>
							<b> Warning - </b> {{Session::get('warning')}}
						</span>
					</div>
				@endif
				@if (Session::get('error'))
					<div class="alert alert-danger">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
							<i class="nc-icon nc-simple-remove"></i>
						</button>
						<span>
							<b> Error - </b> {{Session::get('error')}}
						</span>
					</div>
				@endif

				<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email" >
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<span class="lnr lnr-envelope"></span>
					</span>
				</div>

				<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<span class="lnr lnr-lock"></span>
					</span>
				</div>

				<div class="contact100-form-checkbox m-l-4">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">
						Remember me
					</label>
				</div>
				
				<div class="container-login100-form-btn p-t-25">
					<button type="submit" class="login100-form-btn">
						Login
					</button>
				</div>

				<div class="text-center w-full p-t-42 p-b-22">
					<span class="txt1">
						Login or Register with
					</span>
				</div>

				<a href="#" class="btn-face m-b-10">
					<i class="fa fa-facebook-official"></i>
					Facebook
				</a>

				<a href="{{url('login/google')}}" class="btn-google m-b-10">
					<img src="{{asset('auth/images/icons/icon-google.png')}}" alt="GOOGLE">
					Google
				</a>

				{{-- <div class="text-center w-full p-t-115">
					<span class="txt1">
						Not a member?
					</span>

					<a class="txt1 bo1 hov1" href="#">
						Sign up now							
					</a>
				</div> --}}
			</form>
		</div>
	</div>
</div>

@endsection