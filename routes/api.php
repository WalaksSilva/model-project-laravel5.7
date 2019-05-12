<?php

use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

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

Route::prefix('auth')->group(function () { 
    Route::post('login', 'Auth\AuthController@login');
    Route::post('refresh', 'Auth\AuthController@refresh');

    Route::group(['middleware' => 'jwt.auth', 'namespace' => 'Auth\\'], function() {    
        Route::get('me', 'AuthController@me');
    });
});

