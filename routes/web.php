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

// Route::get('/', function () {
//     return view('layouts/master');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/belajarView', function () {
//     return view('belajarView');
// });

Route::get('/', 'HomeController@index');

// Route Insert Data
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/karyawan/store', 'KaryawanController@store');

Route::get('/jabatan/create', 'JabatanController@create');
Route::post('/jabatan/store', 'JabatanController@store');

Route::get('/departemen/create', 'DepartemenController@create');
Route::post('/departemen/store', 'DepartemenController@store');

Route::get('/arsip/create', 'ArsipController@create');
Route::post('/arsip/store', 'ArsipController@store');

Route::get('/inventori/create', 'InventoriController@create');
Route::post('/inventori/store', 'InventoriController@store');


// route Get data
Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/{id}', 'KaryawanController@show');

Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/{id}', 'JabatanController@show');

Route::get('/departemen', 'DepartemenController@index');
Route::get('/departemen/{id}', 'DepartemenController@show');

Route::get('/arsip','ArsipController@index');
Route::get('/arsip/{id}', 'ArsipController@show');

Route::get('/inventori','InventoriController@index');
Route::get('/inventori/{id}', 'InventoriController@show');

// Route Edit data
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
Route::put('/karyawan/update', 'KaryawanController@update');

Route::get('/jabatan/edit/{id}', 'JabatanController@edit');
Route::put('/jabatan/update', 'JabatanController@update');

Route::get('/departemen/edit/{id}', 'DepartemenController@edit');
Route::put('/departemen/update', 'DepartemenController@update');

Route::get('/arsip/edit/{id}', 'ArsipController@edit');
Route::put('/arsip/update', 'ArsipController@update');

Route::get('/inventori/edit/{id}', 'InventoriController@edit');
Route::put('/inventori/update', 'InventoriController@update');


// Route Delete
Route::get('/karyawan/delete/{id}', 'KaryawanController@delete');

Route::delete('/jabatan/{id}', 'JabatanController@destroy');

Route::get('/departemen/delete/{id}', 'DepartemenController@delete');

Route::get('/arsip/delete/{id}', 'ArsipController@delete');

Route::get('/inventori/delete/{id}', 'InventoriController@delete');
