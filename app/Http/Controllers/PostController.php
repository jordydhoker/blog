<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(20);
        $users = User::all();
        return view('posts.index')->withPosts($posts)->withUsers($users);
    }

    public function profile($id){

        $user = User::find($id);
        if($user != null) {
            $posts = $user->posts;
            return view('posts.profile', ['posts' => $posts, 'user' => $user]);
        }else{
            return redirect()->back();
        }
    }
    public function dashboard(){

        if(Gate::denies('admin')){
            return redirect()->back();
        }

        $posts = Post::withTrashed()->orderBy('id', 'desc')->get();
        $users = User::all();
        return view('posts.dashboard')->withPosts($posts)->withUsers($users);;
    }


    public function create()
    {
        if(Gate::denies('logged-in')){
            return redirect()->back();
        }
        return view('posts.create');
    }


    public function store(Request $request)
    {
        if(Gate::denies('logged-in')){
            return redirect()->back();
        }
        $this->validate($request,array(
           'description' => 'required|max:280',
            'body' => 'required'
        ));

        $post = new Post;
        $post -> user_id = Auth::id();
        $post ->description = $request->description;
        $post ->body = $request->body;

        $post -> save();

        return redirect()->route('posts.show',$post->id);

    }

    public function show($id)
    {
        $post = Post::find($id);
        if($post != null) {
            return view('posts.show')->withPost($post);
        }else{
            return redirect()->back();
        }
    }


    public function edit($id)
    {
        $post = Post::find($id);
        if(Gate::denies('change-post',$post)){
            return redirect()->back();
        }
        if($post != null) {
            return view('posts.edit')->withPost($post);
        }else{
            return redirect()->back();
        }
    }


    public function update(Request $request, $id)
    {

        $this->validate($request,array(
            'description' => 'required|max:280',
            'body' => 'required'
        ));
        $post = Post::find($id);
        if(Gate::denies('change-post',$post)){
            return redirect()->back();
        }
        $post ->description = $request->description;
        $post ->body = $request->body;

        $post -> save();

        return redirect()->route('posts.show',$post->id);
    }

    public function delete($id)
    {

        $post = Post::find($id);
        if(Gate::denies('change-post',$post)){
            return redirect()->back();
        }
        if($post != null) {
            $post->delete();
        }

        return redirect()->route('posts.profile', $post->user_id);
    }
    public function destroy($id)
    {

        if(Gate::denies('admin')){
            return redirect()->back();
        }

        $post = Post::find($id);
        if($post != null) {
            $post->likes()->delete();
            $post->shares()->delete();
            $post->forceDelete();
        }

        return redirect()->route('posts.dashboard');
    }
}
