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
    return view('landing');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::post('/contact', 'ContactController@Submit');
Route::get('/contact', 'ContactController@ShowView');


Route::get('/{wildcard}', function ($wildcard) {
  return redirect("/#$wildcard");
});
