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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin') -> prefix('admin') -> name('admin.') -> middleware('auth') -> group(function() {
    Route::get('/', 'HomeController@index')->name('dashboard');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');