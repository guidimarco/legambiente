<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function getLast()
    {
        $post = Post::orderBy('created_at', 'desc')->take(10)->get();
        return response()->json([
            'success' => true,
            'results' => $post
        ]);
    }
}
