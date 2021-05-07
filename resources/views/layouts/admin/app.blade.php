<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            Admin
        @show
    </title>

    @include('layouts.admin.partials.styles')

    @yield('css')
    @stack('css')

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.admin.partials.navbar')

    @include('layouts.admin.partials.sidebar-left')

    <div class="content-wrapper">
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    @include('layouts.admin.partials.sidebar-rigth')

    @include('layouts.admin.partials.footer')
</div>

@include('layouts.admin.partials.scripts')

@yield('js')
@stack('js')

@livewireScripts
</body>

</html>
