<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id){

    }
    public function destroy($id)
    {

        if(Gate::denies('admin')){
            return redirect()->back();
        }

        $user = User::find($id);
        if($user != null) {
            $user->posts()->forceDelete();
            $user->likes()->delete();
            $user->shares()->delete();
            $user->delete();
        }

        return redirect()->route('posts.dashboard');
    }
}
