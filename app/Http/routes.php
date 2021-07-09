<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use Illuminate\Routing\Route;

//use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     echo 'Hallo... apakabar !!';
// });

Route::get('apakabar', function () {
    echo 'Hallo... apakabar !!';
});

Route::get('apakabar/{nama}', function ($nama) {
    echo 'Hallo... apakabar '.$nama;
});

// Route::post('test', function () {
//     echo 'POST';
// });

Route::get('test', function () {
    echo '<form method="POST" action="test">';
    echo '<input type="submit">';
    echo '<input type="hidden" value="PUT" name="_method">';
    echo '</form>';
});

Route::get('pelanggan', function () {
    $pelanggan = App\Pelanggan::find(1);
    echo '<pre>';
    print_r($pelanggan);
});

// Route::get('pelanggan', function () {
//     $pelanggan = App\Pelanggan::find(1);
//     echo '<pre>';
//     print_r($pelanggan -> nama);
// });

// Route::get('pelanggan/{id}', function ($id) {
//     $pelanggan = App\Pelanggan::find($id);
//     echo '<pre>';
//     print_r($pelanggan -> nama);
// });

// Route::get('transaksi', function () {
//     $transaksis = App\Transaksi::all();
//     foreach ($transaksis as $transaksi){
//         echo $transaksi->barang."<br/>";
//     }
// });

Route::get('transaksi', function () {
    $transaksis = App\Transaksi::all();
    foreach ($transaksis as $transaksi){
        $pelanggan = App\Pelanggan::find($transaksi->pelanggan_id);
        echo $transaksi->barang." Order by ".$pelanggan->nama."<br/>";
    }
});

// Route::get('pelanggan/{id}', function ($id) {
//     $pelanggan = App\Pelanggan::find($id);
//     echo '<pre>';
//     echo $pelanggan -> nama.'<br/>';
//     echo 'Pernah transaksi :';
//     echo '<ul>';
//     $transaksis = $pelanggan->transaksi;
//     foreach($transaksis as $barang){
//         echo '<li>'.$barang->barang.'</li>';
//     }
//     echo '</ul>';
// });

Route::get('pelanggan/{id}', 'PelangganController@Pelanggan');


// Route::get('HalamanView', function(){
//     echo '<html><head><title>Halaman View</title></head><body>';
//     echo 'Ini cuman halaman view biasa';
//     echo '</body></html>'; 
// });

// Route::get('HalamanView', function(){
//     return view('halaman_view'); 
// });

Route::get('HalamanView', function(){
    $data = array(
        'var1'=>'Jam Tangan',
        'var2'=>'Sepatu',
        'var3'=>'Buku',
        'transaksi'=> App\Transaksi::all()

    );
    return view('halaman_view',$data);
});
Route::auth();

Route::get('/home', 'HomeController@index');

// Route::get('khususadmin',function(){
//     echo "Halaman hanya untuk si Admin";
// })->middleware('auth');

Route::group(['middleware'=>'web'],function(){
    Route::get('khususadmin',function(){
        echo "Halaman hanya untuk si Admin";
    })->middleware('cekAdmin');
});
