<?php

use Illuminate\Database\Seeder;

class pelanggansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pelanggan = new \App\Pelanggan();
        $pelanggan->nama = "Adam";
        $pelanggan->save();
    }
}
