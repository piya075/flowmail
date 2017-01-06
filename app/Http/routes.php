<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication

//Route::get('/face','AuthController@Face');
//Route::get('/login/{provider?}','AuthController@Facebook');
//Route::get('/login/callback/{provider?}','AuthController@callbackFacebook');
Route::get('/login','AuthController@Login');
Route::get('/logout','AuthController@logout');
Route::post('/authentication','AuthController@Authentication');
//API Authentication
Route::get('/up','AuthController@upload');
Route::post('/api/login','AuthController@APIAuthentication');
Route::post('/test','AuthController@test');
// Main System
Route::group(['middleware' => 'authMember'], function () {
    Route::get('/','Main\MainController@index');
});