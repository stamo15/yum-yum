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

/**
 * Declaring API routes for all resources
 * 1. All API controllers are in the API folder
 * 2. User related controllers are in the Users namespace
 * 3. Blog related controllers are in the Blog namespace
 * 4. Recipe related controllers are in the Recipe namespace
*/
Route::middleware('auth:api')->group(function () {
    // Route::namespace('API\Users')->group(function (){
    //     Route::apiResource('users', 'UserController');
    // });
});
Route::namespace('API\Users')->group(function (){
    Route::apiResource('users', 'UserController');
});
