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

Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'posts.index'
]);
Route::get('index', [
    'uses' => 'PostController@index',
    'as' => 'posts.index'
]);
Route::get('profile/{id}', [
    'uses' => 'PostController@profile',
    'as' => 'posts.profile'
]);
Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::resource('posts','PostController');


Auth::routes();


