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

//Post Routes
// $router->group(['namespace' => 'admin'], function() use ($router){
//     Route::resource('posts','PostController');
// });
Route::get('admin/posts/all', 'PostController@adminIndex')->middleware('auth');
Route::resource('admin/posts','PostController')->middleware('auth');
Route::get('/', 'PostController@index');
Route::any('page/search', 'PostController@search');
Route::any('page/{slug}', 'PostController@view')->where('slug', '([A-z\d-\/_.]+)?');

//Authenticate Post
//Route::get('/', 'PostController@index')->middleware('auth');

Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
