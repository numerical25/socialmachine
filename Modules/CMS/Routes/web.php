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

Route::prefix('cms')->group(function() {
    Route::get('/', 'CMSController@index');
});

Route::get('/', 'PostController@index');
Route::get('admin/posts/all', 'PostController@adminIndex')->middleware('auth');
Route::resource('admin/posts','PostController')->middleware('auth');
Route::any('page/search', 'PostController@search');
Route::any('page/{slug}', 'PostController@view')->where('slug', '([A-z\d-\/_.]+)?');