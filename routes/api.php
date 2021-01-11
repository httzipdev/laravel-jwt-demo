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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api','namespace'=>'Auth','as'=>'Auth.','prefix'=>'auth'], function () {
    Route::post('/login', 'JwtAuthController@login')->name('login');
    Route::post('/register', 'JwtAuthController@register')->name('register');
    Route::get('/getProfile', 'JwtAuthController@getProfile')->name('getProfile');
});
