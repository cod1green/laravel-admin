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
<body class="transparent-header front-page ">

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
            <header class="header fixed fixed-all clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3 hidden-md-down">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="#"><img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project"></a>
                                </div>

                                <!-- name-and-slogan -->
                                <div class="site-slogan">
                                    Multipurpose HTML5 Template
                                </div>

                            </div>
                            <!-- header-first end -->

                        </div>
                        <div class="col-lg-8 col-xl-9">

                            <!-- header-second start -->
                            <!-- ================ -->
                            <div class="header-second clearfix">

                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- ================ -->
                                <div class="main-navigation  animated">
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                        <div class="navbar-brand clearfix hidden-lg-up">

                                            <!-- logo -->
                                            <div id="logo-mobile" class="logo">
                                                <a href="#"><img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project"></a>
                                            </div>

                                            <!-- name-and-slogan -->
                                            <div class="site-slogan">
                                                Multipurpose HTML5 Template
                                            </div>

                                        </div>
                                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                                            <!-- main-menu -->
                                            <ul class="navbar-nav ml-lg-auto">
                                                <li class="nav-item"><a class="nav-link smooth-scroll active" href="#banner">Home</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#footer">Contact</a></li>
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
        <div id="banner" class="banner clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">

                <!-- slider revolution start -->
                <!-- ================ -->
                <div class="slider-revolution-5-container">
                    <div id="slider-banner-fullscreen" class="slider-banner-fullscreen rev_slider" data-version="5.0">
                        <ul class="slides">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li class="text-center" data-transition="crossfade" data-slotamount="default" data-masterspeed="default" data-title="Slide Title">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/slider-fullscreen-slide-1.jpg') }}" alt="slidebg1" data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption xlarge_white"
                                     data-x="center"
                                     data-y="110"
                                     data-start="1000"
                                     data-end="2500"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                     data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                     data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Inspiration
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption xlarge_white"
                                     data-x="center"
                                     data-y="110"
                                     data-start="3100"
                                     data-end="4600"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-50%];o:0;s:600;e:Power4.easeInOut;"
                                     data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                     data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Innovation
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption xlarge_white"
                                     data-x="center"
                                     data-y="110"
                                     data-start="5200"
                                     data-end="6700"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                     data-transform_out="x:0;y:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                     data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Success
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption large_white"
                                     data-x="center"
                                     data-y="110"
                                     data-start="7000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[-100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="logo-font">The <span class="text-default">Project</span></span> <br> Powerful Bootstrap Template
                                </div>


                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption"
                                     data-x="center"
                                     data-y="250"
                                     data-hoffset="-232"
                                     data-start="1000"
                                     data-end="6200"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                     data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle fa fa-lightbulb-o"></i></span>
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption"
                                     data-x="center"
                                     data-y="250"
                                     data-start="3100"
                                     data-end="6200"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                     data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle fa fa-rotate-left"></i></span>
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption"
                                     data-x="center"
                                     data-y="250"
                                     data-hoffset="232"
                                     data-start="5200"
                                     data-end="6200"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                     data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle fa fa-line-chart"></i></span>
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption tp-resizeme large_white"
                                     data-x="center"
                                     data-y="210"
                                     data-start="6400"
                                     data-end="10000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:0;s:1000;e:Power2.easeInOut;"><div class="separator light"></div>
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption medium_white"
                                     data-x="center"
                                     data-y="260"
                                     data-start="6800"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-50%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[-50%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur fugiat dolorum sapiente eligendi...
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption"
                                     data-x="center"
                                     data-y="bottom"
                                     data-voffset="100"
                                     data-start="1250"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                    <a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i></a>
                                </div>

                            </li>
                            <!-- slide 1 end -->

                            <!-- slide 2 start -->
                            <!-- ================ -->
                            <li data-transition="crossfade" data-slotamount="7" data-masterspeed="default" data-title="Premium HTML5 Bootstrap Theme">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/slider-fullscreen-slide-2.jpg') }}" alt="slidebg2" data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_white"
                                     data-x="left"
                                     data-y="110"
                                     data-start="1000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="logo-font">The Project</span> <br> Premium HTML5 Bootstrap Theme
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption medium_white"
                                     data-x="left"
                                     data-y="240"
                                     data-speed="500"
                                     data-start="1200"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> 100% Responsive
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_white"
                                     data-x="left"
                                     data-y="300"
                                     data-speed="500"
                                     data-start="1400"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-check"></i></span> Bootstrap Based
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption medium_white"
                                     data-x="left"
                                     data-y="360"
                                     data-speed="500"
                                     data-start="1600"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-gift"></i></span> Packed Full of Features
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption medium_white"
                                     data-x="left"
                                     data-y="420"
                                     data-speed="500"
                                     data-start="1800"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-hourglass-half"></i></span> Very Elegant Design
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption small_white"
                                     data-x="left"
                                     data-y="490"
                                     data-speed="500"
                                     data-start="2000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#" class="btn btn-default btn-lg btn-animated">Purchase <i class="fa fa-cart-arrow-down"></i></a>
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
        <!-- banner end -->

        <div id="page-start"></div>

        <!-- section -->
        <!-- ================ -->
        <section id="about" class="main-container">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="text-center title">About <strong>Us</strong></h2>
                        <div class="separator"></div>
                        <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div id="text-rotator-text" class="mt-4 text-rotator-text d-none">
                            <p>The Project is Multipurpose Template</p>
                            <p>The Project is Bootstrap Based</p>
                            <p>The Project is Multipurpose</p>
                            <p>The Project has Clean Design</p>
                        </div>
                        <h3 id="text-rotator" class="d-inline-block text-rotator" style="min-height: 40px;"></h3>
                        <p>Lorem ipsum dolor sit amet, lotrem <span class="text-default">some colored text</span>. Nulla explicabo <strong>attention to this</strong> blanditiis, ex cupiditate ipsam debitis rem.</p>
                        <ul class="list-icons">
                            <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check-square-o"></i> Duis aute irure dolor</li>
                            <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check-square-o"></i> Dolore eu fugiat nulla</li>
                            <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check-square-o"></i> Labore et dolore magna aliqua</li>
                            <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="fa fa-check-square-o"></i> Unt in culpa qui deserunt</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Some bold text</strong>, unde voluptatum quidem explicabo et eius aut nisi dolore ut. Sapiente velit quidem, unde fugit. Neque illum, debitis ut, porro natus.</p>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="overlay-container overlay-visible">
                            <img src="{{ asset('vendor/frontend/template/images/section-image-5.jpg') }}" alt="">
                            <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                            <div class="overlay-bottom hidden-sm-down">
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis sunt, quae alias impedit ea molestias recusandae.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="title">Our <strong>Team</strong></h3>
                <div class="separator-2"></div>
                <div class="row grid-space-10">
                    <div class="col-md-4">
                        <div class="team-member image-box style-2 hc-shadow bordered light-gray-bg text-center">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/team-member-1.jpg') }}" alt="">
                                <div class="overlay-bottom">
                                    <ul class="social-links circle dark margin-clear">
                                        <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body">
                                <h3 class="margin-clear">Team Member</h3>
                                <small>CEO</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <a href="#" class="btn btn-lg-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member image-box style-2 hc-shadow bordered light-gray-bg text-center">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/team-member-2.jpg') }}" alt="">
                                <div class="overlay-bottom">
                                    <ul class="social-links circle dark margin-clear">
                                        <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body">
                                <h3 class="margin-clear">Team Member</h3>
                                <small>CTO</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <a href="#" class="btn btn-lg-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member image-box style-2 hc-shadow bordered light-gray-bg text-center">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/team-member-3.jpg') }}" alt="">
                                <div class="overlay-bottom">
                                    <ul class="social-links circle dark margin-clear">
                                        <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body">
                                <h3 class="margin-clear">Team Member</h3>
                                <small>Project Manager</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <a href="#" class="btn btn-lg-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="dark-translucent-bg pv-30 background-img-1" style="background-position:50% 30%;">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mt-4">Why <strong>Choose</strong> Us?</h2>
                        <div class="separator"></div>
                        <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hc-item-box-2">
                                    <span class="icon default-bg small"><i class="fa fa-heart-o"></i></span>
                                    <div class="body">
                                        <h4 class="title">Great &amp; elegant</h4>
                                        <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hc-item-box-2">
                                    <span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
                                    <div class="body">
                                        <h4 class="title">Porro ullam volu</h4>
                                        <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hc-item-box-2">
                                    <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                                    <div class="body">
                                        <h4 class="title">Lorem dolor sit</h4>
                                        <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hc-item-box-2">
                                    <span class="icon default-bg small"><i class="fa fa-check"></i></span>
                                    <div class="body">
                                        <h4 class="title">Bootstrap Based</h4>
                                        <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/page-about-2.jpg') }}" alt="">
                            <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section id="services" class="light-gray-bg pv-30 clearfix">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mt-4">Main <strong>Services</strong></h2>
                        <div class="separator"></div>
                        <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-box style-2 mb-20">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/service-1.jpg') }}" alt="">
                                <a href="{{ asset('vendor/frontend/template/images/service-1.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <p class="lead margin-clear text-left">Service One</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body padding-horizontal-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image-box style-2 mb-20">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/service-2.jpg') }}" alt="">
                                <a href="{{ asset('vendor/frontend/template/images/service-2.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <p class="lead margin-clear text-left">Service One</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body padding-horizontal-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image-box style-2 mb-20">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/service-3.jpg') }}" alt="">
                                <a href="{{ asset('vendor/frontend/template/images/service-3.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <p class="lead margin-clear text-left">Service One</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body padding-horizontal-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="section dark-bg clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action text-center">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 class="title">Don't Miss Out Our Offers</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <!-- ================ -->
        <section class="pv-30">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mt-4">More <strong>Services</strong></h2>
                        <div class="separator"></div>
                        <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                            <span class="icon without-bg"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                            <span class="icon without-bg"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Lorem dolor sit</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
                            <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                            <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pv-20 ph-20 hc-item-box-2 light-gray-bg boxed hc-shadow hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="350">
                            <span class="icon without-bg"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section id="portfolio" class="section pv-30 light-gray-bg">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="title"><span class="text-muted">Our</span> <strong>Portfolio</strong></h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <!-- isotope filters start -->
            <div class="filters d-flex justify-content-center mb-2">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">All</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-filter=".web-design">Web design</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-filter=".app-development">App development</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-filter=".site-building">Site building</a></li>
                </ul>
            </div>
            <!-- isotope filters end -->

            <div class="isotope-container row grid-space-0 mb-20">
                <div class="col-md-6 col-lg-3 isotope-item web-design">
                    <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators bottom margin-clear">
                            <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-portfolio" data-slide-to="1"></li>
                            <li data-target="#carousel-portfolio" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="image-box text-center">
                                    <div class="overlay-container">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        <div class="overlay-top">
                                            <div class="text">
                                                <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                                <p class="small">Web Design</p>
                                            </div>
                                        </div>
                                        <div class="overlay-bottom">
                                            <div class="links">
                                                <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-box text-center">
                                    <div class="overlay-container">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-1-2.jpg') }}" alt="">
                                        <div class="overlay-top">
                                            <div class="text">
                                                <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                                <p class="small">Web Design</p>
                                            </div>
                                        </div>
                                        <div class="overlay-bottom">
                                            <div class="links">
                                                <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-box text-center">
                                    <div class="overlay-container">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-1-3.jpg') }}" alt="">
                                        <div class="overlay-top">
                                            <div class="text">
                                                <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                                <p class="small">Web Design</p>
                                            </div>
                                        </div>
                                        <div class="overlay-bottom">
                                            <div class="links">
                                                <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-1-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-1-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item app-development">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-2.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-2" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">App Development</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-2" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-2-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-2-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item app-development">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-3.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-3" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">App Development</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-3" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-3-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-3-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item web-design">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-4.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-4" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">Web Design</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-4" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-4-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-4-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item site-building">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-5.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-5" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">Site Building</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-5" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-5-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-5-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item app-development">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-6.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-6" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">App Development</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-6" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-6-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-6-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item site-building">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-7.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-7" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">Site Building</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-7" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-7-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-7-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
                <div class="col-md-6 col-lg-3 isotope-item app-development">
                    <div class="image-box text-center">
                        <div class="overlay-container">
                            <img src="{{ asset('vendor/frontend/template/images/portfolio-8.jpg') }}" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#project-8" data-toggle="modal">Project Title</a></h3>
                                    <p class="small">App Development</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="#project-8" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="project-8-label">Project Title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="mt-4">Project Description</h3>
                                            <div class="separator-2"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mt-4">Project Info</h3>
                                            <ul class="list">
                                                <li><strong class="vertical-divider">Client </strong> Famous Person</li>
                                                <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                                <li><strong class="vertical-divider">In </strong> Web Design</li>
                                                <li><strong class="vertical-divider">Place </strong> Europe</li>
                                                <li><strong class="vertical-divider">URL </strong> <a href="#">www.your_domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h3>More info</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                            <form>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" id="project-8-email" placeholder="Email">
                                                    <i class="fa fa-envelope-o form-control-feedback"></i>
                                                </div>
                                                <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </div>
            </div>
            <div class="slick-carousel content-slider space-top">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('vendor/frontend/template/images/testimonial-1.jpg') }}" alt="Famous Person" title="Famous Person" class="rounded-circle">
                                    </div>
                                    <h3 class="mt-3">Just Perfect!</h3>
                                    <div class="separator"></div>
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                        </blockquote>
                                        <div class="testimonial-info-1">- Famous Person</div>
                                        <div class="testimonial-info-2">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('vendor/frontend/template/images/testimonial-2.jpg') }}" alt="Famous Person" title="Famous Person" class="rounded-circle">
                                    </div>
                                    <h3 class="mt-3">Amazing!</h3>
                                    <div class="separator"></div>
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                                        </blockquote>
                                        <div class="testimonial-info-1">- Famous Person</div>
                                        <div class="testimonial-info-2">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6 text-center">
                        <div class="hc-item-box">
                            <span class="icon dark-bg large circle"><i class="fa fa-diamond"></i></span>
                            <h3><strong>Projects</strong></h3>
                            <span class="counter" data-to="1525" data-speed="5000">0</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="hc-item-box">
                            <span class="icon dark-bg large circle"><i class="fa fa-users"></i></span>
                            <h3><strong>Clients</strong></h3>
                            <span class="counter" data-to="1225" data-speed="5000">0</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="hc-item-box">
                            <span class="icon dark-bg large circle"><i class="fa fa-cloud-download"></i></span>
                            <h3><strong>Downloads</strong></h3>
                            <span class="counter" data-to="6532" data-speed="5000">0</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="hc-item-box">
                            <span class="icon dark-bg large circle"><i class="fa fa-share"></i></span>
                            <h3><strong>Sherot</strong></h3>
                            <span class="counter" data-to="15002" data-speed="5000">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top start -->
            <!-- ================ -->
            <div class="dark-translucent-bg footer-top animated-text default-hovered" style="background-color:rgba(0,0,0,0.6);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-to-action text-center">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="mt-3">Powerful Bootstrap Template</h2>
                                        <h2 class="mt-3">Waste no more time</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->
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
                                    <div class="logo-footer"><img id="logo-footer" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt=""></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore fugit vitae quia dicta inventore reiciendis. Ipsa, aut voluptas quaerat.</p>
                                    <ul class="list-inline mb-20">
                                        <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i> Street Address No, City</li>
                                        <li class="list-inline-item"><i class="text-default fa fa-phone pl-10 pr-1"></i> +00 1234567890</li>
                                        <li class="list-inline-item"><a href="#" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i> example@your_domain.com</a></li>
                                    </ul>
                                    <div class="separator-2"></div>
                                    <ul class="social-links circle margin-clear animated-effect-1">
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                        <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-content">
                                    <h2 class="title">Contact Us</h2>
                                    <form class="margin-clear">
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
                                        <input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
                                    </form>
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
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
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

    <!-- Morphext -->
    <script src="{{ asset('vendor/frontend/template/plugins/typed/typed.min.js') }}"></script>

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
