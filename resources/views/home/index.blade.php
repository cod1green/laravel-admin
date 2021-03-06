@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <div class="container">
        @include('components.alerts')

        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1>Em contrução, aguarde novidades ...</h1>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        body {
            background-image: url('/svg/construction.svg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: auto 100%;
        }
    </style>
@endpush
