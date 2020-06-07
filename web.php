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
// dari sini
Route::get('/belajarlaravel', function () {
    echo 'Belajar Laravel. Tulisan ini ditampilkan dari routes';
});
// samapai sini
Route::get('/ayo', function () {
    echo 'Ayo ngoding memakai Laravel. Tulisan ini ditampilkan dari routes';
});

Route::get('/framework', function () {
    echo 'Framework Laravel. Tulisan ini ditampilkan dari routes';
});

Route::get('/pertama', function() {
	return view('pertama');
});

Route::get('/kedua', function() {
	return view('kedua');
});

Route::get('/ketiga', function() {
	return view('ketiga');
});

// // cara pertama
// Route::get('/belajar', 'SiswaController@index', function() {
// 	$data['nama'] = "Virgiawan Dejan";
// 	$data['umur'] = "16 tahun";
// 	$data['sekolah'] = "SMKN 4 BDG";
// 	$data['kelas'] = "XI-RPL 3";
// 	$data['jk'] = "Laki - Laki";
// 	return view('belajar', $data);
// });
// // cara kedua
// Route::get('/belajar', function() {
// 	$nama = "Virgiawan Dejan";
// 	$umur = "16 tahun";
// 	$sekolah = "SMKN 4 BDG 	";
// 	$kelas = "XI-RPL 3";
// 	$jk = "Laki - Laki";
// 	return view('belajar', compact('nama', 'jk', 'umur', 'sekolah', 'kelas'));
// });
// Route::auth();

// Route::group(['middleware'=>'auth'], function() {
Route::get('/kelas', 'KelasController@kelas');
Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas', 'KelasController@store');
Route::get('/kelas{id}edit', 'KelasController@edit');
Route::patch('/kelas/{id}', 'KelasController@update');
Route::delete('/kelas/{id}', 'KelasController@destroy');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::get('/siswa{id}edit', 'SiswaController@edit');
Route::patch('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@destroy');
// });

Route::get('/guru', 'GuruController@index');
Route::get('/guru/create', 'GuruController@create');
Route::post('/guru', 'GuruController@store');
Route::get('/guru{id}edit', 'GuruController@edit');
Route::patch('/guru/{id}', 'GuruController@update');
Route::delete('/guru/{id}', 'GuruController@destroy');

// WEB COVID
Route::get('/homepage', 'CovidController@pageone');
Route::get('/pagetwo', 'CovidController@pagetwo');
Route::get('/about', 'CovidController@pageabout');

Route::get('/covid', 'CovidController@covid');
Route::get('/covid/create', 'CovidController@create');
Route::post('/covid', 'CovidController@store');
Route::get('/covid/{id}edit', 'CovidController@edit');
Route::patch('/covid/{id}', 'CovidController@update');
Route::delete('/covid/{id}', 'CovidController@destroy');

Route::get('/icovid', 'IcovidController@index');
Route::get('/icovid/create', 'IcovidController@create');
Route::post('/icovid', 'IcovidController@store');
Route::get('/icovid/{id}edit', 'IcovidController@edit');
Route::patch('/icovid/{id}', 'IcovidController@update');
Route::delete('/icovid/{id}', 'IcovidController@destroy');