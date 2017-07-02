<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function homePosts() {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('welcome')->with(['posts' => $posts]);
    }

    public function newPost(Request $request) {
        Post::newPost($request->input('title'), $request->input('section'), $request->input('gilera'), $request->input('content'));
        $succes = true;
        return redirect()->route('myAccount')->with('succes', $succes);
    }

    public function showPost($postId) {
        $post = Post::find($postId);
        return view('showPost')->with('post', $post);
    }

    public function deletePost($postId) {
        Post::where('id', $postId)->delete();
        return redirect()->route('myAccount');
    }
}
