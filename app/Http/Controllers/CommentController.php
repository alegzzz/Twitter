<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($idea)
    {
        $comment = new Comment();
        $comment->post_id = $idea->id;
        $comment->user_id = auth()->id();
        $comment->content = request()->get('content');
        $comment->save();

        return redirect() -> route("dashboard.index") -> with("success", "Comment was created");
    }
}
