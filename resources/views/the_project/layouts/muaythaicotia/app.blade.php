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
    <link href="{{ asset('vendor/frontend/template/plugins/htmlcoder/sliders/fullscreen-slider-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/frontend/template/plugins/htmlcoder/sliders/slider-style.css') }}" rel="stylesheet">
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
<body class="front-page transparent-header">

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
                    <div class="col-3 col-sm-6 col-lg-12">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="flickr"><a href="https://www.instagram.com/muaythaicotia" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="facebook"><a href="https://www.facebook.com/muaythaicotia" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="xing"><a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="flickr"><a href="https://www.instagram.com/muaythaicotia" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a href="https://www.facebook.com/muaythaicotia" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="xing"><a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-md-down float-right">
                                <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>R. Pérola, 147 - Jardim Nomura, Cotia - SP, 06717-120</li>
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>+55 11 96933-9297</li>
                                <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i><a class="text-decoration-none" href="mailto:muaythaicotia@gmail.com">muaythaicotia@gmail.com</a></li>
                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
</div>
<!-- header-container end -->
<!-- banner start -->
<!-- ================ -->
<div class="banner clearfix">

    <div id="slider-banner-fullscreen" class="hc-slideshow hc-slideshow--fullscreen carousel slide carousel-fade" data-ride="carousel" data-interval="9000" data-wrap="true">

        <ol class="carousel-indicators">
            <li data-target="#slider-banner-fullscreen" data-slide-to="0" class="active"></li>
            <li data-target="#slider-banner-fullscreen" data-slide-to="1"></li>
            <li data-target="#slider-banner-fullscreen" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="fullscreen-slide">
                    <div class="background-image" style="background-image:url('{{ asset('img/slider-fullscreen-muay-1.jpg') }}');"></div>
                    <div class="background-image-overlay"></div>
                    <div class="container">
                        <div class="hc-slideshow-caption hc-slideshow-caption--large p-3 text-center w-100">
                            <h1 class="text-white text-capitalize animated fadeInDown hc-animation-delay-1000">&nbsp;</h1>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <a href="https://api.whatsapp.com/send?phone=5511969339297&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas." target="_blank" class="btn radius-50 btn-success btn-xl animated fadeInLeft hc-animation-delay-1500"><i class="pl-2 fa fa-whatsapp"></i> WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="fullscreen-slide">
                    <div class="background-image" style="background-image:url('{{ asset('img/slider-fullscreen-muay-2.jpg') }}');"></div>
                    <div class="background-image-overlay"></div>
                    <div class="container">
                        <div class="hc-slideshow-caption hc-slideshow-caption--large p-3 text-center w-100">
                            <h1 class="text-white text-capitalize animated fadeInDown hc-animation-delay-1000">&nbsp;</h1>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <a href="https://www.instagram.com/muaythaicotia" target="_blank" class="btn radius-50 btn-dark btn-xl animated fadeInLeft hc-animation-delay-1500 ml-3"><i class="pl-2 fa fa-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="fullscreen-slide">
                    <div class="background-image" style="background-image:url('{{ asset('img/slider-fullscreen-muay-3.jpg') }}');"></div>
                    <div class="background-image-overlay"></div>
                    <div class="container">
                        <div class="hc-slideshow-caption hc-slideshow-caption--large p-3 text-center w-100">
                            <h1 class="text-white text-capitalize animated fadeInDown hc-animation-delay-1000">&nbsp;</h1>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <p class="animated fadeInUp hc-animation-delay-1250">&nbsp;</p>
                            <a href="mailto:muaythaicotia@gmail.com" class="btn radius-50 btn-dark btn-xl animated fadeInLeft hc-animation-delay-1500 ml-4"><i class="pl-2 fa fa-envelope-o"> Contato</i></a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control carousel-control-prev" href="#slider-banner-fullscreen" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="carousel-control-text">Anterior</span>
            </a>
            <a class="carousel-control carousel-control-next" href="#slider-banner-fullscreen" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="carousel-control-text">Próximo</span>
            </a>
        </div>
    </div>

</div>
<!-- banner end -->

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

<!-- Google Maps javascript -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=your_google_map_key"></script> -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('vendor/frontend/template/js/google.map.config.js') }}"></script>

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
