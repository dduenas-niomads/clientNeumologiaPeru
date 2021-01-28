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

Route::group([
    'prefix' => 'user'
], function () {
    Route::post('login', 'App\Http\Controllers\Api\LoginController@login');
    // Route::post('register', 'LoginController@register');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'App\Http\Controllers\Api\LoginController@logout');
        Route::get('user', 'App\Http\Controllers\Api\LoginController@user');
    });
});

// Schedules
Route::prefix('/schedule')->group(function() {
    Route::middleware('auth:api')->get('/', 'App\Http\Controllers\Api\ScheduleController@index');
    Route::middleware('auth:api')->post('/', 'App\Http\Controllers\Api\ScheduleController@store');
    Route::middleware('auth:api')->patch('/{id}', 'App\Http\Controllers\Api\ScheduleController@update');
    Route::middleware('auth:api')->delete('/{id}', 'App\Http\Controllers\Api\ScheduleController@destroy');
});
