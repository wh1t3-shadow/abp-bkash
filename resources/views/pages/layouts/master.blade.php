<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Eduly</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('asset/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png')}}" />


    <style>
        .dropbtn {
         
        }
        .costom1{
            padding-left: 15px
        }
        .costom2{
            padding-left: 20px;
            font-size: 18px;

        }
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {background-color: #ddd;}
        
        .nav-item:hover .dropdown-content {display: block;}
        
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    

    @stack('css')
</head>

<body>
    @include('pages.partial.header')

    @yield('content')

    @include('pages.partial.footer')

    <!-- plugins:js -->
    <script src="{{ asset('asset/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('asset/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('asset/js/off-canvas.js')}}"></script>
    <script src="{{ asset('asset/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('asset/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('asset/js/dashboard.js')}}"></script>
    <script src="{{ asset('asset/js/data-table.js')}}"></script>
    <script src="{{ asset('asset/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('asset/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('asset/js/jquery.cookie.js')}}" type="text/javascript"></script>

    @stack('js')


</body>

</html>
