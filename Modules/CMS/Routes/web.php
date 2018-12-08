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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::get('admin/posts/all', 'PostController@adminIndex');
        Route::resource('admin/posts','PostController');
        Route::get('admin/home', 'HomeController@adminIndex')->name('home');
    });
});

Route::any('page/search', 'PostController@search');
Route::any('page/{slug}', 'PostController@view')->where('slug', '([A-z\d-\/_.]+)?');