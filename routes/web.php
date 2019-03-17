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


Route::get('template', function () {
    return view('dashboard.content');
});


Route::get('detailkategori/{id}', function($id){
    return "halaman detail kategori" . $id;
});

Route::get('master', function () {
    return view('dashboard.index');
});

Route::resource('kategori', 'KategoriController');


Route::get('query', 'KategoriController@search');

Route::get('kategori.tambah','KategoriController@tambah');

Route::post('kategori.store','KategoriController@store');

Route::get('kategori.edit/{id}','KategoriController@edit');

Route::get('kategori.hapus/{id}','KategoriController@hapus');