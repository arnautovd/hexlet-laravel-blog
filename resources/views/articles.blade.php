@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <p>Тут будут статьи</p>

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
@endsection
