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

Route::get('/holamundo', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view("pruebaGala");
});

Route::get('/infoNosotras', function(){
	return view("infoNosotras");
});


// wildcard -> 404