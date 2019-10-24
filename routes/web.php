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

use App\Http\Controllers\FollowsController;

Route::get('', function () {
    return view('welcome');
});

Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');

//Route::post('follow/{user}', function () {
//    return ['succes'];
//});


Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
