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

Route::group(['namespace' => 'Auth'], function() {
    Route::group(['prefix' => 'logowanie'], function() {
        Route::get('/', 'AuthController@login');
        Route::post('/', 'AuthController@postLogin');
    });
    Route::group(['prefix' => 'rejestracja'], function() {
        Route::get('/', 'AuthController@registration');
        Route::post('/', 'AuthController@postRegistration');
    });
    Route::group(['prefix' => 'reset-hasla'], function() {
        Route::get('/', 'AuthController@resetPassword');
        Route::post('/', 'AuthController@postResetPassword');
    });
});

Route::get('dashboard', 'DashboardController@index');

Route::any('{catchallWithAuth}', function () {
    return view('auth.welcome');
})->where('catchallWithAuth', '^.*');