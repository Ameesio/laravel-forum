<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{

    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function like() {
        return $this->hasMany('App\Like');
    }

    public function flag() {
        return $this->hasMany('App\Flag');
    }

    public static function newComment($content, $postId){
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->content = $content;
        $comment->created_at = date('Y-m-d ') . date('H:i:s');
        $comment->updated_at = date('Y-m-d ') . date('H:i:s');
        $comment->post_id = $postId;
        $comment->save();

        return $comment;
    }
}
