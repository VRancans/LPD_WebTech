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

Route::get('/', 'PostsController@index');
Auth::routes();
Route::get('/home', 'PostsController@index');
Route::get('/post', 'PostsController@index');
Route::post('post/submit', 'PostsController@store');
Route::get('/post/create', 'PostsController@create')->middleware('admin');;
Route::get('/post/{id}', 'PostsController@show');
Route::get('/post/{id}/edit', 'PostsController@update')->middleware('auth');;
Route::get('/submission', 'SubmissionsController@index');
Route::get('/submission/create', 'SubmissionsController@create')->middleware('auth');;
Route::get('/submission/view', 'SubmissionsController@show')->middleware('auth');;
Route::post('submission/submit', 'SubmissionsController@store');
