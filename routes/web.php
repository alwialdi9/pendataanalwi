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
    return view('auth.login');
});

Route::get('alumni',function(){
	return view('/form/alumni');
});

Route::get('alumni','AlumniController@index');
Route::get('tambahalumni','AlumniController@create');
Route::post('tambahalumni','AlumniController@store');
Route::delete('alumni/{id}','AlumniController@destroy');

Route::get('fotolembaga','ProfilController@show');

Route::get('saranabangunan',function(){
	return view('/form/sarana_bangunan');
});

Route::get('saranaperalatan',function(){
	return view('/form/sarana_peralatan');
});

Route::get('perpustakaan','PerpustakaanController@index');
Route::post('perpuscreate','PerpustakaanController@store');

Route::get('profil','ProfilController@index');
Route::get('getKabupaten/{request}','ProfilController@getKabupaten');
Route::get('/profil/getKecamatan/{request}','ProfilController@getKecamatan');
Route::get('/profil/getKelurahan/{request}','ProfilController@getKelurahan');
Route::post('profil','ProfilController@store');

Route::get('tanahbangunan','TanahBangunanController@index');
Route::post('tanahbangunan','TanahBangunanController@store');

Route::get('pendidik','PendidikController@index');

Route::get('pimpinan','PimpinanController@index');
Route::get('pimpinan/{id}','PimpinanController@show');
Route::post('pimpinancreate','PimpinanController@store');
Route::delete('pimpinandelete/{id}','PimpinanController@destroy');

Route::get('datasiswa',function(){
	return view('/form/data_siswa');
});

Route::get('tambahsiswa',function(){
	return view('/form/tambah_datasiswa');
});

Route::get('tambahpendidik',function(){
	return view('/form/tambah_pendidik');
});

Route::get('tambahtenagapendidik',function(){
	return view('/form/tambah_dipendidik');
});


