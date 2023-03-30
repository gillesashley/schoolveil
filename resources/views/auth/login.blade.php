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
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Login</h3>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Email" value="{{old('email')}}" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   placeholder="password" required autocomplete="current-password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1"
                                       checked="" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">{{__('Login')}}</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">

                                <p class="mb-2 text-muted">{{ __('Forgot Your Password?') }} <a
                                        href="auth-reset-password-v2.html">Reset</a></p>
                            </a>
                        @endif
                        <p class="mb-0 text-muted">Don’t have an account? <a href="{{route('register')}}">Signup</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
