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


Route::get('/articulos','App\Https\Controllers\ArticulosController@index');
Route::post('/articulos','App\Https\Controllers\ArticulosController@store');
Route::put('/articulos/{id}','App\Https\Controllers\ArticulosController@update');
Route::delete('/articulos/{id}','App\Https\Controllers\ArticulosController@destroy');