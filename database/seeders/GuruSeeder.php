<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'guru' => 'Eca',
            'nip' => '11',
            'matpel' => 'MTK',
            'tgllahir' => '10 agustus 1999',
            'tempatlahir' => 'Semarang',
            'jeniskelamin' => 'Perempuan',
            'notelp' => '081284954387',
            'agama' => 'Islam',
            'email' => 'raa@gmail.com',
            'password' => '12345'
        ]);
    }
}
