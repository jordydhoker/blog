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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
