<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// CACHE
Route::get('/cache/view-clear', function() {
    Artisan::call('view:clear');
    return 'view-clear is cleared';
});
Route::get('/cache/config-clear', function() {
    Artisan::call('config:clear');
    return 'config:clear is cleared';
});

// MIDDLEWARE
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// POSTS
Route::get('/get-posts', 'Api\PostController@getPosts');