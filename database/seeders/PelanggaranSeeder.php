<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggarans')->insert([
            'pelanggaran_siswa' => 'telat',
            'tindaklanjut' => 'ngetes',
            'jumlahpoin' => '10'
        ]);
    }
}
