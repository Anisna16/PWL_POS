<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 6, 'pembeli' => 'Anisa', 'penjualan_kode' => 'aa', 'penjualan_tanggal' => '0901'],
            ['penjualan_id' => 2, 'user_id' => 7, 'pembeli' => 'Mirna', 'penjualan_kode' => 'bb', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 3, 'user_id' => 8, 'pembeli' => 'Keenant', 'penjualan_kode' => 'cc', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 4, 'user_id' => 9, 'pembeli' => 'Ayesha', 'penjualan_kode' => 'dd', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 5, 'user_id' => 10, 'pembeli' => 'Mayang', 'penjualan_kode' => 'ee', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Yulinda', 'penjualan_kode' => 'ff', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 7, 'user_id' => 2, 'pembeli' => 'Mawar', 'penjualan_kode' => 'gg', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Nevi', 'penjualan_kode' => 'hh', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 9, 'user_id' => 2, 'pembeli' => 'Galih', 'penjualan_kode' => 'ii', 'penjualan_tanggal' => '0903'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Echa', 'penjualan_kode' => 'jj', 'penjualan_tanggal' => '0903']
        ];
        
        DB::table('t_penjualan')->insert($data);
    }
}