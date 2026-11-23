<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container mx-auto mt-4 px-4">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/articles">Articles</a>
            <!-- BEGIN (write your solution here) -->
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
            <!-- END -->
        </div>
    </body>
</html>
