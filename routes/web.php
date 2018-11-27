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
	return view('template.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Makanan
Route::resource('/makanan', 'MakananController');

// Profile
Route::resource('/profile', 'ProfileController');

// Pegawai
Route::prefix('pegawai')->group(function(){
	Route::get('/','PegawaiController@index')->name('pegawai.index');
	Route::get('/create', 'PegawaiController@create')->name('pegawai.create');
	Route::post('/save', 'PegawaiController@save')->name('pegawai.save');
	Route::get('/edit/{id}', 'PegawaiController@edit')->name('pegawai.edit');
	Route::post('/update', 'PegawaiController@update')->name('pegawai.update');
	Route::get('/delete/{id}', 'PegawaiController@delete')->name('pegawai.delete');
});

// Daerah
Route::prefix('daerah')->group(function(){
	Route::get('/','DaerahController@index')->name('daerah.index');
	Route::get('/create', 'DaerahController@create')->name('daerah.create');
	Route::post('/post', 'DaerahController@store');
	Route::get('/edit/{id}', 'DaerahController@edit')->name('daerah.edit');
	Route::post('/update', 'DaerahController@update')->name('daerah.update');
	Route::get('/delete/{id}', 'DaerahController@destroy')->name('daerah.delete');
});


// Minuman
Route::prefix('minuman')->group(function(){
	Route::get('/','MinumanController@index')->name('minuman.index');
	Route::get('/create', 'MinumanController@create')->name('minuman.create');
	Route::post('/save', 'MinumanController@save')->name('minuman.save');
	Route::get('/edit/{id}', 'MinumanController@edit')->name('minuman.edit');
	Route::post('/update', 'MinumanController@update')->name('minuman.update');
	Route::get('/delete/{id}', 'MinumanController@delete')->name('minuman.delete');
});

// Fasilitas
Route::prefix('fasilitas')->group(function(){
	Route::get('/','FasilitasController@index')->name('fasilitas.index');
	Route::get('/create', 'FasilitasController@create')->name('fasilitas.create');
	Route::post('/save', 'FasilitasController@save')->name('fasilitas.save');
	Route::get('/edit/{id}', 'FasilitasController@edit')->name('fasilitas.edit');
	Route::post('/update', 'FasilitasController@update')->name('fasilitas.update');
	Route::get('/delete/{id}', 'FasilitasController@delete')->name('fasilitas.delete');
});

// Kritik & Saran
Route::prefix('kritiksaran')->group(function(){
	Route::get('/','KritikSaranController@index')->name('kritiksaran.index');
	Route::get('/create', 'KritikSaranController@create')->name('kritiksaran.create');
	Route::post('/save', 'KritikSaranController@save')->name('kritiksaran.save');
	Route::get('/edit/{id}', 'KritikSaranController@edit')->name('kritiksaran.edit');
	Route::post('/update', 'KritikSaranController@update')->name('kritiksaran.update');
	Route::get('/delete/{id}', 'KritikSaranController@delete')->name('kritiksaran.delete');
});

// Kategori
Route::prefix('kategori')->group(function(){
	Route::get('/','KategoriController@index')->name('kategori.index');
	Route::get('/create', 'KategoriController@create')->name('kategori.create');
	Route::post('/save', 'KategoriController@save')->name('kategori.save');
	Route::get('/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
	Route::post('/update', 'KategoriController@update')->name('kategori.update');
	Route::get('/delete/{id}', 'KategoriController@delete')->name('kategori.delete');
});

// News
Route::prefix('news')->group(function(){
	Route::get('/','NewsController@index')->name('news.index');
	Route::get('/create', 'NewsController@create')->name('news.create');
	Route::post('/save', 'NewsController@save')->name('news.save');
	Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit');
	Route::post('/update', 'NewsController@update')->name('news.update');
	Route::get('/delete/{id}', 'NewsController@delete')->name('news.delete');
});