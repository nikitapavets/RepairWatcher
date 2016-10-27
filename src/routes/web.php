<?php

Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('progress/index');
});

Route::get('progress', ['as' => 'progress.progress', 'uses' => 'RepairController@showProgress']);

Route::group(['prefix' => 'admin'], function(){

	Route::get('/login', ['as' => 'admin.login', 'uses' => 'AdminController@login']);
	Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'AdminController@logout']);
	Route::post('/check', ['as' => 'admin.check', 'uses' => 'AdminController@check']);

	Route::group(['middleware' => 'admin'], function(){

		Route::get('/',['as' => 'admin', 'uses' => 'AdminController@index']);
		Route::post('/repair/save', ['as' => 'admin.repair.save', 'uses' => 'AdminController@save']);
		Route::get('/repair/edit/{id}',['as' => 'admin.repair.edit.{id}', 'uses' => 'RepairController@edit']);
		Route::get('/repair/add',['as' => 'admin.repair.add', 'uses' => 'RepairController@add']);

	});

});




