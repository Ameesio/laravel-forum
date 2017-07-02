<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Flag extends Model
{
    public static function flagComment($commentId) {
        $flag = new Flag;
        $flag->user_id = Auth::id();
        $flag->comment_id = $commentId;

        $flag->save();
    }

    public function comment() {
        return $this->belongsTo('App\comment');
    }
}