@extends('layouts.master')

@section('content')
    <main class="showPost">

<article>
    <a href="{{route('posts.profile', $post->user_id)}}"><h3>{{$post->user->name}}</h3></a>
    <p class="description">
        {{ $post->description }}
    </p>
    <p>
        {{ $post->body }}

    </p>
</article>
        <div>Like</div>
        <div>Share</div>

    </main>

@endsection