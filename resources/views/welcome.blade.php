<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container mx-auto mt-4 px-4">
            <!-- BEGIN (write your solution here) -->
            <a href="/about">О блоге</a>
            <a href="/articles">Статьи</a>
            <!-- END -->
        </div>
    </body>
</html>
