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

Route::get('/', "PublicationController@index")->name('index');

Auth::routes();

Route::get('/user/show/{user}', 'UserController@show')->name('user.show')->middleware('auth');

Route::delete('/user/delete/{user}','UserController@destroy')->name('user.destroy')->middleware('auth');
Route::get('/user/edit/{user}','UserController@edit')->name('user.edit')->middleware('auth');
Route::put('/user/update/{id}','UserController@update')->name('user.update')->middleware('auth');
Route::get('/user/manageUser', 'UserController@manageUser')->name('user.manageUser')->middleware('auth','role:admin');;
Route::put('/updateRole/{id}/{name}','UserController@updateRole')->name('user.updateRole');




Route::resource('publications', 'PublicationController')->except(['create,show'])->middleware('auth');
Route::get('publications/show/{publication}', 'PublicationController@show')->name('publications.show');
Route::get('publications/create/{user}', 'PublicationController@create')->name('publications.create')->middleware('auth');
Route::get('showAuthorize', 'PublicationController@showAuthorize')->name('publications.showAuthorize')->middleware('auth','role:admin');
Route::put('allow/{id}', 'PublicationController@allow')->name('publications.allow');
