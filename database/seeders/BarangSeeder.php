<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'C001',
                'barang_nama' => 'Chiki Lays',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'C002',
                'barang_nama' => 'Roti Gandum',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'C003',
                'barang_nama' => 'Foundation YOU',
                'harga_beli' => 95000,
                'harga_jual' => 102000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'C004',
                'barang_nama' => 'Lipcream Hanasui',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'C005',
                'barang_nama' => 'Pocarisweet',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'C006',
                'barang_nama' => 'Susu Indomilk 700 ml',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'C007',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'C008',
                'barang_nama' => 'Blender',
                'harga_beli' => 175000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'C009',
                'barang_nama' => 'Kemeja Flanel',
                'harga_beli' => 185000,
                'harga_jual' => 210000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'C010',
                'barang_nama' => 'Hijab Daisy',
                'harga_beli' => 65000,
                'harga_jual' => 80000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
