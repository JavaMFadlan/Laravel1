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
Route::get('tni/{nama?}/{bb?}/{umur?}', function ($nama = NULL,$bb = NULL, $umur = NULL) {
        $g = 'Silahkan Isi Data Terlebih Dahulu';
    if (isset($nama)) {
        $g = 'Nama Anda ' .$nama;
    }
    if (isset($bb)) {
        if($bb < 0) {
            $f = 'Angka Tidak Valid';
        }
        else if ($bb >= 76 && $bb<= 100) {
            $f = 'Anda Harus Turun Berat Badan';
        }
        else if ($bb >= 65 && $bb<= 75) {
            $f = 'Ideal';
        }
        else if ($bb >= 50 && $bb <= 64) {
            $f = 'Naikan Berat badan Badan';
        }
        else if ($bb < 50 && $bb > 0) {
            $f = 'Anda Kurang Nutrisi';
        }
        
        $g .= '<br>Tubuh : ' .$f;
    }
    if (isset($umur)) {
        if($umur < 0) {
            $u = 'Angka Tidak Valid';
        }
        else if ($umur >= 50 && $umur <= 60) {
            $u = 'Jendral';
        }
        else if ($umur >= 40 && $umur <= 50) {
            $u = 'Laksamana';
        }
        else if ($umur >= 30 && $umur <= 40) {
            $u = 'Perwira';
        }
        
        $g .= '<br>Jabatan : ' .$u;
    }
    
    return $g;
});
Route::get('{nama}/{alamat}/{Umur}', function ($a,$b,$c) {
    return 'Halo : '. $a . '<br> Alamat : '.$b.'<br> Umur : '.$c;
});