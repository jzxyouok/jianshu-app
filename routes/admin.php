<?php

//管理后台
Route::group(['prefix' => 'admin'], function() {
	//登录展示页面
	Route::get('/login', '\App\Admin\Controllers\LoginController@index');

	//登录行为
	Route::post('/login', '\App\Admin\Controllers\LoginController@login');

	//退出登录行为
	Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');


	Route::group(['middleware' => 'auth:admin'], function() {
			//内容管理系统首页
			Route::get('/home', '\App\Admin\Controllers\HomeController@index');
	});


});