<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use App\Member;

class PostController extends Controller
{
    public function getLast()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(10)->get();

        foreach ($posts as $post)
        {
            $post['tags'] = $post->tags;
            $post['member'] = $post->member;
        }
        
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
