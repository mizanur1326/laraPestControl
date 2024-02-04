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


{{-- For DataTables --}}
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/datatables/css/fixedHeader.bootstrap4.css')}}">
</head>

<body>
    
@include('backend.layouts.header')


@include('backend.layouts.sidebar')        
       

@yield('content')


@include('backend.layouts.footer')

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


{{-- for DataTable --}}
    <script src="{{asset('backend/assets/vendors/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend/assets/vendors/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend/assets/vendors/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/datatables/js/data-table.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>