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

Route::get('/', function () {
    return Redirect::to('home');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::resource('home', 'HomeController');
Route::resource('contact', 'ContactController');
Route::resource('prettify', 'PrettifyController');
Route::resource('command', 'CommandController');

Route::get('example', function () {
    // Only authenticated users may enter...
})->middleware('auth');

Route::resource('profile', 'ProfileController');
Route::resource('settings', 'SettingsController');
