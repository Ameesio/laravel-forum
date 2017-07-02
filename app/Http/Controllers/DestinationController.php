<?php

namespace App\Http\Controllers;


use App\Customisation;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    public function createPost() {
        return view('createPost');
    }

    public function kleineVragen() {
        $posts = Post::where('section', 'kleineVragen')->get();
        return view('kleineVragen')->with(['posts' => $posts]);
    }

    public function groteVragen() {
        $posts = Post::where('section', 'groteVragen')->get();
        return view('groteVragen')->with(['posts' => $posts]);
    }

    public function onderdelen() {
        $posts = Post::where('section', 'onderdelen')->get();
        return view('onderdelen')->with(['posts' => $posts]);
    }

    public function modelPagina($modelNaam) {
        $posts = Post::where('model', $modelNaam)->get();
        return view('modelPagina')->with(['posts' => $posts, 'modelNaam' => $modelNaam]);
    }

    public function customiseAccount() {
        $account = Customisation::where('user_id', Auth::id())->get();

        return view('customiseAccount')->with('account', $account);
    }

    public function adminPanel() {
        $posts = Post::get();
        $users = User::get();
        return view('adminPanel')->with(['posts' => $posts, 'users' => $users]);
    }
}
