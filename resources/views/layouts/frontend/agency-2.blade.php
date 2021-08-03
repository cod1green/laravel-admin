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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
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
    <!-- Used font for body: Open Sans -->
    <!-- Used font for headings: Lato -->
    <!-- Use css/rtl_typography-scheme-3.css for RTL version -->
    <link href="{{ asset('vendor/frontend/template/css/typography-scheme-3.css') }}" rel="stylesheet">

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
            <header class="header fixed fixed-desktop clearfix white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto hidden-md-down pl-3">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="index.html">
                                        <img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project">
                                    </a>
                                </div>

                                <!-- name-and-slogan -->
                                <div class="site-slogan">
                                    Multipurpose HTML5 Template
                                </div>

                            </div>
                            <!-- header-first end -->

                        </div>
                        <div class="col-lg-8 ml-lg-auto">

                            <!-- header-second start -->
                            <!-- ================ -->
                            <div class="header-second clearfix">

                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- ================ -->
                                <div class="main-navigation main-navigation--mega-menu main-navigation--style-2  animated">
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                        <div class="navbar-brand clearfix hidden-lg-up">

                                            <!-- logo -->
                                            <div id="logo-mobile" class="logo">
                                                <a href="index.html">
                                                    <img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project">
                                                </a>
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
                                                                                <li class="active"><a href="index-agency-2.html"><i class="fa fa-users pr-2"></i>Agency 2<span class="badge">v2.1</span></a></li>
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
                        <div class="col-auto ml-2 hidden-md-down">
                            <!-- header dropdown buttons -->
                            <div class="header-dropdown-buttons">
                                <a href="page-contact.html" class="btn btn-sm radius-50 btn-default">Store <i class="fa fa-shopping-cart pl-1"></i></a>
                            </div>
                            <!-- header dropdown buttons end -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->
        </div>
        <!-- header-container end -->
        <!-- banner start -->
        <!-- ================ -->
        <div class="banner clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">

                <!-- slider revolution start -->
                <!-- ================ -->
                <div class="slider-revolution-5-container" data-source="gallery">
                    <div id="slider-banner-carousel-2" class="rev_slider slider-banner-carousel-2" data-version="5.4.1">
                        <ul class="slides">

                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li data-transition="fade" data-slotamount="default" data-masterspeed="300" data-thumb="{{ asset('vendor/frontend/template/images/agency-2-slide-1.jpg') }}" data-saveperformance="off" data-title="We Are Great" data-param1="Who We Are?">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/agency-background-img-1.jpg') }}" alt="" data-lazyload="{{ asset('vendor/frontend/template/images/agency-2-slide-1.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000"
                                     style="opacity: 0.6;">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme caption-gradient"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['300','300','300','250']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <a class="tp-caption tp-resizeme link-light"
                                   href="#"
                                   target="_self"
                                   data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                   data-y="['bottom','bottom','center','top']" data-voffset="['140','140','0','40']"
                                   data-fontsize="['40','40','30','30']"
                                   data-lineheight="['40','40','25','20']"
                                   data-width="['580','480','340','320']"
                                   data-height="none"
                                   data-whitespace="normal"
                                   data-type="text"
                                   data-actions=''
                                   data-basealign="slide"
                                   data-responsive_offset="on"
                                   data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                   data-textAlign="['left','left','left','left']"
                                   data-paddingtop="[0,0,0,0]"
                                   data-paddingright="[0,0,0,0]"
                                   data-paddingbottom="[0,0,0,0]"
                                   data-paddingleft="[0,0,0,0]"
                                   style="z-index: 6;">
                                    Your great title
                                </a>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme lead text-white"
                                     data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                     data-y="['bottom','bottom','center','top']" data-voffset="['35','35','110','80']"
                                     data-width="['580','480','340','320']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eos et nostrum sed, eaque, neque delectus accusamus, ipsum porro eligendi.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-svg-layer tp-fullscreen-icon"
                                     data-x="['left','left','left','left']" data-hoffset="['721','620','510','367']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['29','29','9','16']"
                                     data-width="50"
                                     data-height="50"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','off','off']"
                                     data-type="svg"
                                     data-actions='[{"event":"click","action":"togglefullscreen","delay":""}]'
                                     data-svg_src="{{ asset('vendor/frontend/template/images/ic_fullscreen_24px.svg') }}"
                                     data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 8;">
                                    <div class="rs-untoggled-content"></div>
                                    <div class="rs-toggled-content"></div>
                                </div>
                            </li>
                            <!-- slide 1 end -->

                            <!-- slide 2 start -->
                            <!-- ================ -->
                            <li data-transition="fade" data-slotamount="default" data-masterspeed="300" data-thumb="{{ asset('vendor/frontend/template/images/agency-2-slide-2.jpg') }}" data-saveperformance="off" data-title="Why Work with us?" data-param1="The Project">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/agency-2-slide-2.jpg') }}" alt="" data-lazyload="{{ asset('vendor/frontend/template/images/agency-background-img-2.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000"
                                     style="opacity: 0.6;">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme caption-gradient"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['300','300','300','250']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <a class="tp-caption tp-resizeme link-light"
                                   href="#"
                                   target="_self"
                                   data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                   data-y="['bottom','bottom','center','top']" data-voffset="['140','140','0','40']"
                                   data-fontsize="['40','40','30','30']"
                                   data-lineheight="['40','40','25','20']"
                                   data-width="['580','480','340','320']"
                                   data-height="none"
                                   data-whitespace="normal"
                                   data-type="text"
                                   data-actions=''
                                   data-basealign="slide"
                                   data-responsive_offset="on"
                                   data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                   data-textAlign="['left','left','left','left']"
                                   data-paddingtop="[0,0,0,0]"
                                   data-paddingright="[0,0,0,0]"
                                   data-paddingbottom="[0,0,0,0]"
                                   data-paddingleft="[0,0,0,0]"
                                   style="z-index: 6;">
                                    Why Work with us?
                                </a>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme lead text-white"
                                     data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                     data-y="['bottom','bottom','center','top']" data-voffset="['35','35','110','80']"
                                     data-width="['580','480','340','320']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eos et nostrum sed, eaque, neque delectus accusamus, ipsum porro eligendi.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-svg-layer tp-fullscreen-icon"
                                     data-x="['left','left','left','left']" data-hoffset="['721','620','510','367']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['29','29','9','16']"
                                     data-width="50"
                                     data-height="50"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','off','off']"
                                     data-type="svg"
                                     data-actions='[{"event":"click","action":"togglefullscreen","delay":""}]'
                                     data-svg_src="{{ asset('vendor/frontend/template/images/ic_fullscreen_24px.svg') }}"
                                     data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 9;">
                                    <div class="rs-untoggled-content"></div>
                                    <div class="rs-toggled-content"></div>
                                </div>
                            </li>
                            <!-- slide 2 end -->

                            <!-- slide 3 start -->
                            <!-- ================ -->
                            <li data-transition="fade" data-slotamount="default" data-masterspeed="300" data-thumb="{{ asset('vendor/frontend/template/images/agency-2-slide-3.jpg') }}" data-saveperformance="off" data-title="Let's work together" data-param1="The Project">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/agency-2-slide-3.jpg') }}" alt="" data-lazyload="{{ asset('vendor/frontend/template/images/agency-background-img-3.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000"
                                     style="opacity: 0.6;">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme caption-gradient"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['300','300','300','250']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <a class="tp-caption tp-resizeme link-light"
                                   href="#"
                                   target="_self"
                                   data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                   data-y="['bottom','bottom','center','top']" data-voffset="['140','140','0','40']"
                                   data-fontsize="['40','40','30','30']"
                                   data-lineheight="['40','40','25','20']"
                                   data-width="['580','480','340','320']"
                                   data-height="none"
                                   data-whitespace="normal"
                                   data-type="text"
                                   data-actions=''
                                   data-basealign="slide"
                                   data-responsive_offset="on"
                                   data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                   data-textAlign="['left','left','left','left']"
                                   data-paddingtop="[0,0,0,0]"
                                   data-paddingright="[0,0,0,0]"
                                   data-paddingbottom="[0,0,0,0]"
                                   data-paddingleft="[0,0,0,0]"
                                   style="z-index: 6;">
                                    Let's work together
                                </a>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme lead text-white"
                                     data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                     data-y="['bottom','bottom','center','top']" data-voffset="['35','35','110','80']"
                                     data-width="['580','480','340','320']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eos et nostrum sed, eaque, neque delectus accusamus, ipsum porro eligendi.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-svg-layer tp-fullscreen-icon"
                                     data-x="['left','left','left','left']" data-hoffset="['721','620','510','367']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['29','29','9','16']"
                                     data-width="50"
                                     data-height="50"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','off','off']"
                                     data-type="svg"
                                     data-actions='[{"event":"click","action":"togglefullscreen","delay":""}]'
                                     data-svg_src="{{ asset('vendor/frontend/template/images/ic_fullscreen_24px.svg') }}"
                                     data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 8;">
                                    <div class="rs-untoggled-content"></div>
                                    <div class="rs-toggled-content"></div>
                                </div>
                            </li>
                            <!-- slide 3 end -->

                            <!-- slide 4 start -->
                            <!-- ================ -->
                            <li data-transition="fade" data-slotamount="default" data-masterspeed="300" data-thumb="{{ asset('vendor/frontend/template/images/agency-2-slide-4.jpg') }}" data-saveperformance="off" data-title="We love what we do" data-param1="The Project">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/agency-2-slide-4.jpg') }}" alt="" data-lazyload="{{ asset('vendor/frontend/template/images/agency-background-img-4.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000"
                                     style="opacity: 0.6;">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme caption-gradient"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['300','300','300','250']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <a class="tp-caption tp-resizeme link-light"
                                   href="#"
                                   target="_self"
                                   data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                   data-y="['bottom','bottom','center','top']" data-voffset="['140','140','0','40']"
                                   data-fontsize="['40','40','30','30']"
                                   data-lineheight="['40','40','25','20']"
                                   data-width="['580','480','340','320']"
                                   data-height="none"
                                   data-whitespace="normal"
                                   data-type="text"
                                   data-actions=''
                                   data-basealign="slide"
                                   data-responsive_offset="on"
                                   data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                   data-textAlign="['left','left','left','left']"
                                   data-paddingtop="[0,0,0,0]"
                                   data-paddingright="[0,0,0,0]"
                                   data-paddingbottom="[0,0,0,0]"
                                   data-paddingleft="[0,0,0,0]"
                                   style="z-index: 6;">
                                    We love what we do
                                </a>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme lead text-white"
                                     data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                                     data-y="['bottom','bottom','center','top']" data-voffset="['35','35','110','80']"
                                     data-width="['580','480','340','320']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eos et nostrum sed, eaque, neque delectus accusamus, ipsum porro eligendi.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-svg-layer tp-fullscreen-icon"
                                     data-x="['left','left','left','left']" data-hoffset="['721','620','510','367']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['29','29','9','16']"
                                     data-width="50"
                                     data-height="50"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','off','off']"
                                     data-type="svg"
                                     data-actions='[{"event":"click","action":"togglefullscreen","delay":""}]'
                                     data-svg_src="{{ asset('vendor/frontend/template/images/ic_fullscreen_24px.svg') }}"
                                     data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 8;">
                                    <div class="rs-untoggled-content"></div>
                                    <div class="rs-toggled-content"></div>
                                </div>
                            </li>
                            <!-- slide 4 end -->

                        </ul>
                        <div class="tp-bannertimer" style="height: 8px; background: rgba(255,255,255,0.25);"></div>
                    </div>
                </div>
                <!-- slider revolution end -->

            </div>
            <!-- slideshow end -->

        </div>
        <!-- banner end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="clearfix py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3 font-weight-bold mb-4 text-center">We are the Agency</h1>
                        <div class="row">
                            <div class="col-8 text-center ml-auto mr-auto">
                                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cumque corporis doloribus accusantium eligendi, doloremque velit repellat quo nulla inventore. Odio itaque, quam. Eaque dolorum, provident voluptatibus, facilis.</p>
                                <a href="#" class="btn radius-50 btn-default-transparent btn-xl btn-animated">Learn More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="display-5 font-weight-bold mb-5">Latest Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-1.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-2.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-3.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-4.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-5.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="image-box image-box--shadowed white-bg style-2 mb-4">
                            <div class="overlay-container">
                                <img src="{{ asset('vendor/frontend/template/images/agency-portfolio-6.jpg') }}" alt="">
                                <a href="#" class="overlay-link"></a>
                            </div>
                            <div class="body">
                                <h5 class="font-weight-bold my-2">Project Title</h5>
                                <p class="small">December 10, 2017</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <ul class="social-links small circle">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn radius-50 btn-gray-transparent btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="clearfix py-5 default-translucent-bg" style="background: url('{{ asset('vendor/frontend/template/images/agency-background-img-5.jpg') }}') center center no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="display-4 font-weight-bold mb-4">Let's Work Together!</h2>
                        <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cumque corporis doloribus accusantium eligendi, doloremque velit repellat quo nulla inventore. Odio itaque, quam. Eaque dolorum, provident voluptatibus, facilis.</p>
                        <a href="contact.html" class="btn radius-50 btn-default btn-xl">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="clearfix light-gray-bg border-0 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="display-4 font-weight-bold mb-4">Our Clients</h2>
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="slick-carousel content-slider">
                                    <div class="testimonial">
                                        <h3 class="mb-3 mt-0">Just Perfect!</h3>
                                        <div class="testimonial-body">
                                            <p class="lead font-italic">Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar.</p>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">By Company</div>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <h3 class="mb-3 mt-0">Amazing!</h3>
                                        <div class="testimonial-body">
                                            <p class="lead font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci!</p>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">By Company</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="clients-container">
                                    <div class="clients">
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-3.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-5.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-6.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-7.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-8.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="client-image">
                                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-2.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="pv-20 padding-bottom-clear clearfix my-5">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="display-4 font-weight-bold text-center">Choose Your Plan</h2>
                    </div>
                </div>
                <!-- pricing tables start -->
                <!-- ================ -->
                <div class="pricing-tables circle-head hc-element-invisible" data-animation-effect="fadeInUpSmall"  data-effect-delay="0">
                    <div class="row grid-space-10">
                        <div class="col-md-4">
                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="plan hc-shadow light-gray-bg bordered">
                                <div class="header dark-bg">
                                    <h3>Basic</h3>
                                    <div class="price"><span>Free</span></div>
                                </div>
                                <ul class="text-large">
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15GB Storage" data-trigger="hover">Pricing table item</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-dark radius-50 btn-animated btn-lg">Subscribe <i class="fa fa-user"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->
                        </div>
                        <div class="col-md-4">
                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="plan hc-shadow light-gray-bg bordered best-value">
                                <div class="header default-bg">
                                    <h3>Premium</h3>
                                    <div class="price"><span>$19.99</span>/m.</div>
                                </div>
                                <ul class="text-large">
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Pricing table item">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-default btn-animated btn-lg radius-50">Add to cart <i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->
                        </div>
                        <div class="col-md-4">
                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="plan hc-shadow light-gray-bg bordered">
                                <div class="header dark-bg">
                                    <h3>Pro</h3>
                                    <div class="price"><span>$24.99</span>/m.</div>
                                </div>
                                <ul class="text-large">
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Pricing table item">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-dark btn-animated btn-lg radius-50">Add to cart <i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->
                        </div>
                    </div>
                </div>
                <!-- pricing tables end -->
            </div>
        </section>
        <!-- section end -->

        <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
        <!-- ================ -->
        <footer id="footer" class="clearfix">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer default-bg text-white">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-content">
                                    <h2 class="display-4 text-center font-weight-bold">Contact Us</h2>
                                    <form class="mt-3 form-style-2 text-center">
                                        <div class="form-group has-feedback mb-10">
                                            <label class="sr-only" for="name2">Name</label>
                                            <input type="text" class="form-control" id="name2" placeholder="Name" required>
                                            <i class="fa fa-user form-control-feedback"></i>
                                        </div>
                                        <div class="form-group has-feedback mb-10">
                                            <label class="sr-only" for="email2">Email address</label>
                                            <input type="email" class="form-control" id="email2" placeholder="Enter email" required>
                                            <i class="fa fa-envelope form-control-feedback"></i>
                                        </div>
                                        <div class="form-group has-feedback mb-10">
                                            <label class="sr-only" for="message2">Message</label>
                                            <textarea class="form-control" rows="4" id="message2" placeholder="Message" required></textarea>
                                            <i class="fa fa-pencil form-control-feedback"></i>
                                        </div>
                                        <input type="submit" value="Send Message" class="mt-3 submit-button radius-50 btn btn-default btn-lg">
                                    </form>
                                    <ul class="social-links large circle text-center mt-5 mb-3">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-xing"></i></a></li>
                                    </ul>
                                    <p class="text-center">Copyright © 2019. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .footer end -->

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
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.navigation.min.js') }}"></script>

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

    <!-- Initialization of Plugins -->
    <script src="{{ asset('vendor/frontend/template/js/template.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('vendor/frontend/template/js/custom.js') }}"></script>

    @livewireScripts

    @yield('scripts')
    @stack('scripts')
</body>
</html>
