<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Like extends Model
{
    public static function likeComment($commentId) {
        $like = new Like;
        $like->user_id = Auth::id();
        $like->comment_id = $commentId;

        $like->save();
    }

    public function comment() {
        return $this->belongsTo('App\comment');
    }
}
