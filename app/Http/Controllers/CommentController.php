<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Flag;
use App\Like;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request, $postId) {
        Comment::newComment($request->input('content'), $postId);
        return redirect()->route('showPost', $postId);
    }

    public function likeComment($postId, $commentId) {
        Like::likeComment($commentId);
        return redirect()->route('showPost', $postId);
    }

    public function flagComment($postId, $commentId) {
        Flag::flagComment($commentId);
        return redirect()->route('showPost', $postId);
    }
}
