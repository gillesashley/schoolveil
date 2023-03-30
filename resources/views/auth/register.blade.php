@extends('layouts.app')

@section('header')
@endsection

@section('sidenav')
@endsection

@section('content')
    <div class="auth-wrapper aut-bg-img-side cotainer-fiuid align-items-stretch">
        <div class="row align-items-center w-100 align-items-stretch bg-white">
            <div class="d-none d-lg-flex col-lg-8 aut-bg-img align-items-center d-flex justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-white mb-5">Login in Datta Able</h1>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
            </div>
            <div class="col-lg-4 align-items-stret h-100 align-items-center d-flex justify-content-center">
                <div class=" auth-content text-center">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="mb-4">
                            <i class="feather icon-user-plus auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Sign up</h3>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name"
                                   autofocus/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                                   name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" id="password"
                                   class="form-control @error('password') is-invalid @enderror" placeholder="password"
                                   required autocomplete="new-password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" id="password-confirm"
                                   class="form-control" placeholder="confirm password"
                                   required name="password_confirmation"
                                   autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">Sign up</button>
                        <p class="mb-0 text-muted">Already have an account? <a href="{{ route('login') }}"> Log in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
