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
                'barang_kode' => 'B001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 5700000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'B002',
                'barang_nama' => 'Mouse',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'B003',
                'barang_nama' => 'Sepatu Olahraga',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'B004',
                'barang_nama' => 'Bola Sepak',
                'harga_beli' => 200000,
                'harga_jual' => 220000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'B005',
                'barang_nama' => 'Bedak Wajah',
                'harga_beli' => 100000,
                'harga_jual' => 125000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'B006',
                'barang_nama' => 'Lipstik',
                'harga_beli' => 50000,
                'harga_jual' => 55000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'B007',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 75000,
                'harga_jual' => 85000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'B008',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 100000,
                'harga_jual' => 115000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'B009',
                'barang_nama' => 'Jam Tangan',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'B010',
                'barang_nama' => 'Gelang',
                'harga_beli' => 50000,
                'harga_jual' => 52500,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
