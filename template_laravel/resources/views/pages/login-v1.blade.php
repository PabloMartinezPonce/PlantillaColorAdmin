@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login bg-black animated fadeInDown">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				<span class="logo"></span> <b>Color</b> Admin
				<small>responsive bootstrap 3 admin template</small>
			</div>
			<div class="icon">
				<i class="fa fa-lock"></i>
			</div>
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
			<form action="/" method="GET" class="margin-bottom-0">
				<div class="form-group m-b-20">
					<input type="text" class="form-control form-control-lg inverse-mode" placeholder="Email Address" required />
				</div>
				<div class="form-group m-b-20">
					<input type="password" class="form-control form-control-lg inverse-mode" placeholder="Password" required />
				</div>
				<div class="checkbox checkbox-css m-b-20">
					<input type="checkbox" id="remember_checkbox" /> 
					<label for="remember_checkbox">
						Remember Me
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
@endsection