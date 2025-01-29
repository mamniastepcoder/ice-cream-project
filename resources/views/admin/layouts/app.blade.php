<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ice Creame Ecommerce </title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/fontawesome-free/css/all.min.css') }}">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/jqvmap/jqvmap.min.css') }}">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('adminpanel/dist/css/adminlte.min.css') }}">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/daterangepicker/daterangepicker.css') }}">

<!-- Summernote -->
<link rel="stylesheet" href="{{ asset('adminpanel/plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminpanel/css/custom.css')}}">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


 <!-- Navbar -->
 @include('admin.layouts.nav-top')
  <!-- /.navbar -->
<!-- Main Sidebar Container -->
  @include('admin.layouts.sidebar')

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
 
    @include('admin.layouts.footer')


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('adminpanel/plugins/jquery/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminpanel/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('adminpanel/plugins/chart.js/Chart.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('adminpanel/plugins/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->
<script src="{{ asset('adminpanel/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('adminpanel/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('adminpanel/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminpanel/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('adminpanel/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('adminpanel/dist/js/adminlte.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('adminpanel/dist/js/demo.js') }}"></script> -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('adminpanel/dist/js/pages/dashboard.js') }}"></script> -->

</body>
</html>
