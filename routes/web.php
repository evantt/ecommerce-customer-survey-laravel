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

Route::get('/Home', 'PagesController@Home');
Route::get('/Admin/Login', 'PagesController@Login');
Route::get('/Admin/Register', 'PagesController@Register');
Route::get('/Respondent/Survey', 'PagesController@Survey');
Route::get('/Admin', 'RespondentsController@index');
Route::post('/Respondent/store', 'RespondentsController@store');
Route::post('/Admin/store','RespondentsController@store');
Route::delete('/Admin/{id}/delete', 'RespondentsController@destroy');
Route::get('/Admin/{id}/edit', 'RespondentsController@edit');
Route::patch('/Admin/{id}/update', 'RespondentsController@update');