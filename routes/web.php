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

Route::get('/', '\App\Http\Controllers\LoginController@index');

//用户模块
//注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
//登陆页面
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//登陆行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');
//登出行为
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
//个人设置页面
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');



//文章模块
Route::get('/posts', '\App\Http\Controllers\PostController@index');

Route::get('/posts/create', '\App\Http\Controllers\PostController@create');

Route::post('/posts', '\App\Http\Controllers\PostController@store');

Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');

Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');

Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');

Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');

Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');

Route::post('posts/{post}/comment', '\App\Http\Controllers\PostController@comment');

//文章点赞模块
Route::get('posts/{post}/zan', '\App\Http\Controllers\PostController@zan');
Route::get('posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan');