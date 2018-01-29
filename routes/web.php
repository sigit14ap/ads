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
    return view('home');
});

Auth::routes();
Route::group(['middleware' => 'IsAdmin'], function () {
	Route::get('/admin','AdminController@index')->name('admin.index');
	Route::get('/admin/create-soal','AdminController@create')->name('admin.create');
	Route::post('/admin/create-soal','AdminController@store')->name('admin.store');
	Route::post('/admin/{id}','AdminController@update')->name('admin.update');
	Route::delete('/admin/{id}','AdminController@destroy')->name('admin.destroy');
 });
Route::group(['middleware' => 'IsSatker'], function () {
	Route::get('/satker', function () {
    	return view('satker.index');
	});
	Route::post('/satker','MainController@store')->name('store');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
