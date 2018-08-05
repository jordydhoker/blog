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

Route::group(['prefix' => 'likes'], function () {
    Route::get('store/{id}', [
        'uses' => 'LikeController@store',
        'as' => 'likes.store'
    ]);
    Route::get('destroy/{id}', [
        'uses' => 'LikeController@destroy',
        'as' => 'likes.destroy'
    ]);
});


Route::group(['prefix' => 'shares'], function () {
    Route::get('store/{id}', [
        'uses' => 'ShareController@store',
        'as' => 'shares.store'
    ]);
    Route::get('destroy/{id}', [
        'uses' => 'ShareController@destroy',
        'as' => 'shares.destroy'
    ]);

});

Route::group(['prefix' => 'seed'], function () {
    Route::get('users', [
        'uses' => 'UsersTableSeeder@run',
        'as' => 'seed.users'
    ]);
    Route::get('posts', [
        'uses' => 'PostsTableSeeder@run',
        'as' => 'seed.posts'
    ]);

});

//Route::resource('posts','PostController');
//Route::resource('likes','LikeController');


Route::group(['prefix' => 'posts'], function (){
    Route::get('', [
        'uses' => 'PostController@index',
        'as' => 'posts.index'
    ]);
    //Create new item pagina
    Route::get('create', [
        'uses' => 'PostController@create',
        'as' => 'posts.create'
    ]);

    Route::get('show/{id}', [
        'uses' => 'PostController@show',
        'as' => 'posts.show'
    ]);
    //POST  New item
    Route::post('store', [
        'uses' => 'PostController@store',
        'as' => 'posts.store'
    ]);
    //Edit item pagina
    Route::get('edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'posts.edit'
    ]);
    //POST edited item
    Route::post('edit', [
        'uses' => 'PostController@update',
        'as' => 'posts.update'
    ]);
    //Delete een item
    Route::get('destroy/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'posts.destroy'
    ]);
});

Auth::routes();


