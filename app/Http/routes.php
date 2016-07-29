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


Route::get('news','NewsController@index');
Route::get('news/create','NewsController@create');
// Route::get('issue/{id}/edit','IssuesController@edit');
Route::post('news','NewsController@store');
// Route::post('issue/{id}','IssuesController@update');