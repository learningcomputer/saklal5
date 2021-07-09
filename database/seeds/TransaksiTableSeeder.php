<?php

use App\Transaksi;
use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //

        $transaksis = array(
            ['barang' => 'Jam tangan', 'pelanggan_id' => '12'],
            ['barang' => 'Sepatu', 'pelanggan_id' => '12']

        );

        foreach($transaksis as $transaksi){
            Transaksi::create($transaksi);
        }
        // $transaksi = new \App\Transaksi();
        // $transaksi->barang = "Jam tangan";
        // $transaksi->pelanggan_id = "1";
        // $transaksi->barang = "Sepatu";
        // $transaksi->pelanggan_id = "1";
        // $transaksi->barang = "Sandal";
        // $transaksi->pelanggan_id = "1";
        // $transaksi->barang = "Kaos";
        // $transaksi->pelanggan_id = "1";
        // $transaksi->save();
    }
}
