<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/cms', function (Request $request) {
    return $request->user();
});

Route::get('comments/all/{page_id}','CommentsController@index');
Route::post('comments/store','CommentsController@store');