<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/frontend/logo_100x100.png')  }}">

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
    <link href="{{ asset('vendor/frontend/template/css/style.css') }}" rel="stylesheet">

    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="{{ asset('vendor/frontend/template/css/typography-default.css') }}" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
<!-- <link href="{{ asset('vendor/frontend/template/css/skins/vivid_red.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('vendor/frontend/template/css/skins/cool_green.css') }}" rel="stylesheet">

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
<body class="front-page">

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
        <div class="header-top colored">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-sm-6 col-lg-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="flickr">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="xing">
                                    <a href="https://api.whatsapp.com/send?phone=5511948809185&text=Ol%C3%A1%2C%20quero%20fazer%20um%20or%C3%A7amento!"
                                       target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button"
                                            class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="flickr">
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="facebook">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="xing">
                                            <a href="https://api.whatsapp.com/send?phone=5511948809185&text=Ol%C3%A1%2C%20quero%20fazer%20um%20or%C3%A7amento!"
                                               target="_blank">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-md-down">
                                <!-- <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>R. Pérola, 147 -
                                    Jardim Nomura, Cotia-SP, 06717-120
                                </li> -->
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>
                                    <a class="text-decoration-none" href="tel:+5511948809185">(11) 94880-9185</a>
                                </li>
                                <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i>
                                    <a class="text-decoration-none" href="mailto:gestao.cod1green@gmail.com">gestao.cod1green@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-9 col-sm-6 col-lg-3">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second" class="clearfix">

                            <!-- header top dropdowns start -->
                            <!-- ================ -->
                            <div class="header-top-dropdown text-right">
                                @guest
                                    @if (Route::has('register'))
                                        <div class="btn-group">
                                            <a href="{{ route('register') }}" class="btn btn-default btn-sm"><i
                                                    class="fa fa-user pr-2"></i>
                                                {{ __('Register') }}
                                            </a>
                                        </div>
                                    @endif
                                    <div class="btn-group">
                                        <a href="{{ route('login') }}" class="btn btn-default btn-sm"><i
                                                class="fa fa-lock pr-2"></i>
                                            {{ __('Login') }}
                                        </a>
                                    </div>
                                @else
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                id="header-drop-user" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            <div class="list-inline my-0">
                                                @if(Auth::user()->avatar)
                                                    <img src="{{ Auth::user()->avatar->getUrl() }}" width="20"
                                                         height="20"
                                                         alt="avatar" class="rounded-circle list-inline-item">
                                                @else
                                                    <img src="{{ asset('img/no-user.png') }}" width="20" height="20"
                                                         alt="avatar"
                                                         class="rounded-circle list-inline-item">
                                                @endif
                                                <span class="list-inline-item">{{ Auth::user()->name }}</span>
                                            </div>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="header-drop-user">
                                            @can('dashboard')
                                                <li class="dropdown-item">
                                                    <a href="{{ route('admin.dashboard') }}">
                                                        <i class="fa fa-btn fa-tv"></i> @lang('project.dashboard.title')
                                                    </a>
                                                </li>
                                            @endcan
                                            
                                            <li class="dropdown-item">
                                                <a href="{{ route('profile') }}">
                                                    <i class="fa fa-btn fa-user"></i> @lang('project.profile.title_singular')
                                                </a>
                                            </li>

                                            <li class="dropdown-item">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-power-off"></i> @lang('global.logout')
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endguest
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
        <header class="header fixed fixed-desktop clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto hidden-md-down d-flex align-items-center">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix py-lg-1">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="{{ route('index') }}">
                                    <img id="logo_img" width="70" src="{{ asset('img/frontend/logo_100x100.png')  }}"
                                         alt="Logo">
                                </a>
                            </div>

                            <!-- name-and-slogan -->
                            <!-- <div class="site-slogan">Seu slogan</div> -->
                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-lg-8 ml-auto">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- ================ -->
                            <div class="main-navigation main-navigation--mega-menu  animated">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-brand clearfix hidden-lg-up py-1">

                                        <!-- logo -->
                                        <div id="logo-mobile" class="logo">
                                            <a href="{{ route('index') }}">
                                                <img id="logo-img-mobile" width="70"
                                                     src="{{ asset('img/frontend/logo_100x100.png')  }}"
                                                     alt="The Project">
                                            </a>
                                        </div>

                                        <!-- name-and-slogan -->
                                        <!-- <div class="site-slogan">Seu slogan</div> -->
                                    </div>

                                    <!-- Mobile -->
                                    <!-- header dropdown buttons -->
                                    <div class="header-dropdown-buttons hidden-lg-up p-0 ml-auto mr-3">
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-search"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3">
                                                <li>
                                                    <form role="search" class="search-box margin-clear">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            <i class="fa fa-search form-control-feedback"></i>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"
                                                    id="header-drop-4" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i class="fa fa-shopping-basket"></i>
                                                <!-- <span class="cart-count default-bg">8</span> -->
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"
                                                aria-labelledby="header-drop-4">
                                                <li>
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th class="quantity">QTD</th>
                                                            <th class="product">Produto</th>
                                                            <th class="amount">Subtotal</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- <tr>
                                                            <td class="quantity">2 x</td>
                                                            <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                                            <td class="amount">$199.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="quantity">3 x</td>
                                                            <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                                            <td class="amount">$299.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="quantity">3 x</td>
                                                            <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                                            <td class="amount">$1499.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                            <td class="total-amount">$1997.00</td>
                                                        </tr> -->
                                                        </tbody>
                                                    </table>
                                                    <div class="panel-body text-right">
                                                        <a href="#" class="btn btn-group btn-gray btn-sm">Ver
                                                            carrinho</a>
                                                        <a href="#" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- header dropdown buttons end -->

                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                                        <!-- main-menu -->
                                        <ul class="navbar-nav ml-lg-auto">
                                            <li class="nav-item">
                                                <a href="{{ route('index') }}" class="nav-link smooth-scroll active">Home</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link smooth-scroll"
                                                                    href="#about">Sobre</a></li>
                                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Serviços</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfólio</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link smooth-scroll"
                                                                    href="#pricing">Loja</a></li>
                                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#footer">Contato</a>
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

                    <!-- Desktop  -->
                    <div class="col-auto hidden-md-down">
                        <!-- header dropdown buttons -->
                        <div class="header-dropdown-buttons">
                            <!-- <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-1">
                                    <li>
                                        <form role="search" class="search-box margin-clear">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <i class="fa fa-search form-control-feedback"></i>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div> -->

                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"
                                        id="header-drop-2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i class="fa fa-shopping-basket"></i>
                                    <!-- <span class="cart-count default-bg">8</span> -->
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"
                                    aria-labelledby="header-drop-2">
                                    <li>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="quantity">QTD</th>
                                                <th class="product">Produto</th>
                                                <th class="amount">Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- <tr>
                                                <td class="quantity">2 x</td>
                                                <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                                <td class="amount">$199.00</td>
                                            </tr>
                                            <tr>
                                                <td class="quantity">3 x</td>
                                                <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                                <td class="amount">$299.00</td>
                                            </tr>
                                            <tr>
                                                <td class="quantity">3 x</td>
                                                <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                                <td class="amount">$1499.00</td>
                                            </tr>
                                            <tr>
                                                <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                <td class="total-amount">$1997.00</td>
                                            </tr> -->
                                            </tbody>
                                        </table>
                                        <div class="panel-body text-right">
                                            <a href="#" class="btn btn-group btn-gray btn-sm">Ver carrinho</a>
                                            <a href="#" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
            <div class="slider-revolution-5-container">
                <div id="slider-banner-fullscreen" class="slider-banner-fullscreen rev_slider" data-version="5.0">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        <li class="text-center" data-transition="crossfade" data-slotamount="default"
                            data-masterspeed="default" data-title="Slide Title">

                            <!-- main image -->
                            <img src="{{ asset('vendor/frontend/template/images/slider-fullscreen-slide-1.jpg') }}"
                                 alt="slidebg1"
                                 data-bgposition="center center"
                                 data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 class="rev-slidebg">

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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                    class="logo-font">The <span class="text-default">Project</span></span> <br> Powerful
                                Bootstrap Template
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
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;">
                                <span class="icon large circle">
                                    <i class="circle fa fa-lightbulb-o"></i>
                                </span>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption"
                                 data-x="center"
                                 data-y="250"
                                 data-start="3100"
                                 data-end="6200"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[-50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;">
                                <span class="icon large circle">
                                    <i class="circle fa fa-rotate-left"></i>
                                </span>
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
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span
                                    class="icon large circle"><i class="circle fa fa-line-chart"></i></span>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-resizeme large_white"
                                 data-x="center"
                                 data-y="210"
                                 data-start="6400"
                                 data-end="10000"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                 data-transform_out="y:0;s:1000;e:Power2.easeInOut;">
                                <div class="separator light"></div>
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam
                                aliquid culpa offici, <br> tenetur fugiat dolorum sapiente eligendi...
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
                                <a href="#page-start" class="btn btn-lg moving smooth-scroll">
                                    <i class="fa fa-angle-down"></i>
                                    <i class="fa fa-angle-down"></i>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </li>
                        <!-- slide 1 end -->

                        <!-- slide 2 start -->
                        <!-- ================ -->
                        <li data-transition="crossfade" data-slotamount="7" data-masterspeed="default"
                            data-title="Premium HTML5 Bootstrap Theme">

                            <!-- main image -->
                            <img src="{{ asset('vendor/frontend/template/images/slider-fullscreen-slide-2.jpg') }}"
                                 alt="slidebg2" data-bgposition="center center" data-bgrepeat="no-repeat"
                                 data-bgfit="cover" class="rev-slidebg">

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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="logo-font">The Project</span>
                                <br> Premium HTML5 Bootstrap Theme
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                    class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span>
                                100% Responsive
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                    class="icon default-bg circle small hidden-xs"><i class="fa fa-check"></i></span>
                                Bootstrap Based
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                    class="icon default-bg circle small hidden-xs"><i class="fa fa-gift"></i></span>
                                Packed Full of Features
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                    class="icon default-bg circle small hidden-xs"><i class="fa fa-hourglass-half"></i></span>
                                Very Elegant Design
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
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                <a href="#" class="btn btn-default btn-lg btn-animated">
                                    Purchase <i class="fa fa-cart-arrow-down"></i>
                                </a>
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

    <!-- section start -->
    <!-- ================ -->
    <section class="light-gray-bg pv-30 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <h2 class="text-center mt-4">Core <strong>Features</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam
                        voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                        <h3>Great &amp; elegant</h3>
                        <div class="separator clearfix"></div>
                        <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor
                            sit amet, consectetur.</p>
                        <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                        <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                        <h3>Great Design</h3>
                        <div class="separator clearfix"></div>
                        <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit
                            amet, consectetur.</p>
                        <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 hc-item-box bordered hc-shadow text-center hc-element-invisible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg circle"><i class="fa fa fa-snowflake-o"></i></span>
                        <h3>Many Components</h3>
                        <div class="separator clearfix"></div>
                        <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet,
                            consectetur.</p>
                        <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section default-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-lg-8">
                                <h1 class="title">Don't Miss Out Our Offers</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo
                                    consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
                            </div>
                            <div class="col-lg-4">
                                <br>
                                <p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
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
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <h2 class="text-center mt-4">Why <strong>Choose</strong> Us</h2>
                    <div class="separator"></div>
                    <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas
                        blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="slick-carousel content-slider-with-large-controls">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('vendor/frontend/template/images/section-image-1.png') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident
                                modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id
                                cupiditate quasi excepturi</p>
                            <div class="media">
                                <div class="d-flex pr-20">
                                    <a href="#">
                                        <span class="icon circle small default-bg"><i class="fa fa-eye"></i> </span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Many Features</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex pr-20">
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
                                <div class="d-flex pr-20">
                                    <a href="#">
                                        <span class="icon circle small default-bg"><i
                                                class="fa fa-life-ring"></i> </span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Great Design</h4>
                                    Cras sit amet nibh libero. Nulla vel metus scelerisque.
                                </div>
                            </div>
                            <p><a href="page-services.html" class="btn btn-default-transparent btn-animated">Learn More
                                    <i class="fa fa-arrow-right pl-10"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-right">
                            <p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At provident
                                modi nobis dolores ratione, maiores beatae vel iste illo incidunt officia sed id
                                cupiditate quasi excepturi</p>
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Porro ullam volu</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Sollicitudin.
                                </div>
                                <div class="d-flex pl-20">
                                    <a href="#">
                                        <span class="icon circle small default-bg"><i class="fa fa-eye"></i> </span>
                                    </a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Packed Full Of Features</h4>
                                    Cras sit amet nibh libero. Nulla vel metus scelerisque.
                                </div>
                                <div class="d-flex pl-20">
                                    <a href="#">
                                        <span class="icon circle small default-bg"><i class="fa fa-trophy"></i> </span>
                                    </a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Great Design</h4>
                                    Cras sit amet nibh libero. Nulla vel metus scelerisque.
                                </div>
                                <div class="d-flex pl-20">
                                    <a href="#">
                                        <span class="icon circle small default-bg"><i
                                                class="fa fa-life-ring"></i> </span>
                                    </a>
                                </div>
                            </div>
                            <p><a href="page-services.html" class="btn btn-default-transparent btn-animated">Learn More
                                    <i class="fa fa-arrow-right pl-10"></i></a></p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('vendor/frontend/template/images/section-image-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="light-gray-bg pv-20">
    </section>
    <!-- section end -->

    <!-- section -->
    <!-- ================ -->
    <section class="pv-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mt-4">What We <strong>Offer</strong></h2>
                    <div class="separator-2"></div>
                    <p>Lorem ipsum dolor sit amet, lotrem <span class="text-default">some colored text</span>. Nulla
                        explicabo <strong>attention to this</strong> blanditiis, ex cupiditate ipsam debitis rem.</p>
                    <ul class="list-icons">
                        <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <i class="fa fa-check-square-o"></i> 27 Predifined Home Pages
                        </li>
                        <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="150">
                            <i class="fa fa-check-square-o"></i> 190+ HTML files
                        </li>
                        <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                            <i class="fa fa-check-square-o"></i> Great Design
                        </li>
                        <li class="hc-element-invisible" data-animation-effect="fadeInUpSmall" data-effect-delay="250">
                            <i class="fa fa-check-square-o"></i> Many more...
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Some bold text</strong>, unde
                        voluptatum quidem explicabo et eius aut nisi dolore ut.</p>
                    <a href="page-about.html"
                       class="btn btn-default-transparent btn-animation btn-animation--slide-horizontal btn-lg"><i
                            class="fa fa-users pr-2"></i>Learn More</a>
                </div>
                <div class="col-lg-6">
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs style-1" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#home" aria-controls="home" role="tab"
                                                data-toggle="tab"><i class="fa fa-heart pr-2"></i>We Love</a></li>
                        <li class="nav-item"><a class="nav-link" href="#profile" aria-controls="profile" role="tab"
                                                data-toggle="tab">What</a></li>
                        <li class="nav-item"><a class="nav-link" href="#messages" aria-controls="messages" role="tab"
                                                data-toggle="tab">We Do</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="home">
                            <div class="overlay-container overlay-visible">
                                <img src="{{ asset('vendor/frontend/template/images/section-image-3.jpg') }}" alt="">
                                <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis sunt,
                                        quae alias impedit ea molestias recusandae.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <h3>Laudantium voluptas excepturi hic evenie</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tempore ipsam tenetur
                                molestias eligendi provident! Itaque sapiente neque esse expedita voluptatibus qui
                                officia, fuga a tempora! Alias voluptate pariatur quo.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptas excepturi
                                hic eveniet deleniti, voluptate fugit quod sapiente ut nulla voluptates neque a rerum!
                                Sed dolores enim veniam, dolor minus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quos quidem amet sapiente
                                praesentium unde, vel corrupti, vero dicta velit fuga ut at accusantium expedita
                                inventore fugit perferendis non reprehenderit.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptas excepturi
                                hic eveniet deleniti, voluptate fugit quod sapiente ut nulla voluptates neque a rerum!
                                Sed dolores enim veniam, dolor minus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quos quidem amet sapiente
                                praesentium unde, vel corrupti, vero dicta velit fuga ut at accusantium expedita
                                inventore fugit perferendis non reprehenderit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tempore ipsam tenetur
                                molestias eligendi provident! Itaque sapiente neque esse expedita voluptatibus qui
                                officia, fuga a tempora! Alias voluptate pariatur quo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!-- section end -->

    <!-- section -->
    <!-- ================ -->
    <section class="pv-30 light-gray-bg padding-bottom-clear">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <h2 class="text-center mt-4">Our <strong>Portfolio</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas
                        blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="space-bottom">
            <div class="slick-carousel carousel">
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-1.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-2.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-3.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-4.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-5.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-box hc-shadow text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('vendor/frontend/template/images/portfolio-6.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details
                                    <i class="pl-2 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-carousel content-slider">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-8">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('vendor/frontend/template/images/testimonial-1.jpg') }}"
                                             alt="Famous Person" title="Famous Person" class="rounded-circle">
                                    </div>
                                    <h3 class="mt-3">Just Perfect!</h3>
                                    <div class="separator"></div>
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan
                                                tium dolore laud antium, totam rem dolor sit amet tristique pulvinar,
                                                turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
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
                            <div class="col-lg-8">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('vendor/frontend/template/images/testimonial-2.jpg') }}"
                                             alt="Famous Person" title="Famous Person" class="rounded-circle">
                                    </div>
                                    <h3 class="mt-3">Amazing!</h3>
                                    <div class="separator"></div>
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate
                                                deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad
                                                mollitia libero culpa nostrum est quia eos esse vel!</p>
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
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="100">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-1.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="200">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-2.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="300">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-3.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="400">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-4.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="500">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-5.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="600">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-6.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="700">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-7.png') }}"
                                             alt=""></a>
                        </div>
                        <div class="client-image hc-element-invisible" data-animation-effect="fadeIn"
                             data-effect-delay="800">
                            <a href="#"><img src="{{ asset('vendor/frontend/template/images/client-8.png') }}"
                                             alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-7"
             style="background-position: 50% 50%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6 text-center">
                    <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn"
                         data-effect-delay="300">
                        <span class="icon dark-bg large circle"><i class="fa fa-diamond"></i></span>
                        <h3><strong>Projects</strong></h3>
                        <span class="counter">1525</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn"
                         data-effect-delay="300">
                        <span class="icon dark-bg large circle"><i class="fa fa-users"></i></span>
                        <h3><strong>Clients</strong></h3>
                        <span class="counter">1225</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn"
                         data-effect-delay="300">
                        <span class="icon dark-bg large circle"><i class="fa fa-cloud-download"></i></span>
                        <h3><strong>Downloads</strong></h3>
                        <span class="counter">6532</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <div class="hc-item-box hc-element-invisible" data-animation-effect="fadeIn"
                         data-effect-delay="300">
                        <span class="icon dark-bg large circle"><i class="fa fa-share"></i></span>
                        <h3><strong>Sherot</strong></h3>
                        <span class="counter">15002</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top start -->
        <!-- ================ -->
        <div class="footer-top animated-text" style="background-color:rgba(0,0,0,0.3);">
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
                                    <p class="mt-3"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i
                                                class="fa fa-cart-arrow-down pl-20"></i></a></p>
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
    <footer id="footer" class="clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-content pt-0">
                                <div class="logo-footer d-flex justify-content-lg-center">
                                    <img id="logo-footer" width="100"
                                         src="{{ asset('img/frontend/logo_full_300x300.png')  }}"
                                         alt="">
                                </div>
                                <p>Atuamos na área de tecnologia e inovação com consultoria estratégica e
                                    desenvolvimento
                                    de soluções personalizadas para empresas de todos os segmentos.
                                    Desenvolvemos aplicativos, softwares e outras soluções sob medida para
                                    impulsionar o seu negócio, damos todo o suporte e consultoria necessária para tirar
                                    a
                                    sua ideia do papel e transformar em realidade.
                                </p>
                                <!--<p>Iniciamos nossa jornada em 2009, criando uma potente conexão entre negócio e
                                    tecnologia.
                                    Passamos a desenvolver soluções ágeis e de alta performance para diversos segmentos,
                                    como Fintechs e Bancos, Educação, Academia, Mobilidade e muitos outros.<br>

                                    Já ajudamos mais de diversos clientes no Brasil a aumentar a sua capacidade de
                                    conceber
                                    e lançar produtos de alto impacto e escalabilidade através de times excepcionais.
                                </p>-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-content pt-0">
                                <h2 class="title">Siga nossas redes sociais e fique ligado em todas as novidades!</h2>
                                <div class="separator-2"></div>
                                <p>Você já conhece e segue nossas redes sociais? Seja no Instagram ou no Facebook não
                                    perca tempo e fique por dentro de tudo que acontece dentro e fora do mundo da
                                    Tecnologia, alem de dicas de desenvolvimento de software, eventos, etc.
                                <p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="flickr">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="xing">
                                        <a href="https://api.whatsapp.com/send?phone=5511948809185&text=Ol%C3%A1%2C%20quero%20fazer%20um%20or%C3%A7amento!"
                                           target="_blank"><i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix hidden-sm-up"></div>
                        <div class="col-lg-4 col-xl-4 ml-xl-auto">
                            <div class="footer-content pt-0">
                                <h2 class="title">Contato</h2>
                                <form class="margin-clear">
                                    <div class="row">
                                        <div class="col-md-6 form-group has-feedback mb-10">
                                            <label class="sr-only" for="name2">Nome</label>
                                            <input type="text" class="form-control" id="name2" placeholder="Nome"
                                                   required>
                                            <i class="fa fa-user form-control-feedback pr-4"></i>
                                        </div>
                                        <div class="col-md-6 form-group has-feedback mb-10">
                                            <label class="sr-only" for="email2">E-mail</label>
                                            <input type="email" class="form-control" id="email2" placeholder="E-mail"
                                                   required>
                                            <i class="fa fa-envelope form-control-feedback pr-4"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback mb-10">
                                        <label class="sr-only" for="message2">Mensagem</label>
                                        <textarea class="form-control" rows="4" id="message2" placeholder="Mensagem"
                                                  required></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Enviar"
                                           class="margin-clear submit-button radius-50 btn btn-default">
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
        <div class="subfooter default-bg">
            <div class="container">
                <div class="subfooter-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                &copy; {{ config('admin.since_year') }}
                                {{ config('admin.footer_name') }}</b> •
                                @lang('global.all_rights_reserved')
                            </p>

                            <p class="text-center text-sm">
                                @lang('global.produced_by')
                                <a href="{{ config('admin.produced_url') }}" class="text-decoration-none text-bold"
                                   target="_blank"><b>{{ config('admin.produced_by') }}</b></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

        <!-- .whatsapp button start -->
        <!-- ================ -->
        <a href="https://api.whatsapp.com/send?phone=5511948809185&text=Ol%C3%A1%2C%20quero%20fazer%20um%20or%C3%A7amento!"
           class="footer-whatsapp" target="_blank">
            <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path
                    d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
                    fill="#4CAF50"/>
                <path
                    d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                    fill="#FAFAFA"/>
            </svg>
        </a>
        <!-- .whatsapp button end -->

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
<script
    src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js') }}"></script>
<script
    src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script
    src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script
    src="{{ asset('vendor/frontend/template/plugins/rs-plugin-5/js/extensions/revolution.extension.navigation.min.js') }}"></script>

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
