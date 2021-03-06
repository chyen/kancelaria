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

//Route::any( '{catchallWithAuth}', function () {
//    return view('auth.welcome');
//} )->where('catchallWithAuth', '^(?!\/?(api|logowanie|rejestracja|haslo)\/?).*');

Route::any( '{catchallWithAuth}', function () {
    return view('auth.welcome');
} )->where('catchallWithAuth', '^.*');
