<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('name', 'BiFestment') }} || @yield('title')</title>

    <!-- Fonts: Ganti Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
    @yield('cssjs')

    <style>
        body {
            background-image: url('../assets/main-background.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
          /* background-color: #0084B1; Replace with your desired color */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar sticky-top container-fluid navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <div class="navbar-collapse container-fluid d-flex justify-content-between m-0" id="navbar">
                <a href="{{ route('homepage') }}">
                    <div class="navbar-brand ms-2">
                        <img src="{{ URL::asset('assets/BiFestment-Logo.png') }}" width="200px" alt="bifestment-logo">
                    </div>
                </a>

                <div class="collapse navbar-collapse search_box d-flex justify-content-center">
                    <input type="search" placeholder="Search event here">
                    <span class="fa fa-search"></span>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText"> -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end">
                        <li><a class="navmenu" href="{{ route('showHistory') }}">My Events</a></li>
                        <li><a class="navmenu" href="{{ route('favouriteIndex') }}">Favourite</a></li>
                        <li><a class="navmenu" href="{{ route('notificationIndex') }}">Notification</a></li>
                        <li><a class="navmenu" href="{{ route('showProfile') }}">Profile</a></li>
                    </ul>
                <!-- </div> -->
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text-left" style="margin-top: 220px; height:300px; color:white;">
              <h1>Site under construction</h1>
              <p>We sincerely apologize for the inconvenience. We still construct the page you're looking for. Don't you worry, the best is yet to come.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center" style="margin-top: 60px; height:300px;">
              <img src="{{ URL::asset('assets/under-construction.png') }}" alt="Image" class="img-fluid" width="500px">
            </div>
          </div>
        </div>
    </div>
</body>
</html>
