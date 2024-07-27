<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomepageController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()
            ->where('published_at', '<=', now())
            ->with([
                'media'
            ])
            ->orderByDesc('created_at')
            ->get();

        return view('frontend.home', [
            'posts' => $posts
        ]);
    }
}
