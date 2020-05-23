<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Rajdhani Public School | Design by Web Infotech</title>
       <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       @yield('og')
       <!-- Favicon -->
       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
       <!-- Normalize CSS -->
       <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
       <!-- Main CSS -->
       <link rel="stylesheet" href="{{asset('css/main.css')}}">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
       <!-- Animate CSS -->
       <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
       <!-- Font-awesome CSS-->
       <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
       <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
       <!-- Owl Caousel CSS -->
       <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
       <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
       <!-- Main Menu CSS -->
       <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
       <!-- nivo slider CSS -->
       <link rel="stylesheet" href="{{asset('vendor/slider/css/nivo-slider.css')}}" type="text/css" />
       <link rel="stylesheet" href="{{asset('vendor/slider/css/preview.css')}}" type="text/css" media="screen" />
       <!-- Datetime Picker Style CSS -->
       <link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.css')}}">
       <!-- Magic popup CSS -->
       <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
       <!-- Switch Style CSS -->
       <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
       <!-- ReImageGrid CSS -->
       <link rel="stylesheet" href="{{asset('css/reImageGrid.css')}}">
       <!-- Custom CSS -->
       <link rel="stylesheet" href="{{asset('css/style.css')}}">
       <!--responsive css-->
       <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
       <!-- Modernizr Js -->
       <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>

  </head>


  <body>
    <!-- <div id="preloader"></div> -->
    @include('frontend.include.header')
    <div class="main-content">



     @yield('content')


    </div>





    @include('frontend.include.footer')

  </body>
  <script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <!-- Plugins js -->
  <script src="{{asset('js/plugins.js')}}" type="text/javascript"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- WOW JS -->
  <script src="{{asset('js/wow.min.js')}}"></script>
  <!-- Nivo slider js -->
  <script src="{{asset('vendor/slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/slider/home.js')}}" type="text/javascript"></script>
  <!-- Owl Cauosel JS -->
  <script src="{{asset('vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
  <!-- Meanmenu Js -->
  <script src="{{asset('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
  <!-- Srollup js -->
  <script src="{{asset('js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
  <!-- jquery.counterup js -->
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.j')}}s"></script>
  <!-- Countdown js -->
  <script src="{{asset('js/jquery.countdown.min.js')}}" type="text/javascript"></script>
  <!-- Isotope js -->
  <script src="{{asset('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
  <!-- Magic Popup js -->
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
  <!-- Gridrotator js -->
  <script src="{{asset('js/jquery.gridrotator.js')}}" type="text/javascript"></script>
  <!-- Custom Js -->
  <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
  @stack('script')
</html>
