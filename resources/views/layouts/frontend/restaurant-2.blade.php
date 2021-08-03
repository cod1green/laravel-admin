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
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/frontend/template/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('vendor/frontend/template/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ asset('vendor/frontend/template/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/htmlcoder/sliders/fullscreen-slider-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/htmlcoder/sliders/slider-style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/css/animations.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/slick/slick.css') }}" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <link href="{{ asset('vendor/frontend/template/css/style.css') }}" rel="stylesheet" >

    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Lato -->
    <!-- Used font for headings: Roboto Slab -->
    <!-- Use css/rtl_typography-scheme-2.css for RTL version -->
    <link href="{{ asset('vendor/frontend/template/css/typography-scheme-2.css') }}" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="{{ asset('vendor/frontend/template/css/skins/gold.css') }}" rel="stylesheet">

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
<body class="transparent-header gradient-background-header front-page ">

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
            <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
            <!-- "full-width": mandatory class for the full-width menu layout -->
            <!-- "centered": mandatory class for the centered logo layout -->
            <!-- ================ -->
            <header class="header dark fixed fixed-all clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3 hidden-md-down">
                            <!-- header-first start -->
                            <!-- ================ -->
                            <div class="header-first clearfix">

                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="index.html"><img id="logo_img" src="{{ asset('vendor/frontend/template/images/logo_gold.png') }}" alt="The Project"></a>
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
                                                <a href="index.html"><img id="logo-img-mobile" src="{{ asset('vendor/frontend/template/images/logo_gold.png') }}" alt="The Project"></a>
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
                                                <li class="nav-item"><a class="nav-link smooth-scroll active" href="#slider-banner-fullscreen">Intro</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#section-2">About</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#section-3">Menu</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#section-4">Reviews</a></li>
                                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#section-5">Contact</a></li>
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
        <div class="banner clearfix">

            <div id="slider-banner-fullscreen" class="hc-slideshow hc-slideshow--fullscreen carousel slide carousel-fade" data-ride="carousel" data-interval="9000" data-wrap="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="fullscreen-slide">
                            <div class="background-image" style="background-image:url('{{ asset('vendor/frontend/template/images/restaurant-2-intro.jpg') }}');"></div>
                            <div class="background-image-overlay"></div>
                            <div class="container">
                                <div class="hc-slideshow-caption p-3 w-100">
                                    <div class="row justify-content-lg-center">
                                        <div class="col-md-8 text-center">
                                            <h1 class="title large text-white animated fadeInDown hc-animation-delay-1000">The Restaurant</h1>
                                            <div class="separator with-icon animated fadeIn hc-animation-delay-1250"><i class="fa fa-glass bordered" aria-hidden="true"></i></div>
                                            <p class="large animated fadeInLeft hc-animation-delay-1500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrumi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- banner end -->

        <!-- section start -->
        <!-- ================ -->
        <section id="section-2" class="section dark-bg">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 pv-20">
                        <h2 class="title text-center">About Us</h2>
                        <div class="separator with-icon"><i class="fa fa-cutlery bordered"></i></div>
                        <h3>Since 1956</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias eius fugit sint modi, maiores labore quo ex explicabo temporibus neque ea, laborum, vitae eos pariatur? Facilis quasi, quia velit nostrum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus veniam similique nam dolorem eum hic neque, odit aliquid reprehenderit, reiciendis tempora eveniet blanditiis, asperiores illo necessitatibus obcaecati totam unde!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section id="section-3" class="section dark-translucent-bg" style="background-image: url('{{ asset('vendor/frontend/template/images/restaurant-2-menu.jpg') }}');">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center">
                        <div class="separator with-icon"><i class="fa fa-book bordered"></i></div>
                    </div>
                </div>
                <!-- Nav tabs -->
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#pill-1" role="tab" data-toggle="tab" title="images">Breakfast</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pill-2" role="tab" data-toggle="tab" title="video">Lunch</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pill-3" role="tab" data-toggle="tab" title="text">Dinner</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content clear-style">
                    <div class="tab-pane active" id="pill-1">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-1.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Explicabo sed sequi recusandae</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$9.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-2.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Aliquam atque ipsam nihil</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$5.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-3.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Nihil adipisci rem minus</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$6.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-4.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Adipisicing elit aliquam atque</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$8.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pill-2">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-5.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Adipisci rem minus</h4>
                                        <p class="small mb-10">Et voluptatum, pariatur doloremque. Et voluptatem commodi, cupiditate atque repellat ipsam, ipsa.</p>
                                        <p class="lead text-default">$6.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-6.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Lorem ipsum dolor sit amet</h4>
                                        <p class="small mb-10">Illo recusandae consectetur, reprehenderit ipsa saepe expedita debitis unde quod eum et, adipisci.</p>
                                        <p class="lead text-default">$8.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-7.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Aliquam atque ipsam nihil</h4>
                                        <p class="small mb-10">Blanditiis laboriosam quia totam qui cupiditate dolore adipisci et, at ullam molestias sed dolorum.</p>
                                        <p class="lead text-default">$9.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-8.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Consectetur adipisicing elit</h4>
                                        <p class="small mb-10">Eaque officia odit enim iure nam maiores deserunt incidunt omnis quis dolore, molestiae voluptate.</p>
                                        <p class="lead text-default">$12.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pill-3">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-9.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Explicabo sed sequi recusandae</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$9.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-10.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Aliquam atque ipsam nihil</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$5.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-11.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Nihil adipisci rem minus</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$6.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="image-box text-center style-2 mb-20">
                                    <div class="ph-40">
                                        <img src="{{ asset('vendor/frontend/template/images/restaurant-dish-12.jpg') }}" alt="" class="rounded-circle">
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <h4 class="title">Adipisicing elit aliquam atque</h4>
                                        <p class="small mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus.</p>
                                        <p class="lead text-default">$8.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pills end -->
            </div>
            <section id="section-4" class="section position-relative" style="z-index: 3;">
                <div class="slick-carousel content-slider">
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Just Perfect! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/02/2015</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Tasty! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star-half-o text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ullam nihil sapiente ipsa sint! Eveniet quos exercitationem, cum architecto animi maiores assumenda mollitia voluptatem vel ipsum, voluptate consequuntur libero quae!</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/02/2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Amazing! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis optio soluta aspernatur, amet fugiat. Eum doloribus, illo eius blanditiis laudantium sequi fuga enim minima, labore nihil quia at optio sapiente.</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/05/2016</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Good! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est cupiditate eos molestias dicta nulla neque vero excepturi reprehenderit impedit quae dolorem illo, deserunt, explicabo voluptatibus! Debitis necessitatibus cupiditate perspiciatis, veniam!</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/02/2015</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Great service! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star-half-o text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem natus neque sint quia necessitatibus, perspiciatis ipsam, atque accusantium ut, voluptates quo omnis porro adipisci voluptatibus rerum beatae enim aut sunt!</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/02/2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <h3 class="title">Amazing! </h3>
                                        <span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i></span>
                                        <div class="testimonial-body">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa asperiores molestiae fuga quia distinctio autem consectetur quas dolore quos esse, iste vel aliquam vitae tempore consequatur, rem atque id obcaecati.</p>
                                            </blockquote>
                                            <div class="testimonial-info-1">- Famous Person</div>
                                            <div class="testimonial-info-2">05/05/2016</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section id="section-5" class="section dark-bg">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8 text-center pv-20">
                        <h2 class="text-center mt-4">Contact Us</h2>
                        <div class="separator with-icon"><i class="fa fa-phone bordered"></i></div>
                        <p class="lead text-center">It would be great to hear from you! Just call us and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
                        <ul class="list-inline mb-20 text-center">
                            <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i>Street Address No, City</li>
                            <li class="list-inline-item"><a href="#" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-1"></i>+00 1234567890</a></li>
                            <li class="list-inline-item"><a href="#" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i>example@your_domain.com</a></li>
                        </ul>
                        <div class="separator"></div>
                        <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                        </ul>
                        <form>
                            <input type="submit" class="btn btn-lg btn-default" value="Get directions" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

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
        <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
    <!-- Jquery and Bootstap core js files -->
    <script src="{{ asset('vendor/frontend/template/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/frontend/template/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

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
