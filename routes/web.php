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
Route::get('/news/add', 'NewsController@addNew');
Route::get('/news/edit/{id}', 'NewsController@editNew');
Route::post('/news/add', 'NewsController@sendData');
Route::post('/news/edit/{id}', 'NewsController@editData');
Route::get('/news/{id?}', 'NewsController@getNews');
