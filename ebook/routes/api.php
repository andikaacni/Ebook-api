<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('books', 'App\Http\Controllers\BookController@index');
Route::post('books', 'App\Http\Controllers\BookController@store');
Route::get('books/{id}', 'App\Http\Controllers\BookController@show');
Route::put('books/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('books/{id}', 'App\Http\Controllers\BookController@destroy');
