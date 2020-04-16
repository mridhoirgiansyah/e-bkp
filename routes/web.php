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
    return view('home');
});
//route auth
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//route kesiswaan
Route::post('/kesiswaan/tambah', 'KesiswaanController@tambah')->name('tambahpunishment');
Route::post('/kesiswaan/store', 'KesiswaanController@store')->name('reward.kesiswaan.store');
Route::post('/kesiswaan/tambah', 'KesiswaanController@tambah')->name('punishment.tambah');
Route::post('/kesiswaan/destroy/{id}', 'KesiswaanController@destroy')->name('reward.kesiswaan.destroy');
Route::post('/kesiswaan/hapus/{id}', 'KesiswaanController@hapus')->name('punishment.kesiswaan.hapus');
Route::get('/kesiswaan/user', 'KesiswaanController@user');

Route::get('/getUnits/{id}', 'ApiController@getUnits')->name('getUnit');
Route::get('/getConvert/{id}', 'ApiController@getConvert')->name('getConvert');
Route::get('/getProduct/{id}', 'ApiController@getProduct')->name('getProduct');
Route::get('/getInformations/{id}', 'ApiController@getInformations')->name('getInformations');
Route::get('/handleConvert/{id}', 'ApiController@handleConvert')->name('handleConvert');
Route::get('/getPunishment/{id}', 'ApiController@getPunishment')->name('getPunishment');
//route pembimbing
Route::post('/pembimbing/store', 'PembimbingController@store')->name('reward.pembimbing.store');
Route::post('/pembimbing/tambah', 'PembimbingController@tambah')->name('punishment.tambah');
Route::post('/pembimbing/destroy/{id}', 'PembimbingController@destroy')->name('reward.pembimbing.destroy');
Route::post('/pembimbing/hapus/{id}', 'PembimbingController@hapus')->name('punishment.pembimbing.hapus');

//route siswa
Route::get('/kesiswaan/datasiswa', 'SiswaController@datasiswa');
Route::post('/kesiswaan/datasiswa/tambah', 'SiswaController@tambah')->name('siswa.tambah');
Route::post('/kesiswaan/datasiswa/edit', 'SiswaController@edit')->name('siswa.edit');
Route::post('/kesiswaan/datasiswa/update','SiswaController@update')->name('siswa.update');
Route::post('/kesiswaan/delete/{id}', 'SiswaController@delete')->name('datasiswa.kesiswaan.delete');


Route::group(['middleware' => 'auth'],function(){

  Route::get('/kesiswaan/dashboard','DashboardController@dashKesiswaan');
  Route::get('/kesiswaan/reward','KesiswaanController@reward');
  Route::get('/kesiswaan/punishment', 'KesiswaanController@punishment');

});
Route::group(['middleware' => 'auth'],function(){
  Route::get('/pembimbing/dashboard','DashboardController@dashpembimbing');
  Route::get('/pembimbing/reward','PembimbingController@reward');
  Route::get('/pembimbing/punishment', 'PembimbingController@punishment');
});


