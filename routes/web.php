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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items/create', 'ItemController@create'); //mebuat data
Route::post('/items', 'ItemController@store'); //menimpan data
Route::get('/items', 'ItemController@index'); //menampilkan hasil input data
