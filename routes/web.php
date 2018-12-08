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

//Authenticate Post
//Route::get('/', 'PostController@index')->middleware('auth');

Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();
