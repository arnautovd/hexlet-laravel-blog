@extends('layouts.app')

@section('content')
<h1>Connected to {{ $dbName }}</h1>
{{-- BEGIN (write your solution here) --}}
<p>Build {{ config('app.build') }}</p>
{{-- END --}}
@endsection
