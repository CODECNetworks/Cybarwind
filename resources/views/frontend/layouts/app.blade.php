<!DOCTYPE html>
<html lang="en">
<!-- Head Section Start -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>

    <!-- CSS start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cns-plugin.css">
    <!--  css start  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ceh2.css">
    <link rel="stylesheet" type="text/css" href="assets/css//menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menutoggle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menubar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/services.css">
    <!-- css end -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/cns-plugin.js"></script>
    <script type="text/javascript" src="assets/js/main-menu.js"></script>
</head>
<!-- Head Section End -->
<body>

    <div class="main-content">
         {{-- Content of the page --}}
        @yield('content')
    </div>

    <!-- Footer section, included once across all pages -->
    @include('frontend.layouts.footer')

    <a href="#mian-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>


    <script src="/assets/js/slider.js"></script>
    <script type="text/javascript" src="/assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="/assets/js/homepage.js?v14"></script>
    <script type="text/javascript" src="/assets/js/mobile-menu.js"></script>
    <script type="text/javascript" src="/assets/js/main.js?v=32"></script>
    
    @stack('scripts')

</body>

</html>
