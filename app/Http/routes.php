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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('items', 'ItemController');

Route::get('items/create', ['as' => 'items.create', 'uses' => 'ItemController@create']);
Route::post('items', ['as' => 'items.store', 'uses' => 'ItemController@store']);


// CSRF middleware group (if necessary)
// Route::group(['middleware' => 'csrf'], function () {
//     // Your routes go here
// });

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
