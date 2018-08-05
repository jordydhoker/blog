@extends('layouts.master')

@section('content')
    <main class="createPost">


            <form method="POST" action="{{ route('posts.store') }}">
                @csrf


                <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" required autofocus maxlength="280"></textarea>
                </div>


                <div>
                <label for="body">Body</label>

                <textarea id="body" name="body" required autofocus></textarea>


                <input type="submit" class="submit" value="Post">
                </div>

            </form>
    </main>

    @endsection