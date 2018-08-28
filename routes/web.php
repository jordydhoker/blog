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
Route::get('dashboard', [
    'uses' => 'PostController@dashboard',
    'as' => 'posts.dashboard'
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




Route::group(['prefix' => 'users'], function () {
    Route::get('edit/{id}', [
        'uses' => 'UserController@edit',
        'as' => 'users.edit'
    ]);
    Route::get('destroy/{id}', [
        'uses' => 'UserController@destroy',
        'as' => 'users.destroy'
    ]);

});





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
    Route::post('update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'posts.update'
    ]);
    //Soft delete een item
    Route::get('delete/{id}', [
        'uses' => 'PostController@delete',
        'as' => 'posts.delete'
    ]);
    //Hard delete een item
    Route::get('destroy/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'posts.destroy'
    ]);
});

Auth::routes();


