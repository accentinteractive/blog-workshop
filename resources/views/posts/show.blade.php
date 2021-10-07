@extends('_layouts.app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <p><a href="{{ route('authors.show', $post->user->id) }}">{{ $post->user->name }}</a></p>
    <p>{!! $post->body !!}</p>

@stop
