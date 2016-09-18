<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin',                     ['as' => 'admin', 'uses' => 'AdminController@index']);
Route::get('admin/login',               ['as' => 'admin.login', 'uses' => 'AdminController@login']);
Route::get('admin/registration',        ['as' => 'admin.registration', 'uses' => 'AdminController@login']);
Route::get('admin/logout',              ['as' => 'admin.logout', 'uses' => 'AdminController@logout']);
Route::post('admin/check',              ['as' => 'admin.check', 'uses' => 'AdminController@check']);
Route::post('admin/maintenance/save',   ['as' => 'admin.maintenance.save', 'uses' => 'AdminController@save']);
