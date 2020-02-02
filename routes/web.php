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
Route::get('/', function(){
    return view('home');
});

Route::get('/Home', 'PagesController@Home');
//Route::get('/Adminlogin', 'PagesController@Login');

Route::get('/Register', 'RespController@create');
Route::post('/Register', 'RespController@store');

Route::get('/Login', 'LoginController@getlogin')->name('login');
Route::post('/Login', 'LoginController@postlogin');
Route::get('/Logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/Survey/create', 'OrderController@create');
    Route::post('/Survey/create', 'OrderController@store');
});

Route::get('/Admin', 'AdminController@index');
Route::get('/Admin/create', 'AdminController@create');
Route::post('/Admin/create','AdminController@store');
Route::get('/Admin/{id}/edit', 'AdminController@edit');
Route::patch('/Admin/{id}/update', 'AdminController@update');
Route::delete('/Admin/{id}/delete', 'AdminController@destroy');


