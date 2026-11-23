@extends('layouts.app')

@section('title', 'О блоге')

@section('header', 'О блоге')

@section('content')
    <p>Эксперименты с Ларавелем на Хекслете</p>

    @isset($team)
        <h2>Команда</h2>
        <ul>
            @foreach ($team as $member)
                <li>{{ $member['name'] }} — {{ $member['position'] }}</li>
            @endforeach
        </ul>
    @endisset
@endsection
