<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | Articles</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container mx-auto mt-4 px-4">
            <!-- BEGIN (write your solution here) -->
            <h1>Статьи</h1>

            @if (empty($articles))
                <p>Статей пока нет</p>
            @else
                <ul>
                    @foreach ($articles as $article)
                        <li>
                            {{ $article['title'] }}
                            @if ($loop->first)
                                <span>Свежая</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
            <!-- END -->
        </div>
    </body>
</html>
