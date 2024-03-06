<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id'=>1, 
                'barang_id'=>6, 
                'user_id'=>2, 
                'stok_tanggal'=>now(), 
                'stok_jumlah'=>12,
            ],
            [
                'id'=>2, 
                'barang_id'=>7, 
                'user_id'=>2, 
                'stok_tanggal'=>now(), 
                'stok_jumlah'=>10,
            ],
            [
                'id' => 3, 
                'barang_id' => 8, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 23,
            ],
            [
                'id' => 4, 
                'barang_id' => 9, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 20,
            ],
            [
                'id' => 5, 
                'barang_id' => 10, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 20,
            ],
            [
                'id' => 6, 
                'barang_id' => 1,
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 10,
            ],
            [
                'id' => 7, 
                'barang_id' => 2, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 23,
            ],
            [
                'id' => 8, 
                'barang_id' => 3, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 12,
            ],
            [
                'id' => 9, 
                'barang_id' => 4, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 12,
            ],
            [
                'id' => 10, 
                'barang_id' => 5, 
                'user_id' => 2, 
                'stok_tanggal' => now(), 
                'stok_jumlah' => 23,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}