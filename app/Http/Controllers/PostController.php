<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        request() -> validate([
            "content" => 'required|min:1|max:255'
        ]);
        //dump(request()-> all());
        Post::create([
            'content' => request() -> get("content"),
            'likes' => 0
        ]);
        return redirect() -> route("dashboard.index") -> with("success", "Post was created");
    }
    public function destroy(Post $post)
    {
        $post -> delete();

        return redirect() -> route("dashboard.index") -> with("success", "Post was deleted");
    }
    public function edit(Post $post)
    {
        return view(
            'posts.edit',
            [
                'post' => $post
            ],
        );
    }
    public function show(Post $post)
    {
        //return redirect() -> route("dashboard.index");
        return view(
            'posts/show',
            [
                'post' => $post
            ],
        );
    }
    public function update(Post $post)
    {
        request() -> validate([
            "content" => 'required|min:1|max:255'
        ]);
        //dump(request()->all());
        $post -> content = request() -> get("content");
        $post->save();

        return redirect() -> route("dashboard.index") -> with("success", "Post was edited");
    }
    public function search()
    {

    }
}
