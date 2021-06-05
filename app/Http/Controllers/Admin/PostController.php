<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Tag;
use App\Member;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'posts' => Post::all()
        ];

        return view('admin.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // get all info
        $post_info = $request->all();

        // new istance
        $new_post = new Post();

        // fill
        $new_post->fill($post_info);

        // slug generator
        $base_slug = Str::slug($new_post->title, '-');
        $slug = $base_slug;
        $already_slug = Post::where('slug', $slug)->first();
        $i = 1;
        while ($already_slug) {
            $slug = $base_slug . '-' . $i;
            $i++;
            $already_slug = Post::where('slug', $slug) -> first();
        }

        $new_post->slug = $slug;

        $new_post->save();

        return redirect()->route('admin.post.index')->withMessage('Salvataggio avvenuto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
