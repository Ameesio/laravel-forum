<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    public static function newPost($title, $section, $gilera,$content) {
        $post = new Post;
        $post->user_id = Auth::id();
        $post->title = $title;
        $post->section = $section;
        $post->model = $gilera;
        $post->content = $content;
        $post->created_at = date('Y-m-d ') . date('H:i:s');
        $post->updated_at = date('Y-m-d ') . date('H:i:s');
        $post->save();

        return $post;
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }
}
