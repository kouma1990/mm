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
    return view('welcome');
});

Route::resource('mastes', 'MastesController');

Route::get('test', 'TestController@index');
/*
Route::get('mastes', 'MastesController@index');
Route::get('mastes/create', 'MastesController@create');
Route::get('mastes/{id}', 'MastesController@show');

Route::post('mastes', 'MastesController@store');
*/
