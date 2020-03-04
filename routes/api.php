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

Route::group(['prefix'=>'v1'], function(){
    Route::apiResource('/person', 'Api\v1\PersonController');
});
Route::group(['prefix'=>'v2'], function(){
    Route::apiResource('/person', 'Api\v2\PersonController');
});

/* Route::prefix('v1')->group(function(){
    Route::apiResource('/person', 'Api\v1\PersonController');
});
Route::prefix('v2')->group(function(){
    Route::apiResource('/person', 'Api\v2\PersonController');
}); */
