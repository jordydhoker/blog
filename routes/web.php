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

Route::get('/', function () {
    return view('content.index');
});
/*Route::get('/', [
    'uses' => 'ItemController@getIndex',
    'as' => 'content.index'
]);*/
Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::resource('posts','PostController');


/* Authentication Routes
 Route::get('auth/login', 'Auth\LoginController@getLogin');
 Route::post('auth/login', 'Auth\LoginController@postLogin');
 Route::get('auth/logout', 'Auth\LoginController@getLogout');

 // Registration Routes
  Route::get('auth/register', 'Auth\RegisterController@getRegister');
  Route::post('auth/register', 'Auth\RegisterController@postRegister');
*/

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
