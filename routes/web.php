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

Route::get('kategoripaket1', function () {
    return view('kategoripaket.index1');
})->name('kategoripaket1');

Route::get('kategorimakanan1', function () {
    return view('kategorimakanan.index1');
})->name('kategorimakanan1');

Route::get('cabang2', function () {
    return view('cabang.index2');
})->name('cabang2');


Route::get('wedding', function () {
    return view('kategoripaket.wedding');
})->name('wedding');

Route::get('meeting', function () {
    return view('kategoripaket.meeting');
})->name('meeting');

Route::get('admin', function () {
    return view('layouts.index');
});

Route::get('makanan1', function () {
    return view('makanan.index1');
    })->name('makanan1');


//search
Route::get('makan', 'searchController@makanan')->name('makan');

Route::resource('/cabang','CabangController');
Route::resource('/kategori_makanan','KategoriMakananController');
Route::resource('/kategori_paket','KategoriPaketController');
Route::resource('/makanan','MakananController');
Route::resource('/paket','PaketController');
Route::resource('/testimoni','TestimoniController');
Route::resource('/nasi','NasiController');

Auth::routes();
Route::get('/catering','FrontEndController@index')->name('catering');
Route::get('cabang1','FrontEndController@cabang')->name('cabang1');
Route::get('cabang2','FrontEndController@cab')->name('cabang2');
Route::get('makanan_frontend','FrontEndController@makanan')->name('makanan_frontend');
Route::get('nasi1','FrontEndController@nasi')->name('nasi');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/isipaket/{id}','FrontEndController@isikategoripaket')->name('isipaket');
Route::get('/kategori_pakett','FrontEndController@ka_paket')->name('kategori_pakett');
Route::get('/isimenu/{id}','FrontEndController@isikategorimakanan')->name('isimenu');
