<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
        <title>Law Ruler</title>
        @include('layouts.head')
        
  </head>
<body class="index-banner">
    <!-- Begin page -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            
    @yield('content')
            
    @include('layouts.footer')    
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        @include('includes.loader')
        @include('includes.flashMsg')
      
    <!-- END wrapper -->
    @include('layouts.footer-script')    
    </body>
</html>