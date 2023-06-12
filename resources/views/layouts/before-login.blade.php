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
    @yield('cssjs')

    {{-- style --}}
    {{-- <style>
        body {
            font-family: "Fira Sans", sans-serif;
        }
    </style> --}}
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
</html>
