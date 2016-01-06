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

Route::group(['as' => 'auth.'], function(){
    // Authentication routes...
    Route::get('connexion', 'Auth\AuthController@getLogin')->name('login');
    Route::post('connexion', 'Auth\AuthController@postLogin')->name('login');
    Route::get('deconnexion', 'Auth\AuthController@getLogout')->name('logout');

    // Registration routes...
    Route::get('inscription', 'Auth\AuthController@getRegister')->name('register');
    Route::post('inscription', 'Auth\AuthController@postRegister')->name('register');
});


// Routes inaccessibles si l'utilisateur n'est pas authentifié
Route::group(['middleware' => 'auth'], function(){

    Route::get('/', function(){
        return view('pages.users.directory');
        return "A changer par une action d'un controller";
    });



    // TODO

});