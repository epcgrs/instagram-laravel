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


Auth::routes();

Route::post('follow/{user}', 'FollowsController@store')->name('follow.user');

Route::get('/email', function () {
    return new \App\Mail\NewUserWelcomeMail();
});

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/p/create', 'PostController@create')->name('post.crete');
Route::post('/p', 'PostController@store')->name('post.store');
Route::get('/p/{post}', 'PostController@show')->name('post.show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
