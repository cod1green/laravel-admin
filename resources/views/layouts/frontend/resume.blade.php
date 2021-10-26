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
    <link href="{{ asset('vendor/frontend/template/css/skins/dark_cyan.css') }}" rel="stylesheet">

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
<body class="gradient-background-header transparent-header front-page ">

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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3 hidden-md-down">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="index.html"><img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_dark_cyan.png') }}" alt="The Project"></a>
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
                                                <a href="index.html"><img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_dark_cyan.png') }}" alt="The Project"></a>
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
                                                <li class="nav-item"><a href="#banner" class="nav-link smooth-scroll active">Home</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skills">Skills</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Recent Projects</a></li>
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
                    <div id="slider-banner-fullscreen-hero" class="slider-banner-fullscreen-hero rev_slider" data-version="5.0">
                        <ul class="slides">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li data-transition="crossfade" data-slotamount="default" data-masterspeed="default" data-title="Slide Title">

                                <!-- main image -->
                                <img src="{{ asset('vendor/frontend/template/images/resume-slide-1.jpg') }}" alt="slidebg1" data-bgposition="center top" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                <!-- Transparent Background -->
                                <div class="tp-caption light-translucent-bg"
                                     style="background-color: rgba(255,255,255,0.1);"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_in="opacity:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:600;s:300;"
                                     data-width="5000"
                                     data-height="5000">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_white dark-translucent-bg caption-box"
                                     data-x="left"
                                     data-y="200"
                                     data-start="500"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];opacity:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                >Hello, this is my slogan!
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_white dark-translucent-bg caption-box"
                                     data-x="left"
                                     data-y="292"
                                     data-start="650"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];opacity:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Senior Web Developer
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption"
                                     data-x="left"
                                     data-y="390"
                                     data-start="800"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];opacity:0;s:1100;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#page-start" class="btn btn-default btn-lg margin-clear radius-50 smooth-scroll">More Details</a>
                                </div>
                            </li>
                            <!-- slide 1 end -->
                        </ul>
                    </div>
                </div>
                <!-- slider revolution end -->

            </div>
            <!-- slideshow end -->

        </div>
        <!-- banner end -->

        <div id="page-start"></div>

        <!-- section start -->
        <!-- ================ -->
        <section id="about" class="light-gray-bg pv-20">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center pv-20">
                        <br>
                        <h1 class="title large"><span class="text-default">About</span> Me</h1>
                        <div class="separator"></div>
                        <p class="large">Hello, this is my site. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
                    </div>
                </div>

                <!-- timeline grid start -->
                <!-- ================ -->
                <div class="timeline margin-clear clearfix">

                    <!-- timeline grid item start -->
                    <div class="timeline-item">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2011 - 2017</div>
                            <h3 class="mt-4">Web Developer at HtmlCoder</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                    <!-- timeline grid item start -->
                    <div class="timeline-item pull-right">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2009 - 2011</div>
                            <h3 class="mt-4">Freelancer</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                    <!-- timeline grid item start -->
                    <div class="timeline-item">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2008 - 2009</div>
                            <h3 class="mt-4">Manager at Gogole</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                    <!-- timeline grid item start -->
                    <div class="timeline-item pull-right">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2006 - 2008</div>
                            <h3 class="mt-4">Manager at Pappla</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                    <!-- timeline grid item start -->
                    <div class="timeline-item">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2004 - 2006</div>
                            <h3 class="mt-4">MSc Software Engineering</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                    <!-- timeline grid item start -->
                    <div class="timeline-item pull-right">
                        <div class="white-bg hc-shadow p-20 text-center hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="timeline-date-label margin-clear clearfix">2000 - 2004</div>
                            <h3 class="mt-4">Bachelor Software Engineering</h3>
                            <div class="separator"></div>
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum.</p>
                        </div>
                    </div>
                    <!-- timeline grid item end -->

                </div>
                <!-- timeline grid end -->
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="stats padding-bottom-clear dark-translucent-bg hovered" style="background-image:url('{{ asset('vendor/frontend/template/images/page-about-banner-1.jpg') }}'); background-position: 50% 50%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 pv-40 default-translucent-bg col-12 col-md-3 text-center">
                        <div class="hc-item-box pv-20 hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                            <h2><strong>Why Me?</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="slick-carousel space-top content-slider">
                            <div>
                                <div class="row justify-content-lg-center">
                                    <div class="col-lg-8">
                                        <div class="testimonial text-center">
                                            <h3>Just Perfect!</h3>
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
                            <div>
                                <div class="row justify-content-lg-center">
                                    <div class="col-lg-8">
                                        <div class="testimonial text-center">
                                            <h3>Amazing!</h3>
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
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- main-container start -->
        <!-- ================ -->
        <section id="skills" class="main-container">
            <div class="container">
                <div class="row justify-content-lg-center">

                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-lg-10">

                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title">My Skills</h1>
                        <div class="separator-2 mb-20"></div>
                        <!-- page-title end -->

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per.</p>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">CSS</span>
                            </div>
                        </div>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="85%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">HTML5</span>
                            </div>
                        </div>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Design</span>
                            </div>
                        </div>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" data-animate-width="80%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">PHP</span>
                            </div>
                        </div>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" data-animate-width="85%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">jQuery</span>
                            </div>
                        </div>
                        <div class="progress style-1 dark">
                            <span class="text"></span>
                            <div class="progress-bar progress-bar-white" data-animate-width="90%">
                                <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Drupal</span>
                            </div>
                        </div>
                        <p>Sed eget pulvinar quam, vel feugiat enim. Aliquam erat volutpat. Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per. Vestibulum velmo.</p>
                        <ul class="list-icons">
                            <li><i class="fa fa-check"></i> Etiam sed dolor ac diam volutpat</li>
                            <li><i class="fa fa-check"></i> Sed eget pulvinar quam, vel feugiat enim aliquam </li>
                            <li><i class="fa fa-check"></i> Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet</li>
                            <li><i class="fa fa-check"></i> Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo</li>
                        </ul>
                    </div>
                    <!-- main end -->

                </div>
            </div>
        </section>
        <!-- main-container end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="section dark-translucent-bg fixed-bg background-img-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="clients-container">
                            <div class="clients">
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="100">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-1.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="200">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-2.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="300">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-3.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="400">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-4.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="500">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-5.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="600">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-6.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="700">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-7.png') }}" alt=""></a>
                                </div>
                                <div class="client-image hc-element-invisible" data-animation-effect="fadeIn" data-effect-delay="800">
                                    <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-8.png') }}" alt=""></a>
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
        <section id="portfolio" class="section pv-40 light-gray-bg">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="title"><span class="text-muted">Recent</span> <span class="text-default">Projects</span></h2>
                        <div class="separator"></div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p>
                        <br>
                    </div>
                </div>
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-5.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box style-3-b">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="hc-shadow bordered">
                                        <img src="{{ asset('vendor/frontend/template/images/portfolio-6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="body">
                                        <h3 class="title"><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Feb, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                                        <div class="separator-2"></div>
                                        <p class="mb-10">Lorem ipsum dolor sit amet, adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                                        <p><a href="portfolio-item.html">Read More</a></p>
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
        <section class="dark-translucent-bg hovered background-img-6">
            <!-- footer top start -->
            <!-- ================ -->
            <div class="border-clear footer-top animated-text default-hovered">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="call-to-action text-center">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="mt-4">Powerful Bootstrap Template</h2>
                                        <h2 class="mt-4">Waste no more time</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent radius-50">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
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
                        <div class="row justify-content-xl-center">
                            <div class="col-xl-10 col-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-xl-6">
                                        <div class="footer-content">
                                            <h2 class="title">Find Me</h2>
                                            <ul class="list-icons">
                                                <li><i class="fa fa-map-marker pr-10 text-default"></i> Street Address No, City</li>
                                                <li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
                                                <li><a href="#"><i class="fa fa-envelope-o pr-10"></i>example@your_domain.com</a></li>
                                            </ul>
                                            <a class="collapsed map-show btn-lg-link padding-hor-clear" data-toggle="collapse" href="#collapseContact" aria-expanded="false" aria-controls="collapseContact"><i class="fa fa-envelope pr-20"></i>Contact Me</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-9 col-xl-6">
                                        <div class="footer-content">
                                            <h2 class="title">Follow Me</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro fugiat accusantium similique modi alias consectetur nesciunt.</p>
                                            <ul class="social-links large circle animated-effect-1">
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="clearfix hidden-sm-up"></div>
                                <section id="collapseContact" class="collapse">
                                    <div class="row justify-content-xl-center">
                                        <div class="col-xl-10">
                                            <div class="footer-content">
                                                <h2 class="title">Contact Me</h2>
                                                <form class="margin-clear">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group has-feedback mb-10">
                                                            <label class="sr-only" for="name2">Name</label>
                                                            <input type="text" class="form-control" id="name2" placeholder="Name" required>
                                                            <i class="fa fa-user form-control-feedback pr-4"></i>
                                                        </div>
                                                        <div class="col-md-6 form-group has-feedback mb-10">
                                                            <label class="sr-only" for="email2">Email address</label>
                                                            <input type="email" class="form-control" id="email2" placeholder="Enter email" required>
                                                            <i class="fa fa-envelope form-control-feedback pr-4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback mb-10">
                                                        <label class="sr-only" for="message2">Message</label>
                                                        <textarea class="form-control" rows="4" id="message2" placeholder="Message" required></textarea>
                                                        <i class="fa fa-pencil form-control-feedback"></i>
                                                    </div>
                                                    <input type="submit" value="Send" class="margin-clear submit-button radius-50 btn btn-default">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
    <script src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.kenburn.min.js') }}"></script>

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