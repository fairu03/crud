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



use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\CategoryModel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items/create', 'ItemController@create'); //mebuat data
Route::post('/items', 'ItemController@store'); //menimpan data
Route::get('/items', 'ItemController@index'); //menampilkan hasil input data
Route::get('/items/{id}', 'ItemController@show'); // manampilkan detail item
Route::get('items/{id}/edit', 'ItemController@edit'); //menampilkan datail data untuk diedit.
Route::put('/items/{id}', 'ItemController@update'); //menyimpan perubahan data
Route::delete('/items/{id}', 'ItemController@destroy'); //menghapus data
// route untuk table categories

Route::resource('categories', 'CategoryController');//sekumpulan root untuk crud
