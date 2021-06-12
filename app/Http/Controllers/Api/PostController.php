<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use App\Member;
use App\Img;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(10)->get();

        foreach ($posts as $post)
        {
            $post['member'] = $post->member;
            $post['tags'] = $post->tags;
            $post['imgs'] = $post->imgs;
        }
        
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
