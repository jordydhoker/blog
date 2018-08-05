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
    <p>{{$post->likes()->count()}} Likes</p>
    <p>{{$post->shares()->count()}} Shares</p>
</article>

        @if ($post->likes()->where('user_id', Auth::id())->first())
            <a href="{{route('likes.destroy', $post->id)}}"><div class="liked">Unlike</div></a>
            @else
        <a href="{{route('likes.store', $post->id)}}"><div>Like</div></a>

        @endif

        <a href="{{route('shares.store', $post->id)}}"><div>Share</div></a>

            @if (Auth::id() == $post->user_id)
        <div>Edit</div>

        <a href="{{route('posts.destroy', $post->id)}}"><div>Delete</div></a>
        @endif
    </main>

@endsection