<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//******************************************************* 

//**  Article Routes **//
Route::get('articles', 'ArticleController@index');  //List All Articles
Route::get('article/{id}', 'ArticleController@show');   // Show Single Article
Route::post('article', 'ArticleController@store');  //Create New Article
Route::put('article/{id}', 'ArticleController@edit');   //Update Article
Route::delete('article/{id}', 'ArticleController@destroy'); //Delete Articles

/** Category Routes */

Route::get('categories', 'CategoryController@index');
Route::put('category/{id}', 'CategoryController@edit');
Route::get('category/{id}', 'CategoryController@show');
Route::post('category', 'CategoryController@store');
Route::delete('category/{id}', 'CategoryController@destroy');