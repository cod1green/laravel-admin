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
<body class="front-page ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
        <!-- header-container start -->
        <div id="header" class="header-container">
            <!-- header start -->
            <!-- classes:  -->
            <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
            <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
            <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
            <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
            <!-- "full-width": mandatory class for the full-width menu layout -->
            <!-- "centered": mandatory class for the centered logo layout -->
            <!-- ================ -->
            <header class="header pv-20  clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo d-flex justify-content-center justify-content-md-start">
                                    <a href="index.html"><img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt="The Project"></a>
                                </div>

                                <!-- name-and-slogan -->
                                <div class="site-slogan text-center-xs">
                                    Multipurpose HTML5 Template
                                </div>

                            </div>
                            <!-- header-first end -->
                        </div>
                        <div class="col-md-8">
                            <ul class="social-links text-md-right text-center-xs animated-effect-1 circle small clearfix">
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
                </div>
            </header>
            <!-- header end -->
        </div>
        <!-- header-container end -->
        <!-- banner start -->
        <!-- ================ -->
        <div id="banner" class="banner dark-translucent-bg padding-bottom-clear" style="background-image:url('{{ asset('vendor/frontend/template/images/landing-page-banner.jpg') }}');">
            <!-- section start -->
            <!-- ================ -->
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center space-bottom">
                        <div class="title large_white">The Project</div>
                        <div class="separator"></div>
                        <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit!</p>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-4">
                        <div class="hc-item-box-2 hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hc-item-box-2 hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                            <span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hc-item-box-2 hc-element-invisible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Lorem dolor sit</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->
            <!-- section start -->
            <!-- ================ -->
            <div class="pv-40 dark-translucent-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-to-action text-center">
                                <form class="form-inline margin-clear d-flex justify-content-center">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="subscribe3">Email address</label>
                                        <input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" required="">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-gray-transparent btn-animated ml-2">Submit <i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->
        </div>
        <!-- banner end -->

        <!-- main-container start -->
        <!-- ================ -->
        <section class="main-container">

            <div class="container">
                <div class="row">

                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-md-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('vendor/frontend/template/images/section-image-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h2 class="mt-4">We Are Offer Amazing Services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid neque!</p>
                                <div class="media">
                                    <div class="d-flex pr-4">
                                        <a href="#">
                                            <span class="icon circle small default-bg"><i class="fa fa-eye"></i> </span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Porro ullam volu</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex pr-4">
                                        <a href="#">
                                            <span class="icon circle small default-bg"><i class="fa fa-trophy"></i> </span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Packed Full Of Features</h4>
                                        Cras sit amet nibh libero. Nulla vel metus scelerisque.
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex pr-4">
                                        <a href="#">
                                            <span class="icon circle small default-bg"><i class="fa fa-life-ring"></i> </span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Unt loremcu</h4>
                                        Cras sit amet nibh libero. Nulla vel metus scelerisque.
                                    </div>
                                </div>
                                <a href="#" class="btn btn-lg btn-default btn-animated">Purchase <i class="fa fa-cart-arrow-down pl-20"></i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 order-lg-2">
                                <img class="pv-30" src="{{ asset('vendor/frontend/template/images/section-image-2.png') }}" alt="">
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <h2 class="mt-4">You Will Love It!</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid neque!</p>
                                <ul class="list-icons">
                                    <li><i class="fa fa-check-square-o"></i> Duis aute irure dolor</li>
                                    <li><i class="fa fa-check-square-o"></i> Dolore eu fugiat nulla</li>
                                    <li><i class="fa fa-check-square-o"></i> Labore et dolore magna aliqua</li>
                                    <li><i class="fa fa-check-square-o"></i> Unt in culpa qui deserunt</li>
                                </ul>
                                <p>Libero cum iusto doloribus officiis delectus alias consectetur ullam, animi totam assumenda, ad earum quis non nostrum placeat provident dolores ratione similique!</p>
                                <a href="#" class="btn btn-lg btn-default btn-animated">Purchase <i class="fa fa-cart-arrow-down pl-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- main end -->

                </div>
            </div>
        </section>
        <!-- main-container end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="pv-40 light-gray-bg">
            <div class="slick-carousel content-slider">
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
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="pv-40">
            <div class="container">
                <h2 class="text-center mt-4">Of Course We Also Provide</h2>
                <div class="separator"></div>
                <div class="row mt-20">
                    <div class="col-lg-6">
                        <div class="hc-item-box-2 right">
                            <span class="icon without-bg"><i class="text-default fa fa-arrows-alt"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="hc-item-box-2 right">
                            <span class="icon without-bg"><i class="text-default fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="hc-item-box-2 right">
                            <span class="icon without-bg"><i class="text-default fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hc-item-box-2">
                            <span class="icon without-bg"><i class="text-default fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Lorem dolor sit</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="hc-item-box-2">
                            <span class="icon without-bg"><i class="text-default fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="hc-item-box-2">
                            <span class="icon without-bg"><i class="text-default fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section end -->
        <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
        <!-- ================ -->
        <footer id="footer" class="clearfix ">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row justify-content-lg-center">
                            <div class="col-lg-6">
                                <div class="footer-content text-center padding-ver-clear">
                                    <div class="logo-footer"><img id="logo-footer" class="mx-auto" src="{{ asset('vendor/frontend/template/images/logo_light_blue.png') }}" alt=""></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, illo vel dolorum soluta consectetur.</p>
                                    <ul class="list-inline mb-20">
                                        <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i>Street Address No, City</li>
                                        <li class="list-inline-item"><a href="#" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-1"></i>+00 1234567890</a></li>
                                        <li class="list-inline-item"><a href="#" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i>example@your_domain.com</a></li>
                                    </ul>
                                    <a href="#header" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-to-top smooth-scroll">Subscribe Now</a>
                                    <div class="separator"></div>
                                    <p class="text-center margin-clear">Copyright © 2019. All Rights Reserved</p>
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
