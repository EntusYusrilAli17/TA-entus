<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('frontend.postView', [
            'post' => $post
        ]);
    }
}
