<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pelanggan as Pelanggan;

class PelangganController extends Controller
{
    //

    // public function Pelanggan($id){
    //     $pelanggan = Pelanggan::find($id);
    //     echo '<pre>';
    //     echo $pelanggan->nama . '<br/>';
    //     echo 'Pernah transaksi :';
    //     echo '<ul>';
    //     $transaksis = $pelanggan->transaksi;
    //     foreach ($transaksis as $barang) {
    //         echo '<li>' . $barang->barang . '</li>';
    //     }
    //     echo '</ul>';
    // }

    public function Pelanggan($id)
    {
        $pelanggan = Pelanggan::find($id);
        $data = array('pelanggan' => $pelanggan);
        return view('pelanggan', $data);
    }
}
