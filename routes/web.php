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
    return view('pelaporan');
});

Route::get('/coba', function () {
    return view('ceklaporan');
});

Route::get('/map','DataPelaporanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
