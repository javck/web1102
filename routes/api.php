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

Route::group(['namespace' => '\Javck\Ezlaravel\Http\Controllers'], function () {
    Route::get('items/show', 'ApiController@showSingleItem');
    Route::get('items/{item}', 'ApiController@queryItem');
    //Official
    Route::post('areas/queryByCounty', 'ApiController@queryAreas');
    Route::post('elements/queryPositions', 'ApiController@queryPositions');
    Route::post('elements/queryElementModes', 'ApiController@queryElementModes');
});

Route::get('/hello/{name}', 'App\Http\Controllers\Api\HelloController@getHello');
Route::post('/hello', 'App\Http\Controllers\Api\HelloController@postHello');
Route::post('/times', 'App\Http\Controllers\Api\HelloController@times');

Route::apiResource('products', 'App\Http\Controllers\Api\ProductController');
Route::get('products/my/{product}', 'App\Http\Controllers\Api\ProductController@demoModelBinding');
