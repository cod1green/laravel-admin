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
    <link href="{{ asset('vendor/frontend/template/css/skins/pink.css') }}" rel="stylesheet">

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
<body class="front-page ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
        <!-- header-container start -->
        <div class="header-container">
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
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <h2 class="text-center logo-font margin-clear"><a href="index.html" class="text-muted">William<span class="text-default"><i class="pl-10 pr-10 fa fa-heart"></i></span>Selen</a></h2>
                                </div>

                                <!-- name-and-slogan -->
                                <div class="site-slogan text-center">
                                    Invite You to Celebrate at their Wedding
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
                                                <a href="index.html"><img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_pink.png') }}" alt="The Project"></a>
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
                                                                                <li class="active"><a href="index-wedding.html"><i class="fa fa-heart pr-2"></i>Wedding</a></li>
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
                                                                                <li ><a href="index-blog.html"><i class="fa fa-pencil pr-2"></i>Blog <span class="badge">v1.1</span></a></li>
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
                                                        <li ><a href="index-blog.html">Blog Home <span class="badge">v1.1</span></a></li>
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
        <div class="pv-40 dark-translucent-bg" style="background-image: url('{{ asset('vendor/frontend/template/images/wedding-banner.jpg') }}');background-position: 50% 32%;">
            <div class="container pv-40">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center pv-40">
                        <div class="hc-element-invisible pv-40" data-animation-effect="fadeIn" data-effect-delay="100">
                            <h1 class="page-title text-center logo-font">Incididunt ut labore et.</h1>
                            <div class="separator"></div>
                            <h3 class="text-center"><em>July 19th 2018, Lorem, Ipsum</em></h3>
                            <!-- countdown start -->
                            <div class="countdown clearfix"></div>
                            <!-- countdown end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <div id="page-start"></div>

        <!-- section start -->
        <!-- ================ -->
        <section class="light-gray-bg pv-30 clearfix">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mt-4 logo-font text-muted">Excepteur &amp; <span class="text-default">Cupidatat</span></h2>
                        <div class="separator"></div>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="full-width-section">
            <div class="full-image-container default-bg">
                <img class="to-right-block" src="{{ asset('vendor/frontend/template/images/wedding-bride.jpg') }}" alt="">
                <div class="full-image-overlay text-center">
                    <h3 class="mt-4">Laboris nisi ut <i class="fa fa-heart"></i></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ab provident consequuntur, dolores perferendis! Quae asperiores rerum aperiam doloribus nostrum. Dolorem sint a fuga pariatur. Non, voluptatibus culpa ullam animi.</p>
                    <ul class="social-links circle animated-effect-1 text-center">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="full-text-container default-bg">
                <h2 class="mt-4 logo-font">Dolor Sit Natus</h2>
                <div class="separator-2 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-3 hidden-lg-down"></div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="full-width-section">
            <div class="full-text-container left light-gray-bg border-clear text-right">
                <h2 class="logo-font mt-4">Sint Occaeca</h2>
                <div class="separator-3 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-2 hidden-lg-down"></div>
            </div>
            <div class="full-image-container light-gray-bg border-clear">
                <img src="{{ asset('vendor/frontend/template/images/wedding-groom.jpg') }}" alt="">
                <div class="full-image-overlay text-center">
                    <h3 class="mt-4">Suscipit <i class="fa fa-heart"></i></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ab provident consequuntur, dolores perferendis! Quae asperiores rerum aperiam doloribus nostrum. Dolorem sint a fuga pariatur. Non, voluptatibus culpa ullam animi.</p>
                    <ul class="social-links circle animated-effect-1 text-center">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="pv-30 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-muted logo-font mt-4">Photo <span class="text-default">Gallery</span></h2>
                        <div class="separator"></div>
                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- isotope filters start -->
                <div class="filters d-flex justify-content-center">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">All</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter=".the-bride">Perferendis</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter=".wedding">Doloribus</a></li>
                    </ul>
                </div>
                <!-- isotope filters end -->
            </div>
            <div class="isotope-container row grid-space-0">
                <div class="col-md-6 col-lg-3 isotope-item the-bride">
                    <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators top">
                            <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-portfolio" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="image-box text-center">
                                    <div class="overlay-container overlay-visible">
                                        <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-1.jpg') }}" alt="">
                                        <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-1.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <p class="lead margin-clear">Go For A Ride</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-box text-center">
                                    <div class="overlay-container overlay-visible">
                                        <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-1-2.jpg') }}" alt="">
                                        <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-1-2.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <p class="lead margin-clear">Walk On The Beach</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item wedding">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-2.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-2.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Flowers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item wedding">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-3.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-3.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Cake</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item the-bride">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-4.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-4.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Ring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item wedding">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-5.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-5.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Table</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item the-bride">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-6.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-6.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Flowers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item wedding">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-7.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-7.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">Wedding Flowers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 isotope-item the-bride">
                    <div class="image-box text-center">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-gallery-8.jpg') }}" alt="">
                            <a href="{{ asset('vendor/frontend/template/images/wedding-gallery-8.jpg') }}" class="popup-img overlay-link" title="image caption"><i class="fa fa-plus"></i></a>
                            <div class="overlay-bottom hidden-xs">
                                <div class="text">
                                    <p class="lead margin-clear">The Bride</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mt-4 space-top text-default logo-font">Events</h2>
                        <div class="separator"></div>
                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-4">
                        <div class="image-box text-center style-2 mb-20">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-event-1.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                            <div class="body padding-horizontal-clear">
                                <h4 class="logo-font title">In voluptate velit</h4>
                                <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                <p class="lead text-default">July 19th - 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image-box text-center style-2 mb-20">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-event-2.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                            <div class="body padding-horizontal-clear">
                                <h4 class="logo-font title">Excepteur sint</h4>
                                <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                <p class="lead text-default">July 19th - 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image-box text-center style-2 mb-20">
                            <img src="{{ asset('vendor/frontend/template/images/wedding-event-3.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                            <div class="body padding-horizontal-clear">
                                <h4 class="logo-font title">laboris nisi ut</h4>
                                <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                <p class="lead text-default">July 19th - 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-default mt-4 text-center space-top logo-font"><span class="text-muted">The</span> Lorem</h3>
                <div class="separator"></div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Similique dolorum doloremque nihil.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('vendor/frontend/template/images/wedding-place-1.jpg') }}" class="img-thumbnail mb-20" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div id="map-canvas" class="small"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
        <!-- ================ -->
        <footer id="footer" class="clearfix">
            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-content">
                                    <h2 class="title text-default">RSVP</h2>
                                    <div class="separator-2 mt-10"></div>
                                    <p>Fugiat similique corrupti quas natus, suscipit commodi. Vitae doloremque.</p>
                                    <div class="contact-form">
                                        <form class="margin-clear">
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="name">Name*</label>
                                                <input type="text" placeholder="Name" class="form-control" id="name" required>
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="email">Email*</label>
                                                <input type="email" placeholder="Email" class="form-control" id="email" required>
                                                <i class="fa fa-envelope form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="guests">No of Guests*</label>
                                                <input type="text" placeholder="No of Guests" class="form-control" id="guests" required>
                                                <i class="fa fa-users form-control-feedback"></i>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only">Event*</label>
                                                <select class="form-control" id="events">
                                                    <option value="Vows">Exchange of Wedding Vows</option>
                                                    <option value="Wedding">Wedding</option>
                                                    <option value="Party">After Party</option>
                                                </select>
                                            </div>
                                            <input type="submit" value="Send" class="submit-button btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-content">
                                    <h2 class="title text-default">Gifts</h2>
                                    <div class="mt-10 separator-2"></div>
                                    <p>Nulla omnis nemo cupiditate minus, quis, id mollitia. Voluptas ratione cupiditate itaque architecto voluptatem placeat aliquid!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem modi, distinctio, maiores atque blanditiis maxime commodi sit officiis deleniti minus, quod iusto. Autem mollitia veniam, fugiat sit consectetur accusantium voluptatum.</p>
                                    <div class="clients-container">
                                        <div class="clients">
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-1.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-2.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-3.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-4.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-5.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-6.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-7.png') }}" alt=""></a>
                                            </div>
                                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
                                                <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-8.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- Google Maps javascript -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('vendor/frontend/template/js/google.map.config.js') }}"></script>

    <!-- Slick carousel javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/slick/slick.min.js') }}"></script>

    <!-- Count Down javascript -->
    <script src="{{ asset('vendor/frontend/template/plugins/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/js/coming.soon.config.js') }}"></script>

    <!-- Initialization of Plugins -->
    <script src="{{ asset('vendor/frontend/template/js/template.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('vendor/frontend/template/js/custom.js') }}"></script>

    @livewireScripts

    @yield('scripts')
    @stack('scripts')
</body>
</html>
