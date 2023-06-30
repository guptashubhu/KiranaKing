<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin|Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/admin-assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
    <a><b><img class="login-box-msg" src="{{asset('public/admin-assets/img/Laravel.png')}}" alt="laravel_logo" width="100px"></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-body">
      <p class="login-box-msg">Administrator</p>
	    <form action="{{url('admin/auth-admin')}}" method="post" enctype="multipart/form-data">
	      	@csrf

	        <div class="input-group mb-3">
	          <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
		        @error('email')
		      		<div class="form-valid-error">{{ $message }}</div>
		      	@enderror
		      </div>

	        <div class="input-group mb-3">
	          <input type="password" class="form-control" placeholder="Password" name="password" >
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
		        @error('password')
		      		<div class="form-valid-error">{{ $message }}</div>
		      	@enderror
		      </div>
	        <div class="row">

	          <!-- /.col -->
	          <div class="col-4">
	            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
	          </div>
	          <div class="col-8">
            	<p class="text-right mt-1">
              	<a href="">Forgot Password ?</a>
            	</p>
          	</div>
	          <!-- /.col -->
	        </div>
	    </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('public/admin-assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin-assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin-assets/js/adminlte.js')}}"></script>

</body>
</html>
