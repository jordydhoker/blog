<?php

namespace App\Http\Controllers;

use App\Share;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ShareController extends Controller
{


    public function store($post_id)
    {
        if(Gate::denies('logged-in')){
            return redirect()->back();
        }

        $share = new Share;
        $share -> user_id = Auth::id();
        $share -> post_id = $post_id;

        $share -> save();

        return redirect()->route('posts.index');

    }



    public function destroy($post_id)
    {

        if(Gate::denies('logged-in')){
            return redirect()->back();
        }
        $share = Share::where('post_id', $post_id)->where('user_id', Auth::id());
        $share->delete();

        return redirect()->route('posts.show',$post_id);
    }
}
