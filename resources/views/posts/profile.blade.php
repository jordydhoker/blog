@extends('layouts.master')

@section('content')
    <main class="profile">
        @foreach($posts as $post)
    <a href="{{route('posts.show',$post->id)}}">
        <article class="linkArticle"><h3>{{$post->user->name}}</h3>
            <p>{{$post->description}}</p>
        </article>
    </a>
@endforeach
    </main>

@endsection