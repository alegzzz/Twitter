<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $post = new Post([
            "content" => "test",
        "likes" => 15,
            ]
        );
        //$post->save();
        $users = [

        ];

        $posts = Post::all();

        return view(
            'dashboard',
            ["posts" => $posts]
        );
    }
}
