<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Post;
use App\Img;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'nextEvents' => Event::where('date', '>=', Carbon::today())->get()
        ];
        return view('welcome', $data);
    }

    // next events
    public function next()
    {
        $data = [
            'nextEvents' => Event::where('date', '>=', Carbon::today())->get()
        ];
        return view('next', $data);
    }

    public function contactUs()
    {
        $data = [
            'nextEvents' => Event::where('date', '>=', Carbon::today())->get()
        ];
        return view('contactUs', $data);
    }

    public function aboutUs()
    {
        $data = [
            'nextEvents' => Event::where('date', '>=', Carbon::today())->get()
        ];
        return view('aboutUs', $data);
    }

    public function posts()
    {
        return view('posts', $data);
    }

    public function socialPosts()
    {
        $data = [
            'nextEvents' => Event::where('date', '>=', Carbon::today())->get()
        ];
        return view('social-posts', $data);
    }
}
