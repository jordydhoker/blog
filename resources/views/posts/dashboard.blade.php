@extends('layouts.master')

@section('content')

        <main class="dashboardMain">
            <div class="tableContainer">
            <table>
                <tr>
                    <th>id</th>
                    <th>user</th>
                    <th>description</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>deleted at</th>
                    <th>likes</th>
                    <th>shares</th>
                </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>{{$post->deleted_at}}</td>
                    <td>{{$post->likes()->count()}}</td>
                    <td>{{$post->shares()->count()}}</td>
                    <td><a href="{{route('posts.show',$post->id)}}">SHOW</a></td>
                    <td><a href="{{route('posts.edit',$post->id)}}">EDIT</a></td>
                    <td><a href="{{route('posts.destroy',$post->id)}}">DESTROY</a></td>
                </tr>
            @endforeach
            </table>
            </div>

            <div class="tableContainer">
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>posts</th>
                    <th>likes</th>
                    <th>shares</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                        <td>{{$user->posts()->count()}}</td>
                        <td>{{$user->likes()->count()}}</td>
                        <td>{{$user->shares()->count()}}</td>
                        <td><a href="{{route('posts.profile',$user->id)}}">PROFILE</a></td>
                        <td><a href="{{route('users.destroy',$user->id)}}">DESTROY</a></td>
                    </tr>
                @endforeach
            </table>
            </div>





</main>
@endsection