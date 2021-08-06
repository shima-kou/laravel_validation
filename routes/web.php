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

use Illuminate\Http\Request;

Route::get('/user/{id}', 'UserController@index');
Route::post('/user/{id}', 'UserController@post');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@post');
