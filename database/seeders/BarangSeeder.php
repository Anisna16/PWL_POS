<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 6, 'barang_kode' => 'SW', 'barang_nama' => 'Sweater', 'harga_beli' => '80000', 'harga_jual' => 85000],
            ['barang_id' => 2, 'kategori_id' => 7, 'barang_kode' => 'TS', 'barang_nama' => 'T-shirt', 'harga_beli' => '60000', 'harga_jual' => 65000],
            ['barang_id' => 3, 'kategori_id' => 8, 'barang_kode' => 'PN', 'barang_nama' => 'Pants', 'harga_beli' => '100000', 'harga_jual' => 110000],
            ['barang_id' => 4, 'kategori_id' => 9, 'barang_kode' => 'SH', 'barang_nama' => 'Shoes', 'harga_beli' => '200000', 'harga_jual' => 250000],
            ['barang_id' => 5, 'kategori_id' => 10, 'barang_kode' => 'BT', 'barang_nama' => 'Boots', 'harga_beli' => '200000', 'harga_jual' => 255000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'JT', 'barang_nama' => 'Jacket', 'harga_beli' => '300000', 'harga_jual' => 350000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'DN', 'barang_nama' => 'Denim', 'harga_beli' => '200000', 'harga_jual' => 250000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'TP', 'barang_nama' => 'Top', 'harga_beli' => '80000', 'harga_jual' => 85000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'SK', 'barang_nama' => 'Skirt', 'harga_beli' => '80000', 'harga_jual' => 85000],
            ['barang_id' => 10, 'kategori_id' => 1, 'barang_kode' => 'CN', 'barang_nama' => 'Coat', 'harga_beli' => '800000', 'harga_jual' => 850000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
