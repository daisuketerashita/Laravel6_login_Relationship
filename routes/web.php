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

Route::get('/','InfoPostsController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show','InfoPostsController@show')->name('show');

Route::get('/create','InfoPostsController@create')->name('create');
Route::post('/store','InfoPostsController@store')->name('store');

Route::get('/edit','InfoPostsController@edit')->name('edit');
Route::post('/update','InfoPostsController@update')->name('update');

Route::get('/delete','InfoPostsController@delete')->name('delete');