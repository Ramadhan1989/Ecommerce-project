<!doctype html>
<html class="no-js" lang="en">

<head>
@include('admin.header')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
       @include('admin.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- page title area start -->
            @include('admin.page_title')
            <!-- page title area end -->
            <div class="main-content-inner">
            @include('admin.main_content')           
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
      @include('admin.footer')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
 
@include('admin.script')
</body>

</html>
