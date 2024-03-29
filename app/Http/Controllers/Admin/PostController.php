<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

use App\Tag;
use App\Member;
use App\Img;

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
        $data = [
            'members' => Member::all(),
            'tags' => Tag::all()
        ];
        return view('admin.posts.create', $data);
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
            'author' => 'nullable|exists:members,id',
            'tags' => 'nullable|exists:tags,id',
            'imgs' => 'nullable',
            'imgs.*' => 'image|max:512'
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

        // if are tags --> synt bridge table
        if (array_key_exists('tags', $post_info))
        {
            $new_post->tags()->sync($post_info['tags']);
        }

        // if are images --> sync bridge table
        if (array_key_exists('imgs', $post_info))
        {
            $imagesId = [];

            foreach ($post_info['imgs'] as $image)
            {
                $new_img = new Img();

                $img_path = Storage::put('post-img', $image);
                $new_img->img = $img_path;

                $new_img->save();

                $imagesId[] = $new_img->id;
            }

            $new_post->imgs()->sync($imagesId);
        }

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
        if ($post)
        {
            $data = [
                'post' => $post,
                'tags' => Tag::all()
            ];
            return view('admin.posts.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if ($post)
        {
            $data = [
                'post' => $post,
                'members' => Member::all(),
                'tags' => Tag::all()
            ];
            return view('admin.posts.edit', $data);
        }
        abort(404);
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
        // validation
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'author' => 'nullable|exists:members,id',
            'tags' => 'nullable|exists:tags,id'
        ]);

        // get all info
        $post_info = $request->all();
        
        $post_old_title = Post::where('id', $post->id)->first()->pluck('title')->get(0);

        if ($post_info['title'] !== $post_old_title)
        {
            // slug generator
            $base_slug = Str::slug($post_info['title'], '-');
            $slug = $base_slug;
            $already_slug = Post::where('slug', $slug)->first();

            $i = 1;
            while ($already_slug) {
                $slug = $base_slug . '-' . $i;
                $i++;
                $already_slug = Post::where('slug', $slug)->first();
            }

            $post_info['slug'] = $slug;
        }

        $post->update($post_info);

        // if are tags --> synt bridge table
        if (array_key_exists('tags', $post_info)) {
            $post->tags()->sync($post_info['tags']);
        } else {
            $post_info['tags'] = [];
            $post->tags()->sync($post_info['tags']);
        }

        return redirect()->route('admin.post.index')->withMessage('Salvataggio avvenuto correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
