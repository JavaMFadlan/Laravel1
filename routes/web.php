<?php
use App\Post;

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
Route::get('/halo', 'latihanController@Halo');

Route::get('/+/{angka?}/{angka1?}', 'latihanController@Pertambahan');
Route::get('/-/{angka?}/{angka1?}', 'latihanController@Pengurangan');
Route::get('/:/{angka?}/{angka1?}', 'latihanController@Pembagian');
Route::get('/x/{angka?}/{angka1?}', 'latihanController@Perkalian');

Route::get('/loop', 'latihanController@loop');
Route::get('/gaji', 'latihanController@gaji');

Route::get('/tabungan', 'tabunganController@Index');
Route::get('/tabungan/{id}', 'tabunganController@show');
Route::get('/tambah/{a?}/{b?}/{c?}/{d?}', 'tabunganController@Store');
Route::get('/edit/{id?}/{a?}/{b?}/{c?}/{d?}', 'tabunganController@Update');
Route::get('/delete/{id?}', 'tabunganController@Destroy');


Route::get('/customer/tambah', 'tabunganController@Destroy');




// Route::get('/testmodel', function () {
//     $query = App\Post::all();
//     return $query;
// });
// Route::get('/testmodel2', function () {
//     $query = App\Post::find(1);
//     return $query;
// });
// Route::get('/testmodel3', function () {
//     $query = App\Post::where('title','like','%Contoh Title 1%')->get();
//     return $query;
// });
// Route::get('/testmodel4', function () {
//     $query = App\Post::find(2);
//     $query->title="Contoh Title 2";
//     $query->save();
//     return $query;
// });
// Route::get('/testmodel5', function () {
//     $query = App\Post::find(1);
//     $query->delete();
// });
// Route::get('/testmodel6', function () {
//     $query = new App\Post;
//     $query->title = "Contoh Title 4";
//     $query->content = "lorem ipsum";
//     $query->save();
//     return $query;
// });
// Route::get('profil/2', function () {
//     return 'Halo';
// });
// Route::get('profil/3', function () {
//     return 'Halo';
// });
// Route::get('tni/{nama?}/{bb?}/{umur?}', function ($nama = NULL,$bb = NULL, $umur = NULL) {
//         $g = 'Silahkan Isi Data Terlebih Dahulu';
//     if (isset($nama)) {
//         $g = 'Nama Anda ' .$nama;
//     }
//     if (isset($bb)) {
//         if($bb < 0) {
//             $f = 'Angka Tidak Valid';
//         }
//         else if ($bb >= 76 && $bb<= 100) {
//             $f = 'Anda Harus Turun Berat Badan';
//         }
//         else if ($bb >= 65 && $bb<= 75) {
//             $f = 'Ideal';
//         }
//         else if ($bb >= 50 && $bb <= 64) {
//             $f = 'Naikan Berat badan Badan';
//         }
//         else if ($bb < 50 && $bb > 0) {
//             $f = 'Anda Kurang Nutrisi';
//         }
        
//         $g .= '<br>Tubuh : ' .$f;
//     }
//     if (isset($umur)) {
//         if($umur < 0) {
//             $u = 'Angka Tidak Valid';
//         }
//         else if ($umur >= 50 && $umur <= 60) {
//             $u = 'Jendral';
//         }
//         else if ($umur >= 40 && $umur <= 50) {
//             $u = 'Laksamana';
//         }
//         else if ($umur >= 30 && $umur <= 40) {
//             $u = 'Perwira';
//         }
        
//         $g .= '<br>Jabatan : ' .$u;
//     }
    
//     return $g;
// });
// Route::get('{nama}/{alamat}/{Umur}', function ($a,$b,$c) {
//     return 'Halo : '. $a . '<br> Alamat : '.$b.'<br> Umur : '.$c;
// });




Route::get('lihat-data', function () {
    $query = App\Ktp::take(3)->get("nama");
    return $query;  
});
Route::get('lihat-data1', function () {
    $angka = 3;
    $query = App\Ktp::all()->take(3);
    return $query;  
});
Route::get('lihat-data2', function () {
    $angka = 3;
    $query = App\Ktp::take(1)->select('np','nama','tgl_lahir')->get();
    return $query;  
});
Route::get('lihat-data3/{np}/{nama)/{tgl_lahir}/{status}/{jenis_kelamin}/{agama}/{golongan_darah}', function($np,$nama,$tgl_lahir,$status,$jenis_kelamin,$agama,$golongan_darah) {
    $query = new App\Ktp;
    $query->np = $np;
    $query->nama = $nama;
    $query->tgl_lahir = $tgl_lahir;
    $query->status = $status;
    $query->jenis_kelamin = $jenis_kelamin;
    $query->agama = $agama;
    $query->golongan_darah = $golongan_darah;
    // dd($query);
    $query->save();
    return $query;
});




// Route::get('/tambah-data/{isi?}', function () {
//     $query = App\Post::where('title','like','%Contoh Title 1%')->get();
//     return $query;
// });