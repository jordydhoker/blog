<?php

namespace App\Http\Controllers;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LikeController extends Controller
{

    public function store($post_id)
    {

        if(Gate::denies('logged-in')){
            return redirect()->back();
        }

        $like = new Like;
        $like -> user_id = Auth::id();
        $like -> post_id = $post_id;

        $like -> save();

        return redirect()->route('posts.show',$post_id);

    }


    public function destroy($post_id)
    {

        if(Gate::denies('logged-in')){
            return redirect()->back();
        }

        $like = Like::where('post_id', $post_id)->where('user_id', Auth::id());
        $like->delete();

        return redirect()->route('posts.show',$post_id);
    }
}
