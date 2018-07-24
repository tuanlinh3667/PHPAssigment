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

Route::get('/admin/phone/list', 'PhoneController@index');
Route::get('/admin/phone/show', 'PhoneController@show');
Route::get('/admin/phone/create', 'PhoneController@create');
Route::post('/admin/phone/store', 'PhoneController@store');
Route::get('/admin/phone/edit/{id}', 'PhoneController@edit');
Route::post('/admin/phone/update', 'PhoneController@update');
Route::get('/admin/phone/delete/{id}', 'PhoneController@delete');
Route::post('/admin/phone/destroy/{id}', 'PhoneController@destroy');

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/collection', 'CollectionController');
Route::resource('admin/article', 'ArticleController');
