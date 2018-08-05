@extends('layouts.master')

@section('content')
        <main class="masonry-home">
            @foreach($posts as $post)
            <a href="{{route('posts.show',$post->id)}}">
            <article class="linkArticle"><h3>{{$post->user->name}}</h3>
                <p>{{$post->description}}</p>
            </article>
            </a>
            @endforeach



            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/600x110">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>
            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/500x1000">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>
            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/600x110">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>
            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/500x1000">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>
            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/500x200">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>
            <article><h3>testmaatie</h3>
                <img src="http://via.placeholder.com/500x200">
                <p>testevougnwpkercgbahbfoxaoscgnaxrigxlcjhsbakhxbkscdbnsxbcjvbcdmcgxcvncsdvoguwcgaiergxmscbgosdiuhvg</p>
            </article>


</main>
@endsection