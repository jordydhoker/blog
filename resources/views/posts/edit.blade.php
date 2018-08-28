@extends('layouts.master')

@section('content')
    <main class="createPost">


            <form method="POST" action="{{ route('posts.update',$post->id)}}">
                @csrf


                <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" required autofocus maxlength="280">{{$post->description}}</textarea>
                </div>


                <div>
                <label for="body">Body</label>

                <textarea id="body" name="body" required autofocus>{{$post->body}}</textarea>


                <input type="submit" class="submit" value="Post">
                </div>

            </form>
    </main>

    @endsection