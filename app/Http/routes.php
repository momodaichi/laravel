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
Route::get('/profil', 'ProfilController@index');
Route::get('/materi', 'MateriController@show');
Route::get('/materi/{id}', 'MateriController@single');
Route::get('/tiket', 'TiketController@show');
Route::get('/tiket/{id}', 'TiketController@single');
Route::get('/event', 'EventController@show');
Route::get('/event/{id}', 'EventController@single');
