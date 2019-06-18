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

Route::get('/','Items@index');
//Route::get('/add','pageController@add');
//Route::post('/create','kitobController@create');
//Route::get('item/{id}','pageController@show');
//
//Route::put('update/{id},kitobController@update');
//Route::delete('delete/{id}','kitobController@delete');

Route::resource('item','Items');