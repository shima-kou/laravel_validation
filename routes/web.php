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

Route::get('/user/{id}', function ($id) {
    return view('login', ['id' => $id]);
});

Route::post('/user/{id}', function (Request $request, $id) {
    $submit = $request->input('submit');
    if($submit) {
        return redirect('/register');
    } else {
        return redirect('/user/{id}')->with('id', $id);
    }
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'RegisterController@post');
