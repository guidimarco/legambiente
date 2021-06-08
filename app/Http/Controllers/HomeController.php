<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('welcome');
    }

    // next events
    public function next()
    {
        return view('next');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function posts()
    {
        return view('posts');
    }
}
