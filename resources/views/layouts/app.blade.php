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
    @yield('css')


    {{-- style --}}
    {{-- <style>
        body {
            font-family: "Fira Sans", sans-serif;
        }
    </style> --}}
</head>
<body>
    <!-- Header -->
    <nav class="navbar sticky-top container-fluid navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <div class="navbar-collapse container-fluid d-flex justify-content-between m-0" id="navbar">
                <div class="navbar-brand ms-2" href="#">
                    <img src="{{ URL::asset('assets/BiFestment-Logo.png') }}" width="200px" alt="">
                </div>

                <div class="collapse navbar-collapse search_box d-flex justify-content-center">
                    <input type="search" placeholder="Search event here">
                    <span class="fa fa-search"></span>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText"> -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end">
                        <li><a class="navmenu" href="#">My Events</a></li>
                        <li><a class="navmenu" href="#">Favourite</a></li>
                        <li><a class="navmenu" href="#">Notification</a></li>
                        <li><a class="navmenu" href="#">Profile</a></li>
                    </ul>
                <!-- </div> -->
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div class="content mt-3 ms-3 me-3">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="mt-4 text-center text-white">
        <div class="footer">
            <!-- Logo -->
            <div class="p-1 pt-3 m-0">
                <img src="{{ URL::asset('assets/BiFestment-Logo.png') }}" width="200px" alt="">
            </div>
            <!-- Copyright -->
            <div class="text-center pb-3">Copyright 2023, All Rights Reserved</div>
         </div>
    </footer>
</body>
</html>
