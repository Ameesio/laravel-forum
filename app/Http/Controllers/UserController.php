<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myAccount() {
        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('myAccount')->with('posts', $posts);
    }

    public function showUser($userId) {
        $user = User::find($userId);
        return view('showUser')->with('user', $user);
    }
}
