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

Route::get('/usuario/{id}', function ($id) {
	return "El id del usuario es {$id}";
})->where('id', '[0-9]+');

Route::get('/saludo/{saludo}/{name}', function($saludo, $name) {
	return $saludo.' '.$name;
});