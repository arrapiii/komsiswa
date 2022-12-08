<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Arrott',
            'kelas' => '11',
            'jurusan' => 'PPLG',
            'nis' => '006512345',
            'jeniskelamin' => 'Laki-laki',
            'alamat' => 'Depok',
            'notelp' => '081284954387',
            'email' => 'ara@gmail.com',
            'password' => '12345',
            'walas' => 'Sinta nur Alifah'
        ]);
    }
}
