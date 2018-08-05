<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use App\Share;
use Illuminate\Support\Facades\Auth;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }

    public function store($post_id)
    {

        $share = new Share;
        $share -> user_id = Auth::id();
        $share -> post_id = $post_id;

        $share -> save();

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = Post::find($id);
        //return view('posts.show')->withPost($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $like = Like::where('post_id', $post_id)->where('user_id', Auth::id());
        $like->delete();

        return redirect()->route('posts.show',$post_id);
    }
}
