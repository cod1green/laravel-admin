<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            {{ config('app.name', 'Laravel') }}
        @show
    </title>

    <!-- Web Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/frontend/template/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('vendor/frontend/template/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ asset('vendor/frontend/template/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/css/animations.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/slick/slick.css') }}" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <link href="{{ asset('vendor/frontend/template/css/style.css') }}" rel="stylesheet" >

    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="{{ asset('vendor/frontend/template/css/typography-default.css') }}" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="{{ asset('vendor/frontend/template/css/skins/light_blue.css') }}" rel="stylesheet">

    @livewireStyles

    @yield('styles')
    @stack('styles')
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="front-page page-loader-4">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
        <!-- header-container start -->
        <div class="header-container">
            <!-- header-top start -->
            <!-- classes:  -->
            <!-- "dark": dark version of header top e.g. class="header-top dark" -->
            <!-- "colored": colored version of header top e.g. class="header-top colored" -->
            <!-- ================ -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-sm-6 col-lg-9">
                            <!-- header-top-first start -->
                            <!-- ================ -->
                            <div class="header-top-first clearfix">
                                <ul class="social-links circle small clearfix hidden-sm-down">
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <div class="social-links hidden-md-up circle small">
                                    <div class="btn-group dropdown">
                                        <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                                        <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-inline hidden-md-down">
                                    <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>Address, City, Postal Code</li>
                                    <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>+00 123 123 123</li>
                                    <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i> example@your_domain.com</li>
                                </ul>
                            </div>
                            <!-- header-top-first end -->
                        </div>
                        <div class="col-9 col-sm-6 col-lg-3">

                            <!-- header-top-second start -->
                            <!-- ================ -->
                            <div id="header-top-second"  class="clearfix">

                                <!-- header top dropdowns start -->
                                <!-- ================ -->
                                <div class="header-top-dropdown text-right">
                                    <div class="btn-group">
                                        <a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-2"></i> Sign Up</a>
                                    </div>
                                    <div class="btn-group">
                                        <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock pr-2"></i> Login</button>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
                                            <li>
                                                <form class="login-form margin-clear">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">Username</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                        <i class="fa fa-user form-control-feedback"></i>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">Password</label>
                                                        <input type="password" class="form-control" placeholder="">
                                                        <i class="fa fa-lock form-control-feedback"></i>
                                                    </div>
                                                    <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                                                    <span class="pl-1 pr-1">or</span>
                                                    <button type="submit" class="btn btn-default btn-sm">Sing Up</button>
                                                    <ul>
                                                        <li><a href="#">Forgot your password?</a></li>
                                                    </ul>
                                                    <span class="text-center">Login with</span>
                                                    <ul class="social-links circle small colored clearfix">
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--  header top dropdowns end -->
                            </div>
                            <!-- header-top-second end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end -->

            <!-- header start -->
            <!-- classes:  -->
            <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
            <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
            <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
            <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
            <!-- "centered": mandatory class for the centered logo layout -->
            <!-- ================ -->
            <header class="header centered fixed fixed-desktop clearfix">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix hidden-md-down">

                                <div id="logo" class="logo mt-2">
                                    <a href="index.html"><img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project"></a>
                                </div>

                            </div>
                            <!-- header-first end -->
                        </div>

                        <div class="col-md-12">
                            <!-- header-second start -->
                            <!-- ================ -->
                            <div class="header-second d-lg-flex d-xl-flex justify-content-xl-center justify-content-lg-center clearfix">

                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- ================ -->
                                <div class="main-navigation main-navigation--mega-menu  animated">
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                        <div class="navbar-brand clearfix hidden-lg-up">

                                            <!-- logo -->
                                            <div id="logo-mobile" class="logo">
                                                <a href="index.html"><img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project"></a>
                                            </div>

                                            <!-- name-and-slogan -->
                                            <div class="site-slogan">
                                                Multipurpose HTML5 Template
                                            </div>

                                        </div>

                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->
                                            <ul class="navbar-nav ml-xl-auto">

                                                <!-- mega-menu start -->
                                                <li class="nav-item dropdown active mega-menu mega-menu--wide">
                                                    <a href="index.html" class="nav-link dropdown-toggle" id="first-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                                    <ul class="dropdown-menu" aria-labelledby="first-dropdown">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="title"><i class="fa fa-laptop pr-2"></i> Demos</h4>
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index.html"><i class="fa fa-home pr-2"></i>Home Default</a></li>
                                                                                <li ><a href="index-rtl.html"><i class="fa fa-home pr-2"></i>Home Default - RTL <span class="badge">v1.4</span></a></li>
                                                                                <li ><a href="index-corporate-1.html"><i class="fa fa-suitcase pr-2"></i>Corporate 1</a></li>
                                                                                <li ><a href="index-corporate-2.html"><i class="fa fa-suitcase pr-2"></i>Corporate 2</a></li>
                                                                                <li ><a href="index-corporate-3.html"><i class="fa fa-suitcase pr-2"></i>Corporate 3</a></li>
                                                                                <li ><a href="index-corporate-4.html"><i class="fa fa-suitcase pr-2"></i>Corporate 4 <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-corporate-5.html"><i class="fa fa-suitcase pr-2"></i>Corporate 5 (Law Firm) <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="index-corporate-6.html"><i class="fa fa-suitcase pr-2"></i>Corporate 6<span class="badge">v2.1</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-shop.html"><i class="fa fa-shopping-basket pr-2"></i>Commerce 1</a></li>
                                                                                <li ><a href="index-shop-2.html"><i class="fa fa-shopping-basket pr-2"></i>Commerce 2</a></li>
                                                                                <li ><a href="index-portfolio.html"><i class="fa fa-briefcase pr-2"></i>Portfolio/Agency</a></li>
                                                                                <li ><a href="index-portfolio-2.html"><i class="fa fa-camera pr-2"></i>Portfolio 2 <span class="badge">v1.4</span></a></li>
                                                                                <li ><a href="index-medical.html"><i class="fa fa-ambulance pr-2"></i>Medical</a></li>
                                                                                <li ><a href="index-restaurant.html"><i class="fa fa-cutlery pr-2"></i>Restaurant</a></li>
                                                                                <li ><a href="index-restaurant-2.html"><i class="fa fa-cutlery pr-2"></i>Restaurant 2 <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="index-wedding.html"><i class="fa fa-heart pr-2"></i>Wedding</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-landing.html"><i class="fa fa-star pr-2"></i>Landing Page</a></li>
                                                                                <li ><a href="index-landing-2.html"><i class="fa fa-star pr-2"></i>Landing Page 2 <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="page-coming-soon.html"><i class="fa fa-clock-o pr-2"></i>Coming Soon</a></li>
                                                                                <li ><a href="index-one-page.html"><i class="fa fa-home pr-2"></i>One Page Version</a></li>
                                                                                <li ><a href="index-construction.html"><i class="fa fa-building pr-2"></i>Construction <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-education.html"><i class="fa fa-graduation-cap pr-2"></i>Education <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-hotel.html"><i class="fa fa-bed pr-2"></i>Hotel <span class="badge">v1.1</span></a></li>
                                                                                <li class="active"><a href="index-blog.html"><i class="fa fa-pencil pr-2"></i>Blog <span class="badge">v1.1</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-blog-2.html"><i class="fa fa-pencil pr-2"></i>Blog 2<span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="index-beauty.html"><i class="fa fa-magic pr-2"></i>Beauty Center <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-gym.html"><i class="fa fa-heartbeat pr-2"></i>Gym <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-resume.html"><i class="fa fa-user pr-2"></i>Resume <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-agency.html"><i class="fa fa-users pr-2"></i>Agency <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-agency-2.html"><i class="fa fa-users pr-2"></i>Agency 2<span class="badge">v2.1</span></a></li>
                                                                                <li ><a href="index-logistics.html"><i class="fa fa-truck pr-2"></i>Logistics <span class="badge">v1.2</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <!-- mega-menu start -->
                                                <li class="nav-item dropdown  mega-menu mega-menu--wide">
                                                    <a href="#" class="nav-link dropdown-toggle" id="second-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                    <ul class="dropdown-menu" aria-labelledby="second-dropdown">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <h4 class="title">Pages</h4>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-about.html"><i class="fa fa-angle-right"></i>About Us 1</a></li>
                                                                                <li ><a href="page-about-2.html"><i class="fa fa-angle-right"></i>About Us 2</a></li>
                                                                                <li ><a href="page-about-3.html"><i class="fa fa-angle-right"></i>About Us 3</a></li>
                                                                                <li ><a href="page-about-4.html"><i class="fa fa-angle-right"></i>About Us 4</a></li>
                                                                                <li ><a href="page-about-me.html"><i class="fa fa-angle-right"></i>About Me</a></li>
                                                                                <li ><a href="page-team.html"><i class="fa fa-angle-right"></i>Our Team - Options 1</a></li>
                                                                                <li ><a href="page-team-2.html"><i class="fa fa-angle-right"></i>Our Team - Options 2</a></li>
                                                                                <li ><a href="page-team-3.html"><i class="fa fa-angle-right"></i>Our Team - Options 3</a></li>
                                                                                <li ><a href="page-coming-soon.html"><i class="fa fa-angle-right"></i>Coming Soon Page</a></li>
                                                                                <li ><a href="page-faq.html"><i class="fa fa-angle-right"></i>FAQ page</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-services.html"><i class="fa fa-angle-right"></i>Services 1</a></li>
                                                                                <li ><a href="page-services-2.html"><i class="fa fa-angle-right"></i>Services 2</a></li>
                                                                                <li ><a href="page-services-3.html"><i class="fa fa-angle-right"></i>Services 3</a></li>
                                                                                <li ><a href="page-contact.html"><i class="fa fa-angle-right"></i>Contact 1</a></li>
                                                                                <li ><a href="page-contact-2.html"><i class="fa fa-angle-right"></i>Contact 2</a></li>
                                                                                <li ><a href="page-contact-3.html"><i class="fa fa-angle-right"></i>Contact 3</a></li>
                                                                                <li ><a href="page-login.html"><i class="fa fa-angle-right"></i>Login 1</a></li>
                                                                                <li ><a href="page-login-2.html"><i class="fa fa-angle-right"></i>Login 2 - Fullsreen</a></li>
                                                                                <li ><a href="page-signup.html"><i class="fa fa-angle-right"></i>Sign Up 1</a></li>
                                                                                <li ><a href="page-signup-2.html"><i class="fa fa-angle-right"></i>Sign Up 2 - Fullsreen</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-404.html"><i class="fa fa-angle-right"></i>404 error</a></li>
                                                                                <li ><a href="page-404-2.html"><i class="fa fa-angle-right"></i>404 error - Fullscreen</a></li>
                                                                                <li ><a href="page-left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
                                                                                <li ><a href="page-right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
                                                                                <li ><a href="page-two-sidebars.html"><i class="fa fa-angle-right"></i>Two Sidebars</a></li>
                                                                                <li ><a href="page-two-sidebars-left.html"><i class="fa fa-angle-right"></i>Two Sidebars Left</a></li>
                                                                                <li ><a href="page-two-sidebars-right.html"><i class="fa fa-angle-right"></i>Two Sidebars Right</a></li>
                                                                                <li ><a href="page-no-sidebars.html"><i class="fa fa-angle-right"></i>No Sidebars</a></li>
                                                                                <li ><a href="page-sitemap.html"><i class="fa fa-angle-right"></i>Sitemap</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-3 hidden-md-down">
                                                                    <h4 class="title">Premium HTML5 Template</h4>
                                                                    <p class="mb-2">The Project is perfectly suitable for corporate, business and company webpages.</p>
                                                                    <img src="{{ asset('vendor/frontend/template/images/section-image-3.png') }}" alt="The Project">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <li class="nav-item dropdown ">
                                                    <a href="#" class="nav-link dropdown-toggle" id="third-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
                                                    <ul class="dropdown-menu" aria-labelledby="third-dropdown">
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Headers <span class="badge">v1.2</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-headers-default.html">Default/Semi-Transparent</a></li>
                                                                <li ><a href="features-headers-default-dark.html">Dark/Semi-Transparent</a></li>
                                                                <li ><a href="features-headers-gradient-dark.html">Gradient Dark <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-headers-gradient-light.html">Gradient Light <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-headers-classic.html">Classic Light</a></li>
                                                                <li ><a href="features-headers-classic-dark.html">Classic Dark</a></li>
                                                                <li ><a href="features-headers-colored.html">Colored/Light</a></li>
                                                                <li ><a href="features-headers-colored-dark.html">Colored/Dark</a></li>
                                                                <li ><a href="features-headers-full-width.html">Full Width</a></li>
                                                                <li ><a href="features-headers-offcanvas-left.html">Offcanvas Left Side</a></li>
                                                                <li ><a href="features-headers-offcanvas-right.html">Offcanvas Right Side</a></li>
                                                                <li ><a href="features-headers-logo-centered.html">Logo Centered</a></li>
                                                                <li ><a href="features-headers-slider-top.html">Slider Top</a></li>
                                                                <li ><a href="features-headers-simple.html">Simple Static</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Menus <span class="badge">v2.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-headers-default.html">Default/On Hover Menu</a></li>
                                                                <li ><a href="features-menus-onhover-no-animations.html">On Hover Menu - No Animations</a></li>
                                                                <li ><a href="features-menus-onclick.html">On Click Menu - With Animations</a></li>
                                                                <li ><a href="features-menus-onclick-no-animations.html">On Click Menu - No Animations</a></li>
                                                                <li ><a href="features-menus-style-2.html">Menu Style 2 <span class="badge">v2.1</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Footers <span class="badge">v2.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-footers-default.html#footer">Default</a></li>
                                                                <li ><a href="features-footers-contact-form.html#footer">Contact Form</a></li>
                                                                <li ><a href="features-footers-contact-form-2.html#footer">Contact Form 2 <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-footers-contact-form-3.html#footer">Contact Form 3 <span class="badge">v2.1</span></a></li>
                                                                <li ><a href="features-footers-google-maps.html#footer">Google Maps</a></li>
                                                                <li ><a href="features-footers-subscribe.html#footer">Subscribe Form</a></li>
                                                                <li ><a href="features-footers-minimal.html#footer">Minimal</a></li>
                                                                <li ><a href="features-footers-links.html#footer">Links <span class="badge">v1.1</span></a></li>
                                                                <li ><a href="features-footers-full-width.html#footer">Full Width <span class="badge">v1.2</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Main Sliders <span class="badge">v2.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-sliders-fullscreen.html">Full Screen</a></li>
                                                                <li ><a href="features-sliders-fullscreen-2.html">Full Screen 2 <span class="badge">v2.1</span></a></li>
                                                                <li ><a href="features-sliders-fullwidth.html">Full Width</a></li>
                                                                <li ><a href="features-sliders-fullwidth-big-height.html">Full Width - Big Height</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-light.html">Boxed Width - Light Bg</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-dark.html">Boxed Width - Dark Bg</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-default.html">Boxed Width - Default Bg</a></li>
                                                                <li ><a href="features-sliders-video-background.html">Video Background</a></li>
                                                                <li ><a href="features-sliders-text-rotator.html">Text Rotator</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Email Templates <span class="badge">v1.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a target="_blank" href="email_templates/email_template_blue.html">Blue</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_brown.html">Brown</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_cool_green.html">Cool Green</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_dark_cyan.html">Dark Cyan</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_dark_red.html">Dark Red</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_gold.html">Gold</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_gray.html">Gray</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_green.html">Green</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_light_blue.html">Light Blue</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_orange.html">Orange</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_pink.html">Pink</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_purple.html">Purple</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_red.html">Red</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_vivid_red.html">Vivid Red</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Pricing Tables</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-pricing-tables-1.html">Pricing Tables 1</a></li>
                                                                <li ><a href="features-pricing-tables-2.html">Pricing Tables 2</a></li>
                                                                <li ><a href="features-pricing-tables-3.html">Pricing Tables 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Icons</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-icons-fontawesome.html">Font Awesome</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="features-dark-page.html">Dark Page</a></li>
                                                        <li class="dropdown ">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Typography <span class="badge">v2.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-typography.html">Font Scheme 1</a></li>
                                                                <li ><a href="features-typography-2.html">Font Scheme 2</a></li>
                                                                <li ><a href="features-typography-3.html">Font Scheme 3 <span class="badge">v2.1</span></a></li>
                                                                <li ><a href="features-typography-0.html">Font Scheme - OS Default</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="features-backgrounds.html">Backgrounds</a></li>
                                                        <li ><a href="features-grid.html">Grid</a></li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu start -->
                                                <li class="nav-item dropdown  mega-menu mega-menu--narrow">
                                                    <a href="#" class="nav-link dropdown-toggle" id="fourth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                                                    <ul class="dropdown-menu" aria-labelledby="fourth-dropdown">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="title"><i class="fa fa-magic pr-2"></i> Components</h4>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="components-social-icons.html"><i class="fa fa-share-alt pr-2"></i>Social Icons</a></li>
                                                                                <li ><a href="components-buttons.html"><i class="fa fa-flask pr-2"></i>Buttons</a></li>
                                                                                <li ><a href="components-forms.html"><i class="fa fa-align-justify pr-2"></i>Forms</a></li>
                                                                                <li ><a href="components-tabs-and-pills.html"><i class=" fa fa-list-ul pr-2"></i>Tabs &amp; Pills</a></li>
                                                                                <li ><a href="components-accordions.html"><i class="fa fa-bars pr-2"></i>Accordions</a></li>
                                                                                <li ><a href="components-progress-bars.html"><i class="fa fa-line-chart pr-2"></i>Progress Bars</a></li>
                                                                                <li ><a href="components-call-to-action.html"><i class="fa fa-comments-o pr-2"></i>Call to Action Blocks</a></li>
                                                                                <li ><a href="components-alerts-and-callouts.html"><i class="fa fa-info-circle pr-2"></i>Alerts &amp; Callouts</a></li>
                                                                                <li ><a href="components-content-sliders.html"><i class="fa fa-star pr-2"></i>Content Sliders</a></li>
                                                                                <li ><a href="components-charts.html"><i class="fa fa-pie-chart pr-2"></i>Charts</a></li>
                                                                                <li ><a href="components-page-loaders.html"><i class="fa fa-circle-o-notch fa-spin"></i>Page Loaders <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="components-icon-boxes.html"><i class="fa fa-picture-o pr-2"></i>Icon Boxes</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="components-image-boxes.html"><i class="fa fa-camera pr-2"></i>Image Boxes</a></li>
                                                                                <li ><a href="components-fullwidth-sections.html"><i class="fa fa-code pr-2"></i>Full Width Sections</a></li>
                                                                                <li ><a href="components-animations.html"><i class="fa fa-heart pr-2"></i>Animations</a></li>
                                                                                <li ><a href="components-video-and-audio.html"><i class="fa fa-play pr-2"></i>Video</a></li>
                                                                                <li ><a href="components-lightbox.html"><i class="fa fa-plus pr-2"></i>Lightbox</a></li>
                                                                                <li ><a href="components-counters.html"><i class="fa fa-sort-numeric-desc pr-2"></i>Counters</a></li>
                                                                                <li ><a href="components-modals.html"><i class="fa fa-arrows-alt pr-2"></i>Modals</a></li>
                                                                                <li ><a href="components-tables.html"><i class="fa fa-table pr-2"></i>Tables</a></li>
                                                                                <li ><a href="components-text-rotators.html"><i class="fa fa-rotate-left pr-2"></i>Text Rotators</a></li>
                                                                                <li ><a href="components-announcement-default.html"><i class="fa fa-bullhorn pr-2"></i>Announcements <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="components-separators.html"><i class="fa fa-star pr-2"></i>Separators <span class="badge">v1.3</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <li class="nav-item dropdown ">
                                                    <a href="portfolio-grid-2-3-col.html" class="nav-link dropdown-toggle" id="fifth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                                                    <ul class="dropdown-menu" aria-labelledby="fifth-dropdown">
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 1</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-1-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 2</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-2-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 3 - Dark</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-3-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Fullwidth</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-fullwidth-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-fullwidth-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-fullwidth-4-col.html">4 Column</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio List</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-list-1.html">List - Large Images</a></li>
                                                                <li ><a href="portfolio-list-2.html">List - Small Images</a></li>
                                                                <li ><a href="portfolio-list-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="portfolio-item.html">Single Item 1</a></li>
                                                        <li ><a href="portfolio-item-2.html">Single Item 2</a></li>
                                                        <li ><a href="portfolio-item-3.html">Single Item 3</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item dropdown ">
                                                    <a href="index-shop.html" class="nav-link dropdown-toggle" id="sixth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                                    <ul class="dropdown-menu" aria-labelledby="sixth-dropdown">
                                                        <li ><a href="index-shop.html">Shop Home 1</a></li>
                                                        <li ><a href="index-shop-2.html">Shop Home 2</a></li>
                                                        <li ><a href="shop-listing-4col.html">Grid - 4 Columns</a></li>
                                                        <li ><a href="shop-listing-3col.html">Grid - 3 Columns</a></li>
                                                        <li ><a href="shop-listing-2col.html">Grid - 2 Columns</a></li>
                                                        <li ><a href="shop-listing-sidebar.html">Grid - With Sidebar</a></li>
                                                        <li ><a href="shop-listing-list.html">List</a></li>
                                                        <li ><a href="shop-product.html">Product Page</a></li>
                                                        <li ><a href="shop-product-2.html">Product Page 2 <span class="badge">v1.3</span></a></li>
                                                        <li ><a href="shop-cart.html">Shopping Cart</a></li>
                                                        <li ><a href="shop-checkout.html">Checkout Page - Step 1</a></li>
                                                        <li ><a href="shop-checkout-payment.html">Checkout Page - Step 2</a></li>
                                                        <li ><a href="shop-checkout-review.html">Checkout Page - Step 3</a></li>
                                                        <li ><a href="shop-invoice.html">Invoice</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item dropdown ">
                                                    <a href="blog-large-image-right-sidebar.html" class="nav-link dropdown-toggle" id="seventh-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                                    <ul class="dropdown-menu" aria-labelledby="seventh-dropdown">
                                                        <li class="active"><a href="index-blog.html">Blog Home <span class="badge">v1.1</span></a></li>
                                                        <li ><a href="index-blog-2.html">Blog Home 2 <span class="badge">v1.3</span></a></li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Large Image</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-large-image-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-large-image-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-large-image-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Medium Image</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-medium-image-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-medium-image-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-medium-image-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Masonry</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-masonry-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="blog-timeline.html">Timeline</a></li>
                                                        <li ><a href="blog-post.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- main-menu end -->
                                        </div>
                                    </nav>
                                </div>
                                <!-- main-navigation end -->
                            </div>
                            <!-- header-second end -->
                        </div>

                    </div>
                </div>

            </header>
            <!-- header end -->
        </div>
        <!-- header-container end -->
        <!-- banner start -->
        <!-- ================ -->
        <div class="light-gray-bg banner pv-40">
            <div class="container clearfix">

                <!-- slideshow start -->
                <!-- ================ -->
                <div class="slideshow">

                    <!-- slider revolution start -->
                    <!-- ================ -->
                    <div class="slider-revolution-5-container">
                        <div id="slider-banner-boxedwidth" class="slider-banner-boxedwidth rev_slider" data-version="5.0">
                            <ul class="slides">
                                <!-- slide 1 start -->
                                <!-- ================ -->
                                <li data-transition="crossfade" data-slotamount="default" data-masterspeed="default" data-title="Premium HTML5 Template">

                                    <!-- main image -->
                                    <img src="{{ asset('vendor/frontend/template/images/blog-slide-1.jpg') }}" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                         data-x="center"
                                         data-y="center"
                                         data-start="0"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                         data-transform_out="o:0;s:600;"
                                         data-width="5000"
                                         data-height="450">
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption large_white"
                                         data-x="left"
                                         data-y="110"
                                         data-start="500"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Premium HTML5 Template
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption large_white tp-resizeme hidden-sm-down"
                                         data-x="left"
                                         data-y="175"
                                         data-start="750"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                        <div class="separator-2 light"></div>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption medium_white hidden-sm-down"
                                         data-x="left"
                                         data-y="190"
                                         data-start="750"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption small_white hidden-sm-down"
                                         data-x="left"
                                         data-y="310"
                                         data-start="1000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#" class="btn btn-default btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>

                                </li>
                                <!-- slide 1 end -->

                                <!-- slide 2 start -->
                                <!-- ================ -->
                                <li data-transition="crossfade" data-slotamount="default" data-masterspeed="default" data-title="Clean and Simple Design">

                                    <!-- main image -->
                                    <img src="{{ asset('vendor/frontend/template/images/blog-slide-2.jpg') }}" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                         data-x="center"
                                         data-y="center"
                                         data-start="0"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                         data-transform_out="o:0;s:600;"
                                         data-width="5000"
                                         data-height="450">
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption large_white"
                                         data-x="left"
                                         data-y="110"
                                         data-start="500"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Clean and Simple Design
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption large_white tp-resizeme hidden-sm-down"
                                         data-x="left"
                                         data-y="175"
                                         data-start="750"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                        <div class="separator-2 light"></div>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption medium_white hidden-sm-down"
                                         data-x="left"
                                         data-y="190"
                                         data-start="750"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption small_white hidden-sm-down"
                                         data-x="left"
                                         data-y="310"
                                         data-start="1000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#" class="btn btn-default btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>

                                </li>
                                <!-- slide 2 end -->
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!-- slider revolution end -->

                </div>
                <!-- slideshow end -->

            </div>
        </div>
        <!-- banner end -->

        <div id="page-start"></div>

        <!-- main-container start -->
        <!-- ================ -->
        <section class="main-container">

            <div class="container">
                <div class="row">

                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-lg-8">

                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title">Home Blog</h1>
                        <div class="separator-2"></div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <!-- page-title end -->

                        <!-- blogpost start -->
                        <article class="blogpost">
                            <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators bottom margin-clear">
                                    <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-blog-post" data-slide-to="1"></li>
                                    <li data-target="#carousel-blog-post" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="overlay-container">
                                            <img src="{{ asset('vendor/frontend/template/images/blog-1.jpg') }}" alt="">
                                            <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('vendor/frontend/template/images/blog-3.jpg') }}" alt="">
                                            <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('vendor/frontend/template/images/blog-4.jpg') }}" alt="">
                                            <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <header>
                                <h2><a href="blog-post.html">Blogpost with slider</a></h2>
                                <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="day">12</span>
                      <span class="month">May 2017</span>
                    </span>
                                    <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">Lorem</a></span>
                                    <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span>
                                </div>
                            </header>
                            <div class="blogpost-content">
                                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                            </div>
                            <footer class="clearfix">
                                <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
                                <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="#">Read More</a></div>
                            </footer>
                        </article>
                        <!-- blogpost end -->

                        <!-- blogpost start -->
                        <article class="blogpost">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/page-about-2.jpg') }}" alt="">
                                <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <header>
                                <h2><a href="blog-post.html">Excepteur sint occaecat cupidatat non</a></h2>
                                <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="day">11</span>
                      <span class="month">May 2017</span>
                    </span>
                                    <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">Lorem</a></span>
                                    <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span>
                                </div>
                            </header>
                            <div class="blogpost-content">
                                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                            </div>
                            <footer class="clearfix">
                                <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
                                <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="#">Read More</a></div>
                            </footer>
                        </article>
                        <!-- blogpost end -->

                        <!-- blogpost start -->
                        <article class="blogpost">

                            <header>
                                <h2><a href="blog-post.html">Lorem upsoum dolor is</a></h2>
                                <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="day">10</span>
                      <span class="month">May 2017</span>
                    </span>
                                    <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">Lorem</a></span>
                                    <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span>
                                </div>
                            </header>
                            <div class="blogpost-content">
                                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                            </div>
                            <footer class="clearfix">
                                <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
                                <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="#">Read More</a></div>
                            </footer>
                        </article>
                        <!-- blogpost end -->

                        <!-- blogpost start -->
                        <article class="blogpost">
                            <header>
                                <h2><a href="blog-post.html">Text Post</a></h2>
                                <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="day">09</span>
                      <span class="month">May 2017</span>
                    </span>
                                    <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">Lorem</a></span>
                                    <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span>
                                </div>
                            </header>
                            <div class="blogpost-content">
                                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                            </div>
                            <footer class="clearfix">
                                <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
                                <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="#">Read More</a></div>
                            </footer>
                        </article>
                        <!-- blogpost end -->

                        <!-- blogpost start -->
                        <article class="blogpost">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/blog-2.jpg') }}" alt="">
                                <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                            </div>
                            <header>
                                <h2><a href="blog-post.html">Cute Robot</a></h2>
                                <div class="post-info">
                    <span class="post-date">
                      <i class="fa fa-calendar-o pr-1"></i>
                      <span class="day">08</span>
                      <span class="month">May 2017</span>
                    </span>
                                    <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">Lorem</a></span>
                                    <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span>
                                </div>
                            </header>
                            <div class="blogpost-content">
                                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                            </div>
                            <footer class="clearfix">
                                <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
                                <div class="link pull-right"><i class="fa fa-link pr-1"></i><a href="#">Read More</a></div>
                            </footer>
                        </article>
                        <!-- blogpost end -->

                        <!-- pagination start -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i aria-hidden="true" class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- pagination end -->
                    </div>
                    <!-- main end -->

                    <!-- sidebar start -->
                    <!-- ================ -->
                    <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                        <div class="sidebar">
                            <div class="block clearfix">
                                <h3 class="title">Sidebar menu</h3>
                                <div class="separator-2"></div>
                                <nav>
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="blog-large-image-right-sidebar.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="portfolio-grid-2-3-col.html">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
                                        <li class="nav-item"><a class="nav-link" href="page-contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Featured Project</h3>
                                <div class="separator-2"></div>
                                <div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
                                        <li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="image-box hc-shadow bordered text-center mb-20">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('vendor/frontend/template/images/portfolio-4.jpg') }}" alt="">
                                                    <a href="portfolio-item.html" class="overlay-link">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="image-box hc-shadow bordered text-center mb-20">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('vendor/frontend/template/images/portfolio-1-2.jpg') }}" alt="">
                                                    <a href="portfolio-item.html" class="overlay-link">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="image-box hc-shadow bordered text-center mb-20">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('vendor/frontend/template/images/portfolio-1-3.jpg') }}" alt="">
                                                    <a href="portfolio-item.html" class="overlay-link">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Latest tweets</h3>
                                <div class="separator-2"></div>
                                <ul class="tweets">
                                    <li>
                                        <i class="fa fa-twitter"></i>
                                        <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://b.sa/adsfasfasd</a>.</p><span>16 hours ago</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-twitter"></i>
                                        <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://b.sa/adsfasfasd</a>.</p><span>16 hours ago</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Popular Tags</h3>
                                <div class="separator-2"></div>
                                <div class="tags-cloud">
                                    <div class="tag">
                                        <a href="#">energy</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">business</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">food</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">fashion</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">finance</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">culture</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">health</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">sports</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">life style</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">books</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">lorem</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">ipsum</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">responsive</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">style</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">finance</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">sports</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">technology</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">support</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">life style</a>
                                    </div>
                                    <div class="tag">
                                        <a href="#">books</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Testimonial</h3>
                                <div class="separator-2"></div>
                                <blockquote class="margin-clear">
                                    <p>Reprehenderit, nihil magni odit ducimus, ab animi eaque vel excepturi, incidunt.</p>
                                    <footer><cite title="Source Title">Someone Famous </cite></footer>
                                </blockquote>
                                <blockquote class="margin-clear">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                                    <footer><cite title="Source Title">Famous Person </cite></footer>
                                </blockquote>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Latest News</h3>
                                <div class="separator-2"></div>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-1.jpg') }}" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2017</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-2.jpg') }}" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2017</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-3.jpg') }}" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-4.jpg') }}" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
                                    </div>
                                </div>
                                <div class="text-right space-top">
                                    <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                                </div>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Text Sample</h3>
                                <div class="separator-2"></div>
                                <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
                            </div>
                            <div class="block clearfix">
                                <form role="search">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <i class="fa fa-search form-control-feedback"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </aside>
                    <!-- sidebar end -->

                </div>
            </div>
        </section>
        <!-- main-container end -->

        <!-- footer top start -->
        <!-- ================ -->
        <div class="dark-bg default-hovered footer-top animated-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action text-center">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="mt-4">Powerful Bootstrap Template</h2>
                                    <h2 class="mt-4">Waste no more time</h2>
                                </div>
                                <div class="col-md-4">
                                    <p class="mt-3"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top end -->

        <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
        <!-- ================ -->
        <footer id="footer" class="clearfix ">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-content">
                                    <div class="logo-footer"><img id="logo-footer" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt=""></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html">Learn More<i class="fa fa-long-arrow-right pl-1"></i></a></p>
                                    <div class="separator-2"></div>
                                    <nav>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                            <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-content">
                                    <h2 class="title">Latest From Blog</h2>
                                    <div class="separator-2"></div>
                                    <div class="media margin-clear">
                                        <div class="d-flex pr-2">
                                            <div class="overlay-container">
                                                <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-1.jpg') }}" alt="blog-thumb">
                                                <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                            <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 23, 2017</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media margin-clear">
                                        <div class="d-flex pr-2">
                                            <div class="overlay-container">
                                                <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-2.jpg') }}" alt="blog-thumb">
                                                <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                            <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 22, 2017</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media margin-clear">
                                        <div class="d-flex pr-2">
                                            <div class="overlay-container">
                                                <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-3.jpg') }}" alt="blog-thumb">
                                                <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                            <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media margin-clear">
                                        <div class="d-flex pr-2">
                                            <div class="overlay-container">
                                                <img class="media-object" src="{{ asset('vendor/frontend/template/images/blog-thumb-4.jpg') }}" alt="blog-thumb">
                                                <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                            <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017</p>
                                        </div>
                                    </div>
                                    <div class="text-right space-top">
                                        <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-content">
                                    <h2 class="title">Portfolio Gallery</h2>
                                    <div class="separator-2"></div>
                                    <div class="row grid-space-10">
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-1.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-2.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-3.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-4.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-5.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-6">
                                            <div class="overlay-container mb-10">
                                                <img src="{{ asset('vendor/frontend/template/images/gallery-6.jpg') }}" alt="">
                                                <a href="portfolio-item.html" class="overlay-link small">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right space-top">
                                        <a href="portfolio-grid-2-3-col.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-content">
                                    <h2 class="title">Find Us</h2>
                                    <div class="separator-2"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
                                    <ul class="social-links circle animated-effect-1">
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                    </ul>
                                    <div class="separator-2"></div>
                                    <ul class="list-icons">
                                        <li><i class="fa fa-map-marker pr-2 text-default"></i> Street Address No, City</li>
                                        <li><i class="fa fa-phone pr-2 text-default"></i> +00 1234567890</li>
                                        <li><a href="#"><i class="fa fa-envelope-o pr-2"></i>example@your_domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .footer end -->

            <!-- .subfooter start -->
            <!-- ================ -->
            <div class="subfooter">
                <div class="container">
                    <div class="subfooter-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">Copyright © 2019. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .subfooter end -->

        </footer>
        <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
    <!-- Jquery and Bootstap core js files -->
    <script src="{{ asset('vendor/frontend/template/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery Revolution Slider  -->
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Isotope javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Magnific Popup javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Appear javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/waypoints/sticky.min.js') }}"></script>

    <!-- Count To javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/countTo/jquery.countTo.js') }}"></script>

    <!-- Slick carousel javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/slick/slick.min.js') }}"></script>

    <!-- Pace javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/pace/pace.min.js') }}"></script>

    <!-- Initialization of Plugins -->
    <script src="{{ asset('vendor/frontend/template/js/template.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('vendor/frontend/template/js/custom.js') }}"></script>

    @livewireScripts

    @yield('scripts')
    @stack('scripts')
</body>
</html>