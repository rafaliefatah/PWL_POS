<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Rafazian',
                'penjualan_total' => 3,
                'penjualan_tanggal' => '2026-02-13',

            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Alief',
                'penjualan_total' => 5,
                'penjualan_tanggal' => '2026-02-14',

            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Fatah',
                'penjualan_total' => 1,
                'penjualan_tanggal' => '2026-02-16',

            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Rafa',
                'penjualan_total' => 2,
                'penjualan_tanggal' => '2026-02-17',

            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Zian',
                'penjualan_total' => 4,
                'penjualan_tanggal' => '2026-02-18',

            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Rafazian Alief',
                'penjualan_total' => 2,
                'penjualan_tanggal' => '2026-02-20',

            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Rafazian Fatah',
                'penjualan_total' => 1,
                'penjualan_tanggal' => '2026-02-21',

            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Alief Fatah',
                'penjualan_total' => 6,
                'penjualan_tanggal' => '2026-02-22',

            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Rafalief',
                'penjualan_total' => 2,
                'penjualan_tanggal' => '2026-02-23',

            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Aliefatah',
                'penjualan_total' => 2,
                'penjualan_tanggal' => '2026-02-24',

            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}