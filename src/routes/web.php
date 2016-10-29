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
		Route::get('/repair/tech_list',['as' => 'admin.repair.tech_list', 'uses' => 'RepairController@techList']);
		Route::get('/repair/add_tech',['as' => 'admin.repair.add_tech', 'uses' => 'RepairController@addTech']);
		Route::post('/repair/save_tech', ['as' => 'admin.repair.save_tech', 'uses' => 'RepairController@saveTech']);
		Route::get('/repair/add_statuses', ['as' => 'admin.repair.add_statuses', 'uses' => 'RepairController@addStatuses']);
		Route::post('/repair/save_statuses', ['as' => 'admin.repair.save_statuses', 'uses' => 'RepairController@saveStatuses']);

	});

});




