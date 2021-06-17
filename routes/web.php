<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // CACHE
// Route::get('/cache/view-clear', function() {
//     Artisan::call('view:clear');
//     return 'view-clear is cleared';
// });
// Route::get('/cache/config-clear', function() {
//     Artisan::call('config:clear');
//     return 'config:clear is cleared';
// });

// ADMIN
Auth::routes(['register' => false]);
Route::namespace('Admin') -> prefix('admin') -> name('admin.') -> middleware('auth') -> group(function() {
    // dashboard
    Route::get('/', 'HomeController@index')->name('dashboard');

    // member
    Route::resource('/member', 'MemberController');

    // post
    Route::resource('/post', 'PostController');
    Route::resource('/tags', 'TagController');

    // events
    Route::resource('/event', 'EventController');
});

// PUBLIC
Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/prossimi-eventi', 'HomeController@next')->name('next');
Route::get('/contattaci', 'HomeController@contactUs')->name('contact-us');
Route::get('/chi-siamo', 'HomeController@aboutUs')->name('about-us');
Route::get('/posts', 'HomeController@posts')->name('posts');