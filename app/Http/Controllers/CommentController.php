<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($id)
    {
        request() -> validate([
            "content" => 'required|min:1|max:255'
        ]);
        Comment::create([
            'content' => request() -> get("content"),
            'post_id' => $id,
        ]);
        return redirect() -> route("dashboard.index") -> with("success", "Comment was created");
    }
}
