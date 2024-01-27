<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('backend/assets/vendors/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/vector-map/jqvmap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.2.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
@include('backend.layouts.header')
        <!-- ============================================================== -->
        <!-- ============================================================== -->
@include('backend.layouts.sidebar')        
        <!-- ============================================================== -->
        <!-- ============================================================== -->
@yield('content')
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="{{asset('backend/assets/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstrap bundle js-->
    <script src="{{asset('backend/assets/vendors/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js-->
    <script src="{{asset('backend/assets/vendors/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- chartjs js-->
    <script src="{{asset('backend/assets/vendors/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/charts/charts-bundle/chartjs.js')}}"></script>
   
    <!-- main js-->
    <script src="{{asset('backend/assets/libs/js/main-js.js')}}"></script>
    <!-- jvactormap js-->
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- sparkline js-->
    <script src="{{asset('backend/assets/vendors/charts/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/charts/sparkline/spark-js.js')}}"></script>
     <!-- dashboard sales js-->
    <script src="{{asset('backend/assets/libs/js/dashboard-sales.js')}}"></script>
</body>
 
</html>