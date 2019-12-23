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

Route::name('blogs_path')->get('/blogs','BlogsController@index');
Route::name('store_blog_path')->post('/blogs','BlogsController@store');
Route::name('create_blog_path')->get('/blogs/create','BlogsController@create');
