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

  Route::get('/', 'PostsController@index')->name('top');

  Route::resource('comments', 'CommentsController', ['only' => ['store']]);

  Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update','destroy']]);

  Route::get('users', 'UserController@index');

  Route::get('find','UserController@find');
  Route::post('users/find','UserController@serch');





//掲示板用ルート
Route::get('keiziban','keizibanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
