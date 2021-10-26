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
        • {{ ucfirst(config('admin.prefix')) }}
    </title>

    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">

    @stack('css')
    @stack('styles')

    @livewireStyles
</head>

<body
    class="hold-transition sidebar-mini accent-{{ config('admin.color') }}
    {{ setting('sidebar_collapse') ? 'sidebar-collapse': '' }}">

<div id="app" class="wrapper">
    @include('layouts.backend.partials.navbar')

    @include('layouts.backend.partials.sidebar-left')

    <div class="content-wrapper">
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    @include('layouts.backend.partials.sidebar-rigth')

    @include('layouts.backend.partials.footer')
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<script src="{{ asset('js/backend.js') }}"></script>

@stack('before-livewire-scripts')
@livewireScripts
@stack('after-livewire-scripts')

@stack('js')
@stack('scripts')

</body>
</html>
