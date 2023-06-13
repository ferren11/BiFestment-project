@extends('layouts.before-login')

@section('title', 'Login')

@section('cssjs')
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
@endsection

@section('header')
{{-- navbar --}}
<nav class="navbar navbar-expand-lg">
    <a href="{{ route('welcome') }}" >
        <div class="navbar-brand">
            <img src="{{ URL::asset('assets/BiFestment-Logo.png') }}" width="160px" alt="">
        </div>
    </a>
    <div class="slogan fs-3 fw-semibold" style="padding-top: 0.8rem">| Invest in Yourself</div>
</nav>
@endsection

@section('content')
{{-- content --}}
<div class="container mt-5">
    <div class="col content">
        <div class="row container-lg py-5 white text-white" style="">
            <h1 class="display-6 bold" style="font-weight: 600">Welcome To Bifestment</h1>
            <p class="lead" style="font-weight: 400">
                Bifestment is a dedicated platform that provides courses
                and webinars arranged for Binusian.
            </p>
        </div>

        <div class="row form-container text-white " style="margin-left: 10%; margin-right: 10%">
            <form class="container-lg" method="POST" action="{{ route('loginSubmit') }}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Binusian Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@binus.ac.id" value="{{ old('email') }}"/>

                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="min. consists 8 characters"/>

                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked />
                        <label class="form-check-label" for="remember-me"> Remember me </label>
                    </div>
                    </div>

                    <div class="col">
                    <!-- Simple link -->
                    <a class="link-light" href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a class="link-light" href="{{ route('registerIndex') }}">Register</a></p>
                    {{-- <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
