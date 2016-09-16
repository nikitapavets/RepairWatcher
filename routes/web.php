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

Route::get('admin',                 ['as' => 'admin', 'uses' => 'AdminController@index']);
<<<<<<< HEAD
Route::get('admin/login',           ['as' => 'admin.login', 'uses' => 'AdminController@login']);
Route::get('admin/registration',    ['as' => 'admin.registration', 'uses' => 'AdminController@login']);
=======
Route::get('admin/enter',           ['as' => 'admin.enter', 'uses' => 'AdminController@enter']);
>>>>>>> remont.anycomp/master
