<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/task', 'TaskController@create');
Route::post('/task', 'TaskController@store');
Route::get('/task/{id}','TaskController@edit');
Route::put('/task/{id}', 'TaskController@update');
Route::delete('/task/{id}', 'TaskController@destroy');

//recicle bin routes
Route::get('/recicle', 'RecicleBinController@index');
Route::post('/recicle/{id}', 'RecicleBinController@restore');
Route::delete('/recicle/{id}', 'RecicleBinController@destroy');
