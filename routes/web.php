<?php

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

// QUERY TEST
// DB::listen(function ($query) {var_dump($query->sql, $query->bindings);});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('tweets', 'TweetController');
});
Route::resource('profiles', 'ProfilesController');
// Route::resource('follows', 'FollowsController');
Route::POST('profiles/{profile}/follow', 'FollowsController@store')->name('follows.store');

Auth::routes();
