<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<!-- Primary Meta Tags -->
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="light dark">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/css/OverlayScrollbars.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
<!-- REQUIRED LINKS -->
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('public/admin-assets/css/adminlte.css')}}">
{{-- <link rel="stylesheet" href="{{asset('public/admin-assets/css/adminlte-dark-addon.css')}}"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
@yield('styles')
</head>
<body class="layout-fixed">
<div class="wrapper">
      <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light">
  <div class="container-fluid">
    <!-- Start navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar-full" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- End navbar links -->
    <ul class="navbar-nav ms-auto">

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img src="{{asset('public/admin-assets/img/user2-160x160.jpg')}}" class="user-image img-circle shadow" alt="User Image">
          <span class="d-none d-md-inline">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{asset('public/admin-assets/img/user2-160x160.jpg')}}" class="img-circle shadow" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <li class="user-footer">
            <a href="{{url('admin/Profile')}}" class="btn btn-default btn-flat">Profile</a>
            <a href="{{url('admin/logout')}}" class="btn btn-default btn-flat float-end">Sign out</a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
<!-- /.navbar -->


      <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-bg-dark sidebar-color-primary shadow">
  <div class="brand-container">
    <a href="javascript:;" class="brand-link">
      <img src="{{asset('public/admin-assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-80 shadow">
      <span class="brand-text fw-light">AdminLTE 4</span>
    </a>
    <a class="pushmenu mx-1" data-lte-toggle="sidebar-mini" href="javascript:;" role="button"><i class="fas fa-angle-double-left"></i></a>
  </div>
  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <!-- Sidebar Menu -->
      <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{url('/admin/dashboard')}}" class="nav-link {{ (Route::currentRouteName() == 'dashboard') ? 'active':''; }}">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="javascript:;" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="javascript:;" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>

      <!-- Main content -->
      <main class="content-wrapper">
            @yield('contant')
      </main>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
<footer class="main-footer">
  <!-- To the end -->
  <div class="float-end d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the start -->
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

    </div>
    <!--  ./wrapper -->

    <!-- OPTIONAL SCRIPTS -->

<!-- overlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/js/OverlayScrollbars.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('public/admin-assets/js/custom.js')}}"></script>
<script src="{{asset('public/admin-assets/js/adminlte.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
@yield('scripts')
</body>
</html>
