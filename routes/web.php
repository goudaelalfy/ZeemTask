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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::get('roles/index', '\Modules\Role\Http\Controllers\RoleController@index')->name('roles');
    Route::resource('roles', '\Modules\Role\Http\Controllers\RoleController');

    Route::get('users/index', '\Modules\User\Http\Controllers\UserController@index')->name('users');
    Route::resource('users', '\Modules\User\Http\Controllers\UserController');

    Route::get('articles/index', '\Modules\Article\Http\Controllers\ArticleController@index')->name('articles');
    Route::resource('articles', '\Modules\Article\Http\Controllers\ArticleController');
});
