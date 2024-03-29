<!doctype html>
<html lang="en">

  <head>
    <title>@yield('title')</title>
    <link rel="icon" type="image/jpg" href="assets/images/luckyciousT.jpg" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="{{ url('/') }}" class="font-weight-bold"><img src="assets/images/luckycious.png"></a>
              </div>
            </div>

            <div class="col-9  text-right">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5">
              <span class="icon-menu h3 text-primary">
              </span>
            </a>
          </span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="{{ url('/') }}" class="nav-link">Me</a></li>
                  <li><a href="{{ url('/portofolio') }}" class="nav-link">Work</a></li>
                  <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>  
          </div>
        </div>
      </header>
    
    @yield('container')

    <div class="site-section">
        <div class="row mt-5 justify-content-center">
           <div class="col-md-7 text-center">
                <a href="{{ url('/') }}" class="font-weight-bold"><img src="assets/images/luckycious.png"></br></br></a>
          </div>
        </div>
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col">
            <a href="{{ url('https://www.facebook.com/AnggiAnggaraJr') }}"><span class="m-2 icon-facebook"></span></a>
            <a href="{{ url('https://www.linkedin.com/in/anggara-anggi-b36121168/') }}"><span class="m-2 icon-linkedin"></span></a>
            <a href="{{ url('https://www.instagram.com/anggara_ann/') }}"><span class="m-2 icon-instagram"></span></a>
          </div>
        </div>
        
        <div class="row mt-5 justify-content-center">
          <div class="col-md-7 text-center">
            <p>
            Copyright &copy; Anggi Anggara
            </p>
          </div>
        </div>
      </div>
    </div>

    

    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/main.js"></script>

  </body>

</html>