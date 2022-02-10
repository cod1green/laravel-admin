<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/ctforcabruta/logo.png')  }}">

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
    <link href="{{ asset('vendor/frontend/template/css/skins/vivid_red.css') }}" rel="stylesheet">

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
        <div id="home" class="header-top colored">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-sm-6 col-lg-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="flickr">
                                    <a href="https://www.instagram.com/ctforcabruta" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/muaythaicotia" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="xing">
                                    <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas."
                                       target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button"
                                            class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-share-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="flickr">
                                            <a href="https://www.instagram.com/ctforcabruta" target="_blank">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/muaythaicotia" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="xing">
                                            <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas."
                                               target="_blank"><i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-md-down">
                                <li class="list-inline-item">
                                    <i class="fa fa-map-marker pr-1 pl-2"></i>
                                    R. Caminho Existente, 26 - Jardim Santana, Cotia-SP, 06719-257
                                </li>
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>(011) 96933-9297</li>
                                <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i>
                                    <a class="text-decoration-none" href="mailto:ctforcabruta@gmail.com">ctforcabruta@gmail.com</a>
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
                                    <img id="logo_img" width="63" height="63"
                                         src="{{ asset('img/ctforcabruta/logo.png')  }}"
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
                                                <img id="logo-img-mobile" width="50" height="50"
                                                     src="{{ asset('img/ctforcabruta/logo.png')  }}"
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
                                                <a class="nav-link smooth-scroll active" href="#home">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#about">Sobre</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#class">Aulas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#team">Time</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#shop">Loja</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#partners">Parceiros</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link smooth-scroll" href="#footer">Contato</a>
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

                            {{--                            <div class="btn-group">--}}
                            {{--                                <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"--}}
                            {{--                                        id="header-drop-2" data-toggle="dropdown" aria-haspopup="true"--}}
                            {{--                                        aria-expanded="false">--}}
                            {{--                                    <i class="fa fa-shopping-basket"></i>--}}
                            {{--                                    <!-- <span class="cart-count default-bg">8</span> -->--}}
                            {{--                                </button>--}}
                            {{--                                <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"--}}
                            {{--                                    aria-labelledby="header-drop-2">--}}
                            {{--                                    <li>--}}
                            {{--                                        <table class="table table-hover">--}}
                            {{--                                            <thead>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <th class="quantity">QTD</th>--}}
                            {{--                                                <th class="product">Produto</th>--}}
                            {{--                                                <th class="amount">Subtotal</th>--}}
                            {{--                                            </tr>--}}
                            {{--                                            </thead>--}}
                            {{--                                            <tbody>--}}
                            {{--                                            <!-- <tr>--}}
                            {{--                                                <td class="quantity">2 x</td>--}}
                            {{--                                                <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>--}}
                            {{--                                                <td class="amount">$199.00</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="quantity">3 x</td>--}}
                            {{--                                                <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>--}}
                            {{--                                                <td class="amount">$299.00</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="quantity">3 x</td>--}}
                            {{--                                                <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>--}}
                            {{--                                                <td class="amount">$1499.00</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="total-quantity" colspan="2">Total 8 Items</td>--}}
                            {{--                                                <td class="total-amount">$1997.00</td>--}}
                            {{--                                            </tr> -->--}}
                            {{--                                            </tbody>--}}
                            {{--                                        </table>--}}
                            {{--                                        <div class="panel-body text-right">--}}
                            {{--                                            <a href="#" class="btn btn-group btn-gray btn-sm">Ver carrinho</a>--}}
                            {{--                                            <a href="#" class="btn btn-group btn-gray btn-sm">Checkout</a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
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
                <div id="slider-banner-fullwidth-big-height" class="slider-banner-fullwidth-big-height rev_slider"
                     data-version="5.0">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        <li class="text-center" data-transition="crossfade" data-slotamount="default"
                            data-masterspeed="default" data-title="Próximo">

                            <!-- main image -->
                            <img src="{{ asset('img/muaythai/slide-1.jpg') }}"
                                 alt="slidebg1"
                                 data-bgposition="center top"
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
                            <div class="tp-caption large_white"
                                 data-x="center"
                                 data-y="150"
                                 data-start="1000"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                &nbsp;
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_white tp-resizeme hidden-xs"
                                 data-x="center"
                                 data-y="250"
                                 data-start="1300"
                                 data-width="500"
                                 data-transform_idle="o:1;"
                                 data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                <div class="separator light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_white hidden-xs"
                                 data-x="center"
                                 data-y="290"
                                 data-start="1300"
                                 data-width="850"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                Chega de rotina! Bora treinar 💪🏽🔥!<br>
                                O Muaythai é um esporte dinâmico, que promove a melhora do condicionamento<br>
                                físico e mental, além de promover o fortalecimento muscular,<br>
                                aumenta a elasticidade e favorece o funcionamento cardiovascular.<br>
                                Estamos te esperando 🥊🥊😎.
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption small_white text-center"
                                 data-x="center"
                                 data-y="470"
                                 data-start="1600"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                <a href="https://www.instagram.com/ctforcabruta" target="_blank"
                                   class="btn btn-default btn-animated margin-clear">Instagram <i
                                        class="fa fa-instagram"></i></a>
                            </div>

                        </li>
                        <!-- slide 1 end -->

                        <!-- slide 2 start -->
                        <!-- ================ -->
                        <li class="text-center" data-transition="crossfade" data-slotamount="default"
                            data-masterspeed="default" data-title="Próximo">

                            <!-- main image -->
                            <img src="{{ asset('img/muaythai/slide-2.jpg') }}"
                                 alt="slidebg2"
                                 data-bgposition="center top"
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
                            <div class="tp-caption large_white"
                                 data-x="center"
                                 data-y="150"
                                 data-start="1000"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">&nbsp;
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_white tp-resizeme hidden-xs"
                                 data-x="center"
                                 data-y="250"
                                 data-start="1300"
                                 data-width="500"
                                 data-transform_idle="o:1;"
                                 data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                <div class="separator light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_white hidden-xs"
                                 data-x="center"
                                 data-y="290"
                                 data-start="1300"
                                 data-width="750"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                Aulas de Muaythai para pessoas de todas as idades.<br>
                                Venha fazer uma aula experimental com a gente! 🥊
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption small_white text-center"
                                 data-x="center"
                                 data-y="380"
                                 data-start="1600"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas."
                                   target="_blank" class="btn btn-success btn-animated margin-clear">WhatsApp <i
                                        class="fa fa-whatsapp"></i></a>
                            </div>

                        </li>
                        <!-- slide 2 end -->

                        <!-- slide 3 start -->
                        <!-- ================ -->
                        <li class="text-center" data-transition="crossfade" data-slotamount="default"
                            data-masterspeed="default" data-title="Próximo">

                            <!-- main image -->
                            <img src="{{ asset('img/muaythai/slide-3.jpg') }}"
                                 alt="slidebg3"
                                 data-bgposition="center top"
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
                            <div class="tp-caption large_white"
                                 data-x="center"
                                 data-y="150"
                                 data-start="1000"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_white tp-resizeme hidden-xs"
                                 data-x="center"
                                 data-y="250"
                                 data-start="1300"
                                 data-width="500"
                                 data-transform_idle="o:1;"
                                 data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                <div class="separator light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_white hidden-xs"
                                 data-x="center"
                                 data-y="290"
                                 data-start="1300"
                                 data-width="750"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                Estamos abertos a duvidas, criticas e sugestões para melhorar o<br>
                                atentimento da academia, mande um e-mail de deixe seu feedback.
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption small_white text-center"
                                 data-x="center"
                                 data-y="380"
                                 data-start="1600"
                                 data-width="650"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;s:500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                <a href="#footer" class="btn btn-default btn-animated margin-clear smooth-scroll">E-mail
                                    <i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <!-- slide 3 end -->
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

{{--@include('the_project.layouts.ctforcabruta._partials.about')--}}
{{--@include('the_project.layouts.ctforcabruta._partials.class')--}}
{{--@include('the_project.layouts.ctforcabruta._partials.teams')--}}
{{--@include('the_project.layouts.ctforcabruta._partials.products')--}}
{{--@include('the_project.layouts.ctforcabruta._partials.partners')--}}
{{--@include('the_project.layouts.ctforcabruta._partials.aditional')--}}

<!-- footer top end -->
    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-content pt-0">
                                <div class="logo-footer d-flex justify-content-lg-center">
                                    <img id="logo-footer" width="150" height="150"
                                         src="{{ asset('img/ctforcabruta/logo.png')  }}" alt="">
                                </div>
                                <p>O nosso objetivo é sempre proporcionar qualidade de vida para nossos alunos através
                                    de aulas de Muay Thai, Boxe, Jiu-jitsu e Fitdance, sempre com responsabilidade e
                                    segurança com o nosso time de profissionais. As artes marciais e os esportes de
                                    contatos são uma terapia para o corpo físico e mental.</p>
                                <div class="icons-block mt-10 mb-10">
                                    <i class="fa fa-cc-mastercard"></i>
                                    <i class="fa fa-cc-visa"></i>
                                    <!-- <i class="fa fa-cc-paypal"></i> -->
                                    <!-- <i class="fa fa-cc-amex"></i> -->
                                    <!-- <i class="fa fa-cc-discover"></i> -->
                                    <!-- <i class="fa fa-cc-stripe"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-content pt-0">
                                <h2 class="title">Siga nossas redes sociais e fique ligado em todas as novidades!</h2>
                                <div class="separator-2"></div>
                                <p>Você já conhece e segue nossas redes sociais? Seja no Instagram ou no Facebook não
                                    perca tempo e fique por dentro de tudo que acontece dentro e fora do Muay Thai,
                                    Boxe, Jiu-jitsu e Fitdance, além de notícias relacionadas à academia, estaremos
                                    divulgando dicas de alimentação, suplementação, eventos, etc.
                                <p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="flickr">
                                        <a href="https://www.instagram.com/ctforcabruta" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/muaythaicotia" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="xing">
                                        <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas."
                                           target="_blank">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix hidden-sm-up"></div>
                        <div class="col-lg-5 col-xl-5 ml-xl-auto">
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
                            <div class="separator-2"></div>
                            <ul class="list-icons">
                                <li>Matriz</li>
                                <li>
                                    <i class="fa fa-map-marker pr-10 text-default"></i> R. Caminho Existente, 26 -
                                    Jardim Santana, Cotia-SP
                                </li>
                            </ul>

                            <div class="separator-2"></div>
                            <ul class="list-icons">
                                <li>Filial</li>
                                <li>
                                    <i class="fa fa-map-marker pr-10 text-default"></i> R. Perola, 147 - Jardim Nomura,
                                    Cotia-SP
                                </li>
                            </ul>

                            <div class="separator-2"></div>
                            <ul class="list-icons">
                                <li><i class="fa fa-phone pr-10 text-default"></i> (011) 96933-9297</li>
                                <li>
                                    <a class="text-decoration-none" href="mailto:ctforcabruta@gmail.com">
                                        <i class="fa fa-envelope-o pr-10"></i>ctforcabruta@gmail.com
                                    </a>
                                </li>
                            </ul>
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
                            <p class="text-center">© {{ date('Y') }} CT Força Bruta • Todos os direitos reservados.</p>
                            <div class="text-center text-sm">
                                Produzido por <a href="https://cod1green.com.br" target="_blank"><b>Cod1green</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

        <!-- .whatsapp button start -->
        <!-- ================ -->
        <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas."
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
