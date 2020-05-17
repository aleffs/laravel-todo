<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>App Landing Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
        <link rel="stylesheet" href="/frontend/assets/css/slicknav.css">
        <link rel="stylesheet" href="/frontend/assets/css/animate.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/frontend/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/themify-icons.css">
        <link rel="stylesheet" href="/frontend/assets/css/slick.css">
        <link rel="stylesheet" href="/frontend/assets/css/nice-select.css">
        <link rel="stylesheet" href="/frontend/assets/css/style.css">
</head>


<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->


<header>
<!-- Header Start -->
   <div class="header-area header-transparrent ">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">    
                                    <li class=""><a href="{{ route('/') }}"> Home</a></li>
                                    <li><a href="{{ route('my-todos') }}">My Todos</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Users</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Header End -->
</header>

<body>
    <div id="app" style="margin-top:8em;">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="/frontend/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="/frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/frontend/assets/js/popper.min.js"></script>
        <script src="/frontend/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="/frontend/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/frontend/assets/js/owl.carousel.min.js"></script>
        <script src="/frontend/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="/frontend/assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="/frontend/assets/js/wow.min.js"></script>
        <script src="/frontend/assets/js/animated.headline.js"></script>
        <script src="/frontend/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="/frontend/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/frontend/assets/js/jquery.nice-select.min.js"></script>
        <script src="/frontend/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/frontend/assets/js/contact.js"></script>
        <script src="/frontend/assets/js/jquery.form.js"></script>
        <script src="/frontend/assets/js/jquery.validate.min.js"></script>
        <script src="/frontend/assets/js/mail-script.js"></script>
        <script src="/frontend/assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="/frontend/assets/js/plugins.js"></script>
        <script src="/frontend/assets/js/main.js"></script>

</body>
</html>
