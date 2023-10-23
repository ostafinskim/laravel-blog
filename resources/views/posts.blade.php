@extends('components.layout')

@section('content')
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <a href="#">{{ $post->category->name }}</a>

            <p>
                {{ $post->excerpt }} [...]
            </p>
        </article>
    @endforeach
@endsection
