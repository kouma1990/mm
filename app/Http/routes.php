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

// option 画面
Route::get("option", "OptionController@index");
Route::post("designer", "OptionController@storeDesigner");
Route::post("printer", "OptionController@storePrinter");
Route::post("repository", "OptionController@storeRepository");
Route::post("country", "OptionController@storeCountry");
Route::delete("designer/{id}", "OptionController@destoryDesigner");
Route::delete("printer/{id}", "OptionController@destoryPrinter");
Route::delete("repository/{id}", "OptionController@destoryRepository");
Route::delete("country/{id}", "OptionController@destoryCountry");
Route::patch("designer/{id}", "OptionController@updateDesigner");
Route::patch("printer/{id}", "OptionController@updatePrinter");
Route::patch("repository/{id}", "OptionController@updateRepository");
Route::patch("country/{id}", "OptionController@updateCountry");


/*
Route::get('mastes', 'MastesController@index');
Route::get('mastes/create', 'MastesController@create');
Route::get('mastes/{id}', 'MastesController@show');

Route::post('mastes', 'MastesController@store');
*/
