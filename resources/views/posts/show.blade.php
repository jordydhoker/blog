@extends('layouts.master')

@section('content')
    <main class="showPost">

<div class="post">
    <p class="description">
        {{ $post->description }}
    </p>
    <p>
        {{ $post->body }}

    </p>
</div>
        <div>Like</div>
        <div>Share</div>

    </main>

@endsection