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

        $posts = Post::query();

        if(request()->filled('search')){
            $posts = $posts->where('content', 'like', '%'.request('search').'%');
        }

        return view(
            'dashboard',
            ["posts" => $posts->get()]
        );
    }
}
