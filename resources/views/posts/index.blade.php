@extends('_layouts.app')

@section('content')

    <h1>Blog workshop</h1>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
        <p>{!! $post->body !!}</p>
    @endforeach

@stop
