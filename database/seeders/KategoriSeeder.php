<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'HJ', 'nama' => 'Hijab'],
            ['kategori_id' => 2, 'kategori_kode' => 'GM', 'nama' => 'Gamis'],
            ['kategori_id' => 3, 'kategori_kode' => 'BL', 'nama' => 'Blouse'],
            ['kategori_id' => 4, 'kategori_kode' => 'DR', 'nama' => 'Dress'],
            ['kategori_id' => 5, 'kategori_kode' => 'TK', 'nama' => 'Tunik'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
