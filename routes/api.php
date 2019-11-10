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

Route::apiResource('/posts', 'PostController');
//Route::apiResource('/users', 'UsersController');
Route::middleware('auth:api')->group(function () {
    Route::post('register','UsersController@register');
});

//Route::post('register','UsersController@register');
Route::post('login','UsersController@login');

Route::get('/showposts','HomeController@getPosts');
Route::get('/showpostbyid/{id}','HomeController@getPostById');
Route::post('/addcomment','HomeController@addComment');