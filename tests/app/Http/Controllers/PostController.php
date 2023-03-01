<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Controller regarding Posts

    public function show($postId)
    {
        $post = Post::find($postId);

        return view('post', compact('post'));
    }
}
