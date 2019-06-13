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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/show/{user}', 'UserController@show')->name('user.show');

Route::delete('/user/delete/{user}','UserController@destroy')->name('user.destroy');

Route::resource('publications', 'PublicationController')->except(['create']);
Route::get('publications/create/{user}', 'PublicationController@create')->name('publications.create');

