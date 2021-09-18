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


// TODO:ルートプレフィックスでまとめるようにする
Route::get('/','PostController@index')
 ->name('posts.index');

Route::get('/post/add','PostController@add')
 ->name('posts.add');

Route::get('/post/{id}','PostController@detail')
    ->name('posts.detail');

Route::get('/post/edit/{id}','PostController@edit')
    ->name('posts.edit');

Route::post('/post/save','PostController@save')
    ->name('posts.save');

Route::post('/post/update','PostController@update')
    ->name('posts.update');
