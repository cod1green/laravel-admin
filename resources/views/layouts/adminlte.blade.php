<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            Admin
        @show
    </title>

    @include('components.styles')

    @livewireStyles

    @yield('styles')
    @stack('styles')
</head>

<body
    class="hold-transition sidebar-mini accent-{{ config('project.color') }}
    {{ config('project.sidebar_collapse') ? 'sidebar-collapse': '' }}">

<div id="app" class="wrapper">
    @include('components.navbar')

    @include('components.sidebar-left')

    <div class="content-wrapper">
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    @include('components.sidebar-rigth')

    @include('components.footer')
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

@include('components.scripts')

@livewireScripts

@yield('scripts')
@stack('scripts')
</body>
</html>
