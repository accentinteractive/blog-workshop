@extends('_layouts.app')

@section('content')

    <h1>Authors</h1>

    <ul>
        @foreach($authors as $user)
            <p><a href="{{ route('authors.show', $user->id) }}">{{ $user->name }}</a></p>
        @endforeach
    </ul>

@stop
