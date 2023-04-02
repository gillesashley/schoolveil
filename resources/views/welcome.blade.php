@extends('layouts.app')
@section('header')
@endsection

@section('sidenav')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('customAssets/style.css')}}">
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">School Veil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav mr-lg-5">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
            <div>
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

@endsection
