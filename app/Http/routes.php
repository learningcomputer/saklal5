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

Route::get('pelanggan/{id}', function ($id) {
    $pelanggan = App\Pelanggan::find($id);
    echo '<pre>';
    print_r($pelanggan -> nama);
});

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