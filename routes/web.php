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
Route::get('profil/1', function () {
    return 'Halo';
});
Route::get('profil/2', function () {
    return 'Halo';
});
Route::get('profil/3', function () {
    return 'Halo';
});
Route::get('profil/4', function () {
    return 'Halo';
});
Route::get('{nama}/{alamat}/{Umur}', function ($a,$b,$c) {
    return 'Halo : '. $a . '<br> Alamat : '.$b.'<br> Umur : '.$c;
});